<?php $data = require __DIR__ . '/components/data.php'; ?>
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
                <h1 class="page-hero-title">About Master Surgeon</h1>
                <div class="page-hero-breadcrumb">
                    <a href="index.php">Home</a>
                    <i class="fi fi-rs-angle-small-right"></i>
                    <span>About Us</span>
                </div>
            </div>
        </section>
        <!--/ page hero -->

        <!-- intro about master surgeon -->
        <section class="about-section">
            <div class="container-90">
                <div class="row align-items-center g-4 g-lg-5 about-row">
                    <div class="col-12 col-lg-5">
                        <div class="about-media" data-aos="fade-right">
                            <div class="about-media-frame">
                                <img src="img/drravi.jpg" alt="Dr. S. Ravi Kumar - Laparoscopic &amp; Laser Surgeon" class="about-img">
                            </div>
                            <div class="about-badge">
                                <i class="fi fi-rs-user-md"></i>
                                <div>
                                    <strong>Dr. S. Ravi Kumar</strong>
                                    <span>Laparoscopic &amp; Laser Surgeon</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7">
                        <div class="about-content" data-aos="fade-left">
                            <span class="section-eyebrow">Who We Are</span>
                            <h2 class="about-title">India's Trusted Name in <span>Laparoscopic Surgical Care</span></h2>
                            <p class="about-text">Master Surgeon is a dedicated laparoscopic and general surgery clinic led by Dr. S. Ravi Kumar, offering advanced, minimally invasive treatment for hernia, piles, fistula, fissure, gallstones, hydrocele, hysterectomy, thyroid, breast and stomach &amp; intestine conditions. With a focus on precision, patient comfort and quicker recovery, we combine modern laparoscopic &amp; laser techniques with a genuinely personal approach to every consultation.</p>
                            <p class="about-text">From your first visit to full recovery, our team is committed to clear communication, safe surgical practices and compassionate care &mdash; helping over 50,000 patients get back to their lives faster and with confidence.</p>

                            <ul class="about-list">
                                <li><i class="fi fi-rs-check-circle"></i> Advanced Laparoscopic &amp; Laser Techniques</li>
                                <li><i class="fi fi-rs-check-circle"></i> Personalized, Patient-First Care</li>
                                <li><i class="fi fi-rs-check-circle"></i> Transparent Consultation &amp; Follow-up</li>
                            </ul>

                            <a href="tel:+919676717852" class="about-btn">Book Free Appointment <i class="fi fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ intro about master surgeon -->

        <!-- why choose master surgeon -->
        <section class="why-section">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Why Choose Us</span>
                    <h2 class="section-title">Why Patients Choose Master Surgeon</h2>
                    <p class="section-subtitle">Everything about our clinic is built around safer surgery, faster recovery and a better patient experience.</p>
                </div>

                <div class="row g-4 row-cards justify-content-center">
                    <?php foreach ($data['why_choose'] as $i => $reason): ?>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="why-card" data-aos="fade-up" data-aos-delay="<?= ($i % 4) * 60 ?>">
                                <span class="why-card-icon"><i class="fi <?= $reason['icon'] ?>"></i></span>
                                <h3 class="why-card-title"><?= $reason['title'] ?></h3>
                                <p class="why-card-text"><?= $reason['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ why choose master surgeon -->

        <!-- special features -->
        <section class="services-section">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">What Sets Us Apart</span>
                    <h2 class="section-title">Special Features of Master Surgeon</h2>
                    <p class="section-subtitle">Modern facilities and thoughtful processes designed around every patient's surgical journey.</p>
                </div>

                <div class="row g-3 g-md-4 row-cards justify-content-center">
                    <?php foreach ($data['special_features'] as $i => $feature): ?>
                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="tel:+919676717852" class="service-card" data-aos="fade-up" data-aos-delay="<?= ($i % 6) * 60 ?>">
                                <span class="service-icon"><i class="fi <?= $feature['icon'] ?>"></i></span>
                                <span class="service-label"><?= $feature['label'] ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ special features -->
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
