<?php
// Contact form and free-consultation form: validation + email sending.
// Written for PHP 7.0+ (no arrow functions, match or ??=) so it runs on older shared hosting.

// Some hosts ship PHP without the mbstring extension; provide minimal stand-ins so the pages don't fatal.
if (!function_exists('mb_strlen')) {
    function mb_strlen($string, $encoding = null)
    {
        return (int) preg_match_all('/./us', (string) $string);
    }
}
if (!function_exists('mb_encode_mimeheader')) {
    function mb_encode_mimeheader($string, $charset = 'UTF-8', $transferEncoding = 'B', $linefeed = "\r\n")
    {
        return preg_match('/^[\x20-\x7E]*$/', $string) ? $string : '=?UTF-8?B?' . base64_encode($string) . '?=';
    }
}

function contact_e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// Trims and strips control characters (newlines are kept only for the message field).
function contact_clean_field(string $value, bool $multiline = false): string
{
    $value = trim($value);
    $pattern = $multiline ? '/[^\P{C}\n]+/u' : '/\p{C}+/u';
    return trim((string) preg_replace($pattern, ' ', str_replace("\r\n", "\n", $value)));
}

// Returns [cleanValues, errors]; $errors is empty when the form is valid.
function validate_contact_form(array $input): array
{
    $values = [
        'name'    => contact_clean_field((string) ($input['name'] ?? '')),
        'phone'   => contact_clean_field((string) ($input['phone'] ?? '')),
        'email'   => contact_clean_field((string) ($input['email'] ?? '')),
        'subject' => contact_clean_field((string) ($input['subject'] ?? '')),
        'message' => contact_clean_field((string) ($input['message'] ?? ''), true),
    ];
    $errors = [];

    $nameLen = mb_strlen($values['name']);
    if ($nameLen === 0) {
        $errors['name'] = 'Please enter your name.';
    } elseif ($nameLen < 2 || $nameLen > 80 || !preg_match("/^[\p{L}][\p{L}\s.'-]*$/u", $values['name'])) {
        $errors['name'] = 'Please enter a valid name (letters only, 2-80 characters).';
    }

    $digits = preg_replace('/[\s().-]/', '', $values['phone']);
    if ($values['phone'] === '') {
        $errors['phone'] = 'Please enter your phone number.';
    } elseif (!preg_match('/^\+?\d{10,15}$/', $digits)) {
        $errors['phone'] = 'Please enter a valid phone number (10-15 digits).';
    }

    if ($values['email'] === '') {
        $errors['email'] = 'Please enter your email address.';
    } elseif (mb_strlen($values['email']) > 120 || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }

    $subjectLen = mb_strlen($values['subject']);
    if ($subjectLen === 0) {
        $errors['subject'] = 'Please enter a subject.';
    } elseif ($subjectLen < 3 || $subjectLen > 120) {
        $errors['subject'] = 'Subject must be between 3 and 120 characters.';
    }

    $messageLen = mb_strlen($values['message']);
    if ($messageLen === 0) {
        $errors['message'] = 'Please enter your message.';
    } elseif ($messageLen < 10 || $messageLen > 2000) {
        $errors['message'] = 'Message must be between 10 and 2000 characters.';
    }

    return [$values, $errors];
}

// Emails the enquiry to $recipient. Reply-To is the visitor, so replying goes straight to them.
function send_contact_email(array $fields, string $recipient): bool
{
    $body = "New enquiry from the Master Surgeon website contact form.\r\n\r\n"
        . 'Name:    ' . $fields['name'] . "\r\n"
        . 'Phone:   ' . $fields['phone'] . "\r\n"
        . 'Email:   ' . $fields['email'] . "\r\n"
        . 'Subject: ' . $fields['subject'] . "\r\n\r\n"
        . "Message:\r\n" . str_replace("\n", "\r\n", $fields['message']) . "\r\n\r\n"
        . contact_mail_footer();

    return contact_send_mail($recipient, 'Website enquiry: ' . $fields['subject'], $body, $fields['name'], $fields['email']);
}

function contact_mail_footer(): string
{
    return "--\r\n"
        . 'Sent: ' . date('d M Y, h:i A') . "\r\n"
        . 'IP:   ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\r\n";
}

// Mail settings (recipient, SMTP) live in components/mail-config.php.
function contact_mail_config(): array
{
    static $config = null;
    if ($config === null) {
        $config = require __DIR__ . '/mail-config.php';
    }
    return $config;
}

// Sends through SMTP (PHPMailer) when an SMTP host is configured, otherwise falls back to PHP mail().
// $subject must already be free of line breaks (validated fields are).
function contact_send_mail(string $recipient, string $subject, string $body, $replyName = null, $replyEmail = null): bool
{
    $config = contact_mail_config();
    $smtp = $config['smtp'];

    $host = preg_replace('/^www\./i', '', $_SERVER['SERVER_NAME'] ?? '');
    $from = $config['from_email'] !== '' ? $config['from_email']
        : ($smtp['username'] !== '' && filter_var($smtp['username'], FILTER_VALIDATE_EMAIL) ? $smtp['username']
        : 'no-reply@' . (strpos($host, '.') !== false ? $host : 'mastersurgeon.in'));

    if ($smtp['host'] !== '') {
        return contact_send_smtp($config, $from, $recipient, $subject, $body, $replyName, $replyEmail);
    }

    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . mb_encode_mimeheader($config['from_name'], 'UTF-8', 'B', "\r\n") . ' <' . $from . '>',
        'X-Mailer: PHP/' . PHP_VERSION,
    ];
    if ($replyEmail !== null) {
        $headers[] = 'Reply-To: ' . mb_encode_mimeheader((string) $replyName, 'UTF-8', 'B', "\r\n") . ' <' . $replyEmail . '>';
    }

    $sent = @mail($recipient, mb_encode_mimeheader($subject, 'UTF-8', 'B', "\r\n"), $body, implode("\r\n", $headers));
    if (!$sent) {
        error_log('Contact form: mail() failed. Set the SMTP details in components/mail-config.php.');
    }
    return $sent;
}

function contact_send_smtp(array $config, string $from, string $recipient, string $subject, string $body, $replyName, $replyEmail): bool
{
    $autoload = __DIR__ . '/../vendor/autoload.php';
    if (!is_file($autoload)) {
        error_log('Contact form: vendor/autoload.php missing. Run "composer install" or upload the vendor folder.');
        return false;
    }
    require_once $autoload;

    $smtp = $config['smtp'];
    try {
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = $smtp['host'];
        $mail->Port = (int) $smtp['port'];
        $mail->SMTPAuth = $smtp['username'] !== '';
        $mail->Username = $smtp['username'];
        $mail->Password = $smtp['password'];
        if ($smtp['secure'] === 'ssl') {
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($smtp['secure'] === 'tls') {
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        } else {
            $mail->SMTPSecure = '';
        }
        $mail->SMTPAutoTLS = $smtp['secure'] !== '';
        $mail->Timeout = 15;
        $mail->CharSet = 'UTF-8';

        $mail->setFrom($from, $config['from_name']);
        $mail->addAddress($recipient);
        if ($replyEmail !== null) {
            $mail->addReplyTo($replyEmail, (string) $replyName);
        }
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->isHTML(false);

        return $mail->send();
    } catch (Throwable $e) {
        error_log('Contact form SMTP error: ' . $e->getMessage());
        return false;
    }
}

// Free-consultation booking form (book-free-appointment.php).
// $cities / $treatments are the allowed <select> values; anything else is rejected.
function validate_appointment_form(array $input, array $cities, array $treatments): array
{
    $values = [
        'name'      => contact_clean_field((string) ($input['name'] ?? '')),
        'phone'     => contact_clean_field((string) ($input['phone'] ?? '')),
        'city'      => contact_clean_field((string) ($input['city'] ?? '')),
        'treatment' => contact_clean_field((string) ($input['treatment'] ?? '')),
    ];
    $errors = [];

    $nameLen = mb_strlen($values['name']);
    if ($nameLen === 0) {
        $errors['name'] = 'Please enter the patient name.';
    } elseif ($nameLen < 2 || $nameLen > 80 || !preg_match("/^[\p{L}][\p{L}\s.'-]*$/u", $values['name'])) {
        $errors['name'] = 'Please enter a valid name (letters only, 2-80 characters).';
    }

    $digits = preg_replace('/[\s().-]/', '', $values['phone']);
    $digits = preg_replace('/^(?:\+?91|0)(?=\d{10}$)/', '', $digits);
    if ($values['phone'] === '') {
        $errors['phone'] = 'Please enter your mobile number.';
    } elseif (!preg_match('/^[6-9]\d{9}$/', $digits)) {
        $errors['phone'] = 'Please enter a valid 10 digit mobile number.';
    } else {
        $values['phone'] = $digits;
    }

    if ($values['city'] === '') {
        $errors['city'] = 'Please select your city.';
    } elseif (!in_array($values['city'], $cities, true)) {
        $errors['city'] = 'Please select a city from the list.';
    }

    if ($values['treatment'] === '') {
        $errors['treatment'] = 'Please select a disease or treatment.';
    } elseif (!in_array($values['treatment'], $treatments, true)) {
        $errors['treatment'] = 'Please select a disease or treatment from the list.';
    }

    return [$values, $errors];
}

function send_appointment_email(array $fields, string $recipient): bool
{
    $body = "New FREE consultation request from the Master Surgeon website.\r\n\r\n"
        . 'Patient name: ' . $fields['name'] . "\r\n"
        . 'Mobile:       +91 ' . $fields['phone'] . "\r\n"
        . 'City:         ' . $fields['city'] . "\r\n"
        . 'Disease:      ' . $fields['treatment'] . "\r\n\r\n"
        . "Please call the patient back at the earliest.\r\n\r\n"
        . contact_mail_footer();

    return contact_send_mail($recipient, 'Free consultation request: ' . $fields['treatment'] . ' - ' . $fields['name'], $body);
}

// POST handler for the booking form; same return shape as handle_contact_request().
function handle_appointment_request(string $recipient, array $cities, array $treatments): array
{
    $state = ['status' => null, 'message' => '', 'errors' => [], 'values' => []];

    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
        return $state;
    }

    $token = (string) ($_POST['csrf_token'] ?? '');
    if ($token === '' || !hash_equals($_SESSION['contact_csrf'] ?? '', $token)) {
        $state['status'] = 'error';
        $state['message'] = 'Your session has expired. Please refresh the page and try again.';
        return $state;
    }

    $thanks = 'Thank you! Your request has been received. Our care coordinator will call you at the earliest.';

    if (trim((string) ($_POST['website'] ?? '')) !== '') {
        $state['status'] = 'success';
        $state['message'] = $thanks;
        return $state;
    }

    list($values, $errors) = validate_appointment_form($_POST, $cities, $treatments);
    $state['values'] = $values;
    if ($errors) {
        $state['status'] = 'error';
        $state['message'] = 'Please correct the highlighted fields.';
        $state['errors'] = $errors;
        return $state;
    }

    if (time() - (int) ($_SESSION['appointment_last_sent'] ?? 0) < 30) {
        $state['status'] = 'error';
        $state['message'] = 'Please wait a moment before sending another request.';
        return $state;
    }

    if (send_appointment_email($values, $recipient)) {
        $_SESSION['appointment_last_sent'] = time();
        $state['status'] = 'success';
        $state['message'] = $thanks;
        $state['values'] = [];
    } else {
        $state['status'] = 'error';
        $state['message'] = 'Sorry, we could not send your request right now. Please call us or message us on WhatsApp.';
    }

    return $state;
}

// Handles a POST from the contact form. Returns the state contact.php renders:
// ['status' => null|'success'|'error', 'message' => string, 'errors' => [], 'values' => []]
function handle_contact_request(string $recipient): array
{
    $state = ['status' => null, 'message' => '', 'errors' => [], 'values' => []];

    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
        return $state;
    }

    $token = (string) ($_POST['csrf_token'] ?? '');
    if ($token === '' || !hash_equals($_SESSION['contact_csrf'] ?? '', $token)) {
        $state['status'] = 'error';
        $state['message'] = 'Your session has expired. Please refresh the page and try again.';
        return $state;
    }

    // Honeypot: real visitors never see or fill this field. Pretend success so bots don't retry.
    if (trim((string) ($_POST['website'] ?? '')) !== '') {
        $state['status'] = 'success';
        $state['message'] = 'Thank you! Your message has been sent. We will get back to you shortly.';
        return $state;
    }

    list($values, $errors) = validate_contact_form($_POST);
    if ($errors) {
        $state['status'] = 'error';
        $state['message'] = 'Please correct the highlighted fields.';
        $state['errors'] = $errors;
        $state['values'] = $values;
        return $state;
    }

    if (time() - (int) ($_SESSION['contact_last_sent'] ?? 0) < 30) {
        $state['status'] = 'error';
        $state['message'] = 'Please wait a moment before sending another message.';
        $state['values'] = $values;
        return $state;
    }

    if (send_contact_email($values, $recipient)) {
        $_SESSION['contact_last_sent'] = time();
        $state['status'] = 'success';
        $state['message'] = 'Thank you! Your message has been sent. We will get back to you shortly.';
    } else {
        $state['status'] = 'error';
        $state['message'] = 'Sorry, we could not send your message right now. Please call us or message us on WhatsApp.';
        $state['values'] = $values;
    }

    return $state;
}
