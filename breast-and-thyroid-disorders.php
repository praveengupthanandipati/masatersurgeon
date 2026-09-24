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
                <h1 class="page-hero-title" data-aos="fade-down">Breast &amp; Thyroid Disorders</h1>
                <div class="page-hero-breadcrumb" data-aos="fade-up" data-aos-delay="150">
                    <a href="index.php">Home</a>
                    <i class="fi fi-rs-angle-small-right"></i>
                    <span>Breast and Thyroid Disorders</span>
                </div>
            </div>
        </section>
        <!--/ page hero -->

        <!-- intro about breast & thyroid disorders -->
        <section class="about-section">
            <div class="container-90">
                <div class="row align-items-center g-4 g-lg-5 about-row">
                    <div class="col-12 col-lg-5">
                        <div class="about-media" data-aos="fade-right">
                            <div class="about-media-frame">
                                <img src="img/slider03.jpg" alt="Breast and thyroid care at Master Surgeon" class="about-img" loading="lazy">
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
                            <span class="section-eyebrow">About the Conditions</span>
                            <h2 class="about-title">Breast &amp; <span>Thyroid Disorders</span></h2>
                            <p class="about-text">Lumps or swellings in the breast or the neck can be worrying, but most turn out to be benign and treatable. Breast disorders include lumps, cysts, infections and pain, while thyroid disorders include goitre (an enlarged thyroid), nodules and hormone imbalance.</p>
                            <p class="about-text">The key is not to ignore a lump. A careful examination and the right tests give you a clear diagnosis, so you can be treated only as much as you need, with <strong>medicines, monitoring or surgery</strong>. We take the time to explain your results clearly and calmly.</p>

                            <ul class="about-list">
                                <?php foreach ($data['breast_thyroid']['goals'] as $goal): ?>
                                    <li><i class="fi fi-rs-check-circle"></i> <?= $goal ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <a href="tel:+919676717852" class="about-btn">Book Free Appointment <i class="fi fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ intro about breast & thyroid disorders -->

        <!-- symptoms -->
        <section class="why-section">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Know the Signs</span>
                    <h2 class="section-title">Symptoms You Should Not Ignore</h2>
                    <p class="section-subtitle">Most lumps are not cancer, but only an examination can tell. Please get any new lump or lasting change checked promptly.</p>
                </div>

                <div class="row g-4 row-cards justify-content-center">
                    <?php foreach ($data['breast_thyroid']['symptoms'] as $i => $symptom): ?>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="why-card" data-aos="zoom-in-up" data-aos-delay="<?= ($i % 3) * 80 ?>">
                                <span class="why-card-icon"><i class="fi <?= $symptom['icon'] ?>"></i></span>
                                <p class="why-card-text"><?= $symptom['label'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ symptoms -->

        <!-- breast vs thyroid -->
        <section class="why-section" style="padding-top: 0;">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">What We Evaluate</span>
                    <h2 class="section-title">Breast Care &amp; Thyroid Care</h2>
                    <p class="section-subtitle">Two areas, each assessed carefully with the right examination and tests.</p>
                </div>

                <div class="row g-4 row-cards justify-content-center">
                    <?php foreach ($data['breast_thyroid']['types'] as $i => $type): ?>
                        <div class="col-12 col-md-6 col-xl-5">
                            <div class="why-card" data-aos="<?= $i === 0 ? 'fade-right' : 'fade-left' ?>">
                                <span class="why-card-icon"><i class="fi <?= $type['icon'] ?>"></i></span>
                                <h3 class="why-card-title"><?= $type['title'] ?></h3>
                                <p class="why-card-text"><?= $type['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ breast vs thyroid -->

        <!-- conditions treated -->
        <section class="why-section" style="padding-top: 0;">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Conditions We Treat</span>
                    <h2 class="section-title">Common Conditions</h2>
                    <p class="section-subtitle">Treatment is matched to your diagnosis, and surgery is advised only when it is really needed.</p>
                </div>

                <div class="row g-4 row-cards justify-content-center">
                    <?php foreach ($data['breast_thyroid']['options'] as $i => $option): ?>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="why-card" data-aos="zoom-in-up" data-aos-delay="<?= ($i % 4) * 80 ?>">
                                <span class="why-card-icon"><i class="fi <?= $option['icon'] ?>"></i></span>
                                <h3 class="why-card-title"><?= $option['title'] ?></h3>
                                <p class="why-card-text"><?= $option['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ conditions treated -->

        <!-- how we treat at master surgeon -->
        <section class="recovery-journey">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Our Approach</span>
                    <h2 class="section-title">How We Care for You at Master Surgeon</h2>
                    <p class="section-subtitle">Led by Dr. S. Ravi Kumar, our team offers clear answers and compassionate care from your first consultation to follow-up.</p>
                </div>

                <div class="row g-4 row-cards justify-content-center">
                    <?php foreach ($data['breast_thyroid']['steps'] as $step): ?>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="recovery-step" data-aos="fade-up" data-aos-delay="<?= $step['delay'] ?>">
                                <span class="recovery-step-number"><?= $step['number'] ?></span>
                                <span class="recovery-step-icon"><i class="fi <?= $step['icon'] ?>"></i></span>
                                <h3 class="recovery-step-title"><?= $step['title'] ?></h3>
                                <p class="recovery-step-text"><?= $step['text'] ?></p>
                                <span class="recovery-step-tag"><i class="fi fi-rs-check-circle"></i> <?= $step['tag'] ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ how we treat at master surgeon -->

        <!-- faq -->
        <section class="faq-section">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Your Questions Answered</span>
                    <h2 class="section-title">Breast &amp; Thyroid Disorders &mdash; Frequently Asked Questions</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="faq-list">
                            <?php foreach ($data['breast_thyroid']['faqs'] as $faq): ?>
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
        <!--/ faq -->

        <?php include 'components/cta.php'; ?>
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
