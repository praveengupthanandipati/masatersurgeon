    <?php
    // Closing call-to-action banner shared by all service pages.
    // Text comes from $data['cta']; a page can override it by setting $cta before including this file.
    if (!isset($data)) { $data = require __DIR__ . '/data.php'; }
    $cta = $cta ?? $data['cta'];
    ?>
    <!-- call to action -->
    <section class="cta-section">
        <div class="container-90 text-center" style="position: relative; z-index: 1;" data-aos="fade-up">
            <span class="section-eyebrow"><?= $cta['eyebrow'] ?></span>
            <h2 class="about-title"><?= $cta['title'] ?> <span><?= $cta['highlight'] ?></span></h2>
            <p class="about-text mx-auto"><?= $cta['text'] ?></p>
            <a href="tel:+919676717852" class="about-btn"><i class="fi fi-rs-phone-call"></i> Call +91 96767 17852</a>
        </div>
    </section>
    <!--/ call to action -->
