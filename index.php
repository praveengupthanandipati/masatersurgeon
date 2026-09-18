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
        <!-- carousel -->
        <section class="carousel-section hero">
            <div class="hero-main">
                <div class="hero-bg" aria-hidden="true">
                    <span class="hero-bg-slide hero-bg-slide-1"></span>
                    <span class="hero-bg-slide hero-bg-slide-2"></span>
                    <span class="hero-bg-slide hero-bg-slide-3"></span>
                </div>
                <div class="hero-overlay" aria-hidden="true"></div>

                <div class="container-90 hero-inner">
                    <div class="hero-content">
                        <div class="hero-badges">
                            <span class="hero-badge"><i class="fi fi-rs-user-md"></i> Trusted by 50,000+ Patients</span>
                            <span class="hero-badge"><i class="fi fi-rs-star"></i> 4.9/5 Patient Rating</span>
                        </div>
                        <h1 class="hero-title">Expert Surgical Care by<br><span>Master Surgeon</span></h1>
                        <p class="hero-subtitle">Advanced laparoscopic and open surgery for hernia, piles, fistula, gallstones, hydrocele and more &mdash; performed by India's trusted surgical experts.</p>
                        <a href="tel:+919676717852" class="hero-call-btn">
                            <i class="fi fi-rs-phone-call"></i>
                            <span>Call Now : +91 96767 17852</span>
                        </a>
                    </div>

                    <div class="hero-form-card">
                        <div class="hero-form-header">Book <span>FREE</span> Consultation</div>
                        <div class="hero-form-body">
                            <input type="text" class="hero-form-control" placeholder="Enter your full name">
                            <div class="hero-form-phone">
                                <span class="hero-form-code">&#127470;&#127475; +91</span>
                                <input type="tel" class="hero-form-control" placeholder="Phone number">
                            </div>
                            <select class="hero-form-control" aria-label="Select Treatment">
                                <option selected disabled>Select Treatment</option>
                                <?php foreach ($data['treatment_options'] as $option): ?>
                                    <option><?= $option ?></option>
                                <?php endforeach; ?>
                            </select>
                            <select class="hero-form-control" aria-label="Select City">
                                <option selected disabled>Select City</option>
                            </select>
                            <button type="button" class="hero-form-submit">Book Free Consultation</button>
                            <p class="hero-form-note"><i class="fi fi-rs-lock"></i> Your data is secured. We prioritize your medical privacy.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-strip-wrap container-90">
                <div class="hero-strip">
                    <?php foreach ($data['hero_strip'] as $item): ?>
                        <div class="hero-strip-item">
                            <span class="hero-strip-icon"><i class="fi <?= $item['icon'] ?>"></i></span>
                            <div>
                                <strong><?= $item['title'] ?></strong>
                                <span><?= $item['text'] ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ carousel-->

        <!-- services of treatments-->
        <section class="services-section">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Our Expertise</span>
                    <h2 class="section-title">Find Specialized Surgical Care</h2>
                    <p class="section-subtitle">Advanced laparoscopic and open surgery across 12+ conditions, backed by modern technology and faster recovery.</p>
                </div>

                <div class="services-grid">
                    <?php foreach ($data['services'] as $service): ?>
                        <a href="#" class="service-card" data-aos="fade-up" data-aos-delay="<?= $service['delay'] ?>">
                            <span class="service-icon"><i class="fi <?= $service['icon'] ?>"></i></span>
                            <span class="service-label"><?= $service['label'] ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- services fo treatments-->

        <!-- pre during post surgery -->
        <section class="journey-section">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">What We Take Care Of</span>
                    <h2 class="section-title">Your Surgical Journey, Every Step Cared For</h2>
                    <p class="section-subtitle">From the first consultation to full recovery, here's how we look after you at every stage.</p>
                </div>

                <div class="journey-grid">
                    <?php foreach ($data['journey_steps'] as $i => $step): ?>
                        <?php if ($i > 0): ?>
                            <div class="journey-connector" aria-hidden="true"><i class="fi fi-rs-angle-small-right"></i></div>
                        <?php endif; ?>
                        <div class="journey-card" data-aos="fade-up" data-aos-delay="<?= $step['delay'] ?>">
                            <div class="journey-media">
                                <span class="journey-bg" style="background-image:url('<?= $step['bg'] ?>')"></span>
                                <div class="journey-media-overlay"></div>
                                <span class="journey-step"><?= $step['number'] ?></span>
                                <span class="journey-title"><?= $step['title'] ?></span>
                            </div>
                            <div class="journey-body">
                                <ul class="journey-points">
                                    <?php foreach ($step['points'] as $point): ?>
                                        <li><i class="fi fi-rs-check"></i> <?= $point ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <a href="#" class="journey-watch"><i class="fi fi-rs-play"></i> Watch Video</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ pre during post surgery -->

        <!-- about us -->
        <section class="about-section">
            <div class="container-90 about-inner">
                <div class="about-media" data-aos="fade-right">
                    <div class="about-media-frame">
                        <img src="img/slider03.jpg" alt="Dr. S. Ravi Kumar - Laparoscopic &amp; Laser Surgeon" class="about-img">
                    </div>
                    <div class="about-badge">
                        <i class="fi fi-rs-user-md"></i>
                        <div>
                            <strong>Dr. S. Ravi Kumar</strong>
                            <span>Laparoscopic &amp; Laser Surgeon</span>
                        </div>
                    </div>
                </div>

                <div class="about-content" data-aos="fade-left">
                    <span class="section-eyebrow">About Master Surgeon</span>
                    <h2 class="about-title">Dedicated to Safer, <span>Faster Surgical Care</span></h2>
                    <p class="about-text">Led by Dr. S. Ravi Kumar, a Laparoscopic &amp; Laser Surgeon, Master Surgeon focuses on advanced, minimally invasive treatment for hernia, piles, gallbladder and other general surgical conditions &mdash; guided by precision, patient comfort and quicker recovery at every step.</p>

                    <ul class="about-list">
                        <li><i class="fi fi-rs-check-circle"></i> Advanced Laparoscopic &amp; Laser Techniques</li>
                        <li><i class="fi fi-rs-check-circle"></i> Personalized, Patient-First Care</li>
                        <li><i class="fi fi-rs-check-circle"></i> Transparent Consultation &amp; Follow-up</li>
                    </ul>

                    <a href="#" class="about-btn">Know More About Us <i class="fi fi-rs-arrow-small-right"></i></a>
                </div>
            </div>
        </section>
        <!--/ about us -->

        <!-- journey to recover -->
         <section class="recovery-journey">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">End-to-End Excellence</span>
                    <h2 class="section-title">Your Journey to Recovery</h2>
                    <p class="section-subtitle">Every step, from your first consultation to full recovery, planned and cared for.</p>
                </div>

                <div class="recovery-grid">
                    <?php foreach ($data['recovery_steps'] as $step): ?>
                        <div class="recovery-step" data-aos="fade-up" data-aos-delay="<?= $step['delay'] ?>">
                            <span class="recovery-step-number"><?= $step['number'] ?></span>
                            <span class="recovery-step-icon"><i class="fi <?= $step['icon'] ?>"></i></span>
                            <h3 class="recovery-step-title"><?= $step['title'] ?></h3>
                            <p class="recovery-step-text"><?= $step['text'] ?></p>
                            <span class="recovery-step-tag"><i class="fi fi-rs-check-circle"></i> <?= $step['tag'] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ journey to recover -->

        <!-- testimonials -->
         <section class="testimonials-section">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Patient Stories</span>
                    <h2 class="section-title">What Our Patients Say</h2>
                    <p class="section-subtitle">Real experiences shared by patients treated across our laparoscopic and general surgery services.</p>
                </div>

                <div class="swiper testimonials-swiper" data-aos="fade-up">
                    <div class="swiper-wrapper">
                        <?php foreach ($data['testimonials'] as $t): ?>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <i class="fi fi-rs-quote-right testimonial-quote"></i>
                                    <div class="testimonial-rating">
                                        <?php for ($s = 0; $s < 5; $s++): ?><i class="fi fi-rs-star"></i><?php endfor; ?>
                                    </div>
                                    <p class="testimonial-text"><?= $t['text'] ?></p>
                                    <div class="testimonial-author">
                                        <span class="testimonial-avatar"><?= $t['avatar'] ?></span>
                                        <div>
                                            <strong><?= $t['name'] ?></strong>
                                            <span><?= $t['role'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="testimonials-nav">
                    <button type="button" class="swiper-button-prev" aria-label="Previous testimonial"><i class="fi fi-rs-angle-small-left"></i></button>
                    <button type="button" class="swiper-button-next" aria-label="Next testimonial"><i class="fi fi-rs-angle-small-right"></i></button>
                </div>
            </div>
         </section>
         <!--/ testimonials-->
        <!-- blogs -->
        <section class="home-blogs">
            <div class="container-90">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">From Our Blog</span>
                    <h2 class="section-title">Health Insights &amp; Surgical Care Tips</h2>
                    <p class="section-subtitle">Practical, easy-to-understand guidance on surgery, recovery and staying healthy.</p>
                </div>

                <div class="blogs-grid">
                    <?php foreach ($data['blogs'] as $blog): ?>
                        <a href="#" class="blog-card" data-aos="fade-up" data-aos-delay="<?= $blog['delay'] ?>">
                            <div class="blog-media">
                                <img src="<?= $blog['img'] ?>" alt="<?= $blog['tag'] ?>" class="blog-img">
                            </div>
                            <div class="blog-body">
                                <span class="blog-tag"><?= $blog['tag'] ?></span>
                                <h3 class="blog-title"><?= $blog['title'] ?></h3>
                                <p class="blog-excerpt"><?= $blog['excerpt'] ?></p>
                                <span class="blog-meta"><i class="fi fi-rs-clock"></i> <?= $blog['read_time'] ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ blogs -->
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