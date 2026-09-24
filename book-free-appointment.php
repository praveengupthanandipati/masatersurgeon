<?php
if (session_status() !== PHP_SESSION_ACTIVE) { @session_start(); }
$data = require __DIR__ . '/components/data.php';
require __DIR__ . '/components/contact-form.php';

$info = $data['contact_info'];
$appt = $data['appointment'];
$treatments = array_map(function ($t) { return html_entity_decode($t, ENT_QUOTES | ENT_HTML5, 'UTF-8'); }, $data['treatment_options']);
$treatments[] = 'Other / Not sure';

if (empty($_SESSION['contact_csrf'])) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(16));
}

$form = handle_appointment_request(contact_mail_config()['recipient'], $appt['cities'], $treatments);

if (($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') === 'XMLHttpRequest') {
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode(['status' => $form['status'], 'message' => $form['message'], 'errors' => $form['errors']]);
    exit;
}

$old = $form['values'];
$err = $form['errors'];
$invalid = function ($key) use ($err) { return isset($err[$key]) ? ' is-invalid' : ''; };
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
                <h1 class="page-hero-title" data-aos="fade-down">Book Free Consultation</h1>
                <div class="page-hero-breadcrumb" data-aos="fade-up" data-aos-delay="150">
                    <a href="index.php">Home</a>
                    <i class="fi fi-rs-angle-small-right"></i>
                    <span>Book Free Appointment</span>
                </div>
            </div>
        </section>
        <!--/ page hero -->

        <!-- booking -->
        <section class="appt-section">
            <div class="container-90">
                <div class="appt-card row g-0" data-aos="fade-up">
                    <aside class="appt-left col-12 col-lg-6">
                        <span class="appt-pill"><i class="fi fi-rs-shield-check"></i> First consultation is FREE</span>
                        <h2 class="appt-title">Simplifying <em>Surgery</em> Experience</h2>
                        <p class="appt-subtitle">Consult with our expert surgeon for more than <?= count($data['services']) ?> treatment areas.</p>

                        <h3 class="appt-steps-title">Your next steps</h3>
                        <ol class="appt-steps">
                            <?php foreach ($appt['steps'] as $i => $step): ?>
                                <li>
                                    <span class="appt-step-badge"><i class="fi <?= $step['icon'] ?>"></i></span>
                                    <span><small>Step <?= $i + 1 ?></small><?= $step['text'] ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ol>

                        <div class="appt-stats">
                            <?php foreach ($appt['stats'] as $stat): ?>
                                <div class="appt-stat">
                                    <strong><?= $stat['value'] ?></strong>
                                    <span><?= $stat['label'] ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </aside>

                    <div class="appt-right col-12 col-lg-6">
                        <h2 class="appt-form-title">Book <span>FREE</span> Doctor Consultation</h2>
                        <p class="appt-form-sub">Share a few details and our care coordinator will call you back.</p>

                        <div id="apptAlert" class="contact-alert<?= $form['status'] ? ' contact-alert-' . $form['status'] : '' ?>" role="alert" aria-live="polite"<?= $form['status'] ? '' : ' hidden' ?>><?= contact_e($form['message']) ?></div>

                        <form id="apptForm" method="post" action="book-free-appointment.php" novalidate>
                            <input type="hidden" name="csrf_token" value="<?= contact_e($_SESSION['contact_csrf']) ?>">
                            <div class="contact-hp" aria-hidden="true">
                                <label for="apptWebsite">Leave this field empty</label>
                                <input type="text" id="apptWebsite" name="website" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="contact-field">
                                <div class="appt-control">
                                    <i class="fi fi-rs-user"></i>
                                    <input type="text" id="apptName" name="name" class="contact-input<?= $invalid('name') ?>" placeholder="Patient Name" aria-label="Patient Name" value="<?= contact_e($old['name'] ?? '') ?>" maxlength="80" autocomplete="name" required>
                                </div>
                                <small class="contact-error" data-error-for="name"><?= contact_e($err['name'] ?? '') ?></small>
                            </div>
                            <div class="contact-field">
                                <div class="appt-control">
                                    <i class="fi fi-rs-smartphone"></i>
                                    <input type="tel" id="apptPhone" name="phone" class="contact-input<?= $invalid('phone') ?>" placeholder="10 digit mobile number" aria-label="Mobile number" value="<?= contact_e($old['phone'] ?? '') ?>" maxlength="16" autocomplete="tel-national" inputmode="numeric" required>
                                </div>
                                <small class="contact-error" data-error-for="phone"><?= contact_e($err['phone'] ?? '') ?></small>
                            </div>
                            <div class="contact-field">
                                <div class="appt-control">
                                    <i class="fi fi-rs-marker"></i>
                                    <select id="apptCity" name="city" class="contact-input<?= $invalid('city') ?>" aria-label="Select City" required>
                                        <option value="">Select City</option>
                                        <?php foreach ($appt['cities'] as $city): ?>
                                            <option value="<?= contact_e($city) ?>"<?= ($old['city'] ?? '') === $city ? ' selected' : '' ?>><?= contact_e($city) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <small class="contact-error" data-error-for="city"><?= contact_e($err['city'] ?? '') ?></small>
                            </div>
                            <div class="contact-field">
                                <div class="appt-control">
                                    <i class="fi fi-rs-stethoscope"></i>
                                    <select id="apptTreatment" name="treatment" class="contact-input<?= $invalid('treatment') ?>" aria-label="Select Disease" required>
                                        <option value="">Select Disease</option>
                                        <?php foreach ($treatments as $treatment): ?>
                                            <option value="<?= contact_e($treatment) ?>"<?= ($old['treatment'] ?? '') === $treatment ? ' selected' : '' ?>><?= contact_e($treatment) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <small class="contact-error" data-error-for="treatment"><?= contact_e($err['treatment'] ?? '') ?></small>
                            </div>

                            <button type="submit" class="about-btn appt-submit" id="apptSubmit">Book Free Appointment <i class="fi fi-rs-arrow-small-right"></i></button>
                            <p class="appt-note"><i class="fi fi-rs-lock"></i> Your data is secured. We prioritize your medical privacy.</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--/ booking -->

        <!-- what to expect -->
        <section class="appt-expect">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Your Consultation</span>
                    <h2 class="section-title">What to Expect at Your Visit</h2>
                    <p class="section-subtitle">A clear, unhurried conversation so you understand your condition and every option before you decide anything.</p>
                </div>
                <div class="row g-4 row-cards justify-content-center">
                    <?php foreach ($appt['expect'] as $i => $item): ?>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="appt-expect-card" data-aos="fade-up" data-aos-delay="<?= $i * 80 ?>">
                                <span class="appt-step-icon"><i class="fi <?= $item['icon'] ?>"></i></span>
                                <h3><?= $item['title'] ?></h3>
                                <p><?= $item['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ what to expect -->

        <!-- what to bring -->
        <section class="appt-bring">
            <div class="container-90">
                <div class="row align-items-center g-4 g-lg-5">
                    <div class="col-12 col-md-6">
                        <div data-aos="fade-right">
                            <span class="section-eyebrow">Be Prepared</span>
                            <h2 class="section-title">What to Bring With You</h2>
                            <p class="section-subtitle">Having these ready helps the surgeon give you faster, more accurate advice. Don&rsquo;t worry if you don&rsquo;t have everything &mdash; you can still book.</p>
                            <a href="<?= contact_e($info['phone_href']) ?>" class="about-btn"><i class="fi fi-rs-phone-call"></i> Need help? Call <?= contact_e($info['phone_display']) ?></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="appt-checklist" data-aos="fade-left">
                            <?php foreach ($appt['bring'] as $item): ?>
                                <li><i class="fi fi-rs-check"></i> <?= $item ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--/ what to bring -->

        <!-- consultation faq -->
        <section class="faq-section">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Good to Know</span>
                    <h2 class="section-title">Consultation Questions</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="faq-list">
                            <?php foreach ($appt['faqs'] as $faq): ?>
                                <details class="faq-item" data-aos="fade-up">
                                    <summary><?= $faq['q'] ?></summary>
                                    <p><?= $faq['a'] ?></p>
                                </details>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ consultation faq -->

        <?php include 'components/cta.php'; ?>

        <?php
        $faqSchema = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => []];
        foreach ($appt['faqs'] as $faq) {
            $faqSchema['mainEntity'][] = [
                '@type' => 'Question',
                'name' => html_entity_decode(strip_tags($faq['q']), ENT_QUOTES | ENT_HTML5, 'UTF-8'),
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => html_entity_decode(strip_tags($faq['a']), ENT_QUOTES | ENT_HTML5, 'UTF-8')],
            ];
        }
        ?>
        <script type="application/ld+json"><?= json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) ?></script>
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
