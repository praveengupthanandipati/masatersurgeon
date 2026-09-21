<?php
session_start();
$data = require __DIR__ . '/components/data.php';
require __DIR__ . '/components/contact-form.php';

$info = $data['contact_info'];
if (empty($_SESSION['contact_csrf'])) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(16));
}

$form = handle_contact_request(contact_mail_config()['recipient']);

if (($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') === 'XMLHttpRequest') {
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode(['status' => $form['status'], 'message' => $form['message'], 'errors' => $form['errors']]);
    exit;
}

$old = $form['values'];
$err = $form['errors'];
$field = fn(string $key) => contact_e($old[$key] ?? '');
$invalid = fn(string $key) => isset($err[$key]) ? ' is-invalid' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'components/head.php'; ?>
</head>
<body>
    <!-- page loader -->
    <div id="load" class="page-loader">
        <img src="img/logo-dark.svg" alt="Master Surgeon" class="page-loader-logo">
        <span class="page-loader-spinner"></span>
    </div>
    <!--/ page loader -->
    <?php include 'components/header.php'; ?>
    <!-- main-->
    <main>
        <!-- page hero / breadcrumb -->
        <section class="page-hero">
            <div class="container-90">
                <h1 class="page-hero-title" data-aos="fade-down">Contact Us</h1>
                <div class="page-hero-breadcrumb" data-aos="fade-up" data-aos-delay="150">
                    <a href="index.php">Home</a>
                    <i class="fi fi-rs-angle-small-right"></i>
                    <span>Contact Us</span>
                </div>
            </div>
        </section>
        <!--/ page hero -->

        <!-- contact -->
        <section class="contact-section">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Get In Touch</span>
                    <h2 class="section-title">We&rsquo;re Here to Help</h2>
                    <p class="section-subtitle">Call, message or send us an enquiry and our team will get back to you shortly. Your first consultation is free.</p>
                </div>

                <div class="contact-grid">
                    <div class="contact-info" data-aos="fade-right">
                        <div class="contact-card">
                            <span class="contact-card-icon"><i class="fi fi-rs-phone-call"></i></span>
                            <div>
                                <h3 class="contact-card-title">Phone</h3>
                                <a href="<?= contact_e($info['phone_href']) ?>"><?= contact_e($info['phone_display']) ?></a>
                                <a href="<?= contact_e($info['whatsapp_href']) ?>" target="_blank" rel="noopener">Chat on WhatsApp</a>
                            </div>
                        </div>
                        <div class="contact-card">
                            <span class="contact-card-icon"><i class="fi fi-rs-envelope"></i></span>
                            <div>
                                <h3 class="contact-card-title">Email</h3>
                                <a href="mailto:<?= contact_e($info['email']) ?>"><?= contact_e($info['email']) ?></a>
                            </div>
                        </div>
                        <?php if ($info['address'] !== ''): ?>
                            <div class="contact-card">
                                <span class="contact-card-icon"><i class="fi fi-rs-marker"></i></span>
                                <div>
                                    <h3 class="contact-card-title">Address</h3>
                                    <p><?= nl2br(contact_e($info['address'])) ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="contact-card">
                            <span class="contact-card-icon"><i class="fi fi-rs-clock"></i></span>
                            <div>
                                <h3 class="contact-card-title">Working Hours</h3>
                                <p><?= contact_e($info['hours']) ?></p>
                                <p>24x7 helpline for emergencies</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form-wrap" data-aos="fade-left">
                        <h3 class="contact-form-title">Send Us a Message</h3>
                        <div id="contactAlert" class="contact-alert<?= $form['status'] ? ' contact-alert-' . $form['status'] : '' ?>" role="alert" aria-live="polite"<?= $form['status'] ? '' : ' hidden' ?>><?= contact_e($form['message']) ?></div>

                        <form id="contactForm" class="contact-form" method="post" action="contact.php" novalidate>
                            <input type="hidden" name="csrf_token" value="<?= contact_e($_SESSION['contact_csrf']) ?>">
                            <div class="contact-hp" aria-hidden="true">
                                <label for="website">Leave this field empty</label>
                                <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="contact-row">
                                <div class="contact-field">
                                    <label for="cfName">Full Name <span>*</span></label>
                                    <input type="text" id="cfName" name="name" class="contact-input<?= $invalid('name') ?>" value="<?= $field('name') ?>" maxlength="80" autocomplete="name" required>
                                    <small class="contact-error" data-error-for="name"><?= contact_e($err['name'] ?? '') ?></small>
                                </div>
                                <div class="contact-field">
                                    <label for="cfPhone">Phone Number <span>*</span></label>
                                    <input type="tel" id="cfPhone" name="phone" class="contact-input<?= $invalid('phone') ?>" value="<?= $field('phone') ?>" maxlength="20" autocomplete="tel" inputmode="tel" required>
                                    <small class="contact-error" data-error-for="phone"><?= contact_e($err['phone'] ?? '') ?></small>
                                </div>
                            </div>

                            <div class="contact-row">
                                <div class="contact-field">
                                    <label for="cfEmail">Email Address <span>*</span></label>
                                    <input type="email" id="cfEmail" name="email" class="contact-input<?= $invalid('email') ?>" value="<?= $field('email') ?>" maxlength="120" autocomplete="email" required>
                                    <small class="contact-error" data-error-for="email"><?= contact_e($err['email'] ?? '') ?></small>
                                </div>
                                <div class="contact-field">
                                    <label for="cfSubject">Subject <span>*</span></label>
                                    <input type="text" id="cfSubject" name="subject" class="contact-input<?= $invalid('subject') ?>" value="<?= $field('subject') ?>" maxlength="120" required>
                                    <small class="contact-error" data-error-for="subject"><?= contact_e($err['subject'] ?? '') ?></small>
                                </div>
                            </div>

                            <div class="contact-field">
                                <label for="cfMessage">Message <span>*</span></label>
                                <textarea id="cfMessage" name="message" class="contact-input<?= $invalid('message') ?>" rows="5" maxlength="2000" required><?= $field('message') ?></textarea>
                                <small class="contact-error" data-error-for="message"><?= contact_e($err['message'] ?? '') ?></small>
                            </div>

                            <button type="submit" class="about-btn contact-submit" id="contactSubmit"><i class="fi fi-rs-paper-plane"></i> Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--/ contact -->

        <?php include 'components/cta.php'; ?>

        <?php
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            'name' => 'Contact Master Surgeon',
            'url' => $data['pages']['contact.php']['canonical'],
            'mainEntity' => array_filter([
                '@type' => 'MedicalBusiness',
                'name' => 'Master Surgeon',
                'medicalSpecialty' => 'Surgery',
                'telephone' => '+919676717852',
                'email' => $info['email'],
                'openingHours' => 'Mo-Sa 09:00-20:00',
                'address' => $info['address'] !== '' ? ['@type' => 'PostalAddress', 'streetAddress' => $info['address']] : null,
            ]),
        ];
        ?>
        <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) ?></script>
    </main>
    <!--/ main-->

    <?php include 'components/footer.php'; ?>

    <!-- floating actions: whatsapp + back to top -->
    <div class="floating-actions">
        <a href="https://wa.me/919676717852" target="_blank" rel="noopener" class="floating-whatsapp" aria-label="Chat on WhatsApp">
            <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor" aria-hidden="true">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413"/>
            </svg>
        </a>
        <button type="button" id="movetop" class="floating-movetop" aria-label="Back to top">
            <i class="fi fi-rs-angle-small-up"></i>
        </button>
    </div>

    <?php include 'components/scripts.php'; ?>
</body>
</html>
