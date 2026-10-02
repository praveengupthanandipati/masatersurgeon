<?php
// Mail handler for the "Book FREE Consultation" form (components/consultation-form.php).
// Accepts an AJAX POST, validates it, emails info@mastersurgeon.in and answers with JSON:
// {"status": "success"|"error", "message": string, "errors": {field: message}}

require __DIR__ . '/components/json-endpoint.php';

json_endpoint_run(__DIR__ . '/consultation-mail.log', function () {
    $data = require __DIR__ . '/components/data.php';
    require __DIR__ . '/components/contact-form.php';

    $treatments = array_map(function ($t) { return html_entity_decode($t, ENT_QUOTES | ENT_HTML5, 'UTF-8'); }, $data['treatment_options']);
    $treatments[] = 'Other / Not sure';

    $config = contact_mail_config();
    $recipient = !empty($config['consultation_recipient']) ? $config['consultation_recipient'] : $config['recipient'];

    $form = handle_appointment_request($recipient, $data['appointment']['cities'], $treatments);
    if ($form['status'] === 'success') {
        $form['message'] = 'Your free consultation has been booked successfully. The relevant doctor will contact you shortly.';
    }
    return $form;
});
