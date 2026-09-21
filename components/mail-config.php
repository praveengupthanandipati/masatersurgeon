<?php
// Mail settings for the Contact Us and Book Free Consultation forms.
//
// 1. Change 'recipient' to change where enquiries are delivered (it is the only place to edit).
// 2. To actually send mail, fill in the 'smtp' block. Leave 'host' empty to use PHP mail()
//    (works only if the server has a mail service configured).
//
// Gmail example: host smtp.gmail.com, port 587, secure 'tls', username = your Gmail address,
// password = a Google "App password" (Google Account > Security > 2-Step Verification > App passwords).
// Not your normal Gmail password.
//
// Keep passwords out of git: put your real 'smtp' values in components/mail-config.local.php
// (git-ignored). It is merged over this file, e.g.:
//   <?php return ['smtp' => ['host' => 'smtp.gmail.com', 'username' => 'you@gmail.com', 'password' => 'app-password']];

$config = [
    'recipient'  => 'praveennandipati@gmail.com',
    'from_email' => '',                          // empty = SMTP username, else no-reply@<your domain>
    'from_name'  => 'Master Surgeon Website',
    'smtp' => [
        'host'     => '',                        // e.g. smtp.gmail.com
        'port'     => 587,                       // 587 with 'tls', 465 with 'ssl'
        'secure'   => 'tls',                     // 'tls', 'ssl' or '' for none
        'username' => '',
        'password' => '',
    ],
];

$local = __DIR__ . '/mail-config.local.php';
if (is_file($local)) {
    $config = array_replace_recursive($config, require $local);
}

return $config;
