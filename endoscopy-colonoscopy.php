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
                <h1 class="page-hero-title" data-aos="fade-down">Endoscopy &amp; Colonoscopy</h1>
                <div class="page-hero-breadcrumb" data-aos="fade-up" data-aos-delay="150">
                    <a href="index.php">Home</a>
                    <i class="fi fi-rs-angle-small-right"></i>
                    <span>Endoscopy / Colonoscopy</span>
                </div>
            </div>
        </section>
        <!--/ page hero -->

        <!-- intro about endoscopy & colonoscopy -->
        <section class="about-section">
            <div class="container-90">
                <div class="row align-items-center g-4 g-lg-5 about-row">
                    <div class="col-12 col-lg-5">
                        <div class="about-media" data-aos="fade-right">
                            <div class="about-media-frame">
                                <img src="img/slider03.jpg" alt="Endoscopy and colonoscopy at Master Surgeon" class="about-img" loading="lazy">
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
                            <span class="section-eyebrow">About the Procedures</span>
                            <h2 class="about-title">What are <span>Endoscopy &amp; Colonoscopy?</span></h2>
                            <p class="about-text">Endoscopy and colonoscopy are safe, commonly performed tests in which a thin, flexible tube with a tiny camera is used to look directly inside the digestive tract. They help find the cause of stomach and bowel symptoms and can detect problems such as ulcers, bleeding, polyps and early cancers.</p>
                            <p class="about-text">An <strong>upper GI endoscopy</strong> examines the food pipe and stomach, while a <strong>colonoscopy</strong> examines the large intestine. A tissue sample (biopsy) can be taken, and polyps can often be removed during the same procedure.</p>

                            <ul class="about-list">
                                <?php foreach ($data['endoscopy']['goals'] as $goal): ?>
                                    <li><i class="fi fi-rs-check-circle"></i> <?= $goal ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <a href="tel:+919676717852" class="about-btn">Book Free Appointment <i class="fi fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ intro about endoscopy & colonoscopy -->

        <!-- symptoms -->
        <section class="why-section">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">When to Get Tested</span>
                    <h2 class="section-title">Symptoms That Need a Scope Test</h2>
                    <p class="section-subtitle">These symptoms can have many causes. If they last more than a couple of weeks, or you notice bleeding, please see a surgeon.</p>
                </div>

                <div class="row g-4 row-cards justify-content-center">
                    <?php foreach ($data['endoscopy']['symptoms'] as $i => $symptom): ?>
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

        <!-- endoscopy vs colonoscopy -->
        <section class="why-section" style="padding-top: 0;">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">The Procedures</span>
                    <h2 class="section-title">Endoscopy vs. Colonoscopy</h2>
                    <p class="section-subtitle">Each test looks at a different part of the digestive tract. Your surgeon will advise which one, or both, you need.</p>
                </div>

                <div class="row g-4 row-cards justify-content-center">
                    <?php foreach ($data['endoscopy']['types'] as $i => $type): ?>
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
        <!--/ endoscopy vs colonoscopy -->

        <!-- conditions diagnosed -->
        <section class="why-section" style="padding-top: 0;">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">What We Look For</span>
                    <h2 class="section-title">Conditions Diagnosed and Treated</h2>
                    <p class="section-subtitle">A direct view of the lining of the digestive tract gives a clearer diagnosis than scans alone.</p>
                </div>

                <div class="row g-4 row-cards justify-content-center">
                    <?php foreach ($data['endoscopy']['options'] as $i => $option): ?>
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
        <!--/ conditions diagnosed -->

        <!-- how we do it at master surgeon -->
        <section class="recovery-journey">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Our Approach</span>
                    <h2 class="section-title">How We Perform Endoscopy &amp; Colonoscopy at Master Surgeon</h2>
                    <p class="section-subtitle">Led by Dr. S. Ravi Kumar, our team keeps you informed and comfortable from your first visit to your final report.</p>
                </div>

                <div class="row g-4 row-cards justify-content-center">
                    <?php foreach ($data['endoscopy']['steps'] as $step): ?>
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
        <!--/ how we do it at master surgeon -->

        <!-- faq -->
        <section class="faq-section">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Your Questions Answered</span>
                    <h2 class="section-title">Endoscopy &amp; Colonoscopy &mdash; Frequently Asked Questions</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="faq-list">
                            <?php foreach ($data['endoscopy']['faqs'] as $faq): ?>
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
