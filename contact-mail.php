<?php
// Mail handler for the Contact Us form (contact.php).
// Accepts an AJAX POST, validates it, emails info@mastersurgeon.in and answers with JSON:
// {"status": "success"|"error", "message": string, "errors": {field: message}}

require __DIR__ . '/components/json-endpoint.php';

json_endpoint_run(__DIR__ . '/contact-mail.log', function () {
    require __DIR__ . '/components/contact-form.php';

    $form = handle_contact_request(contact_mail_config()['recipient']);
    if ($form['status'] === 'success') {
        $form['message'] = 'You have submitted your request. Our team will get back to you shortly.';
    }
    return $form;
});
