<?php
$data = require __DIR__ . '/components/data.php';
$info = $data['contact_info'];
$post = $data['blogs'][3];
$published = '21 September 2026';
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
                <h1 class="page-hero-title" data-aos="fade-down"><?= $post['title'] ?></h1>
                <div class="page-hero-breadcrumb" data-aos="fade-up" data-aos-delay="150">
                    <a href="index.php">Home</a>
                    <i class="fi fi-rs-angle-small-right"></i>
                    <a href="blogs.php">Blogs</a>
                    <i class="fi fi-rs-angle-small-right"></i>
                    <span>Life After Gallbladder Surgery</span>
                </div>
            </div>
        </section>
        <!--/ page hero -->

        <!-- article -->
        <section class="legal-section">
            <div class="container-90">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-9">
                        <article class="legal-card article" data-aos="fade-up">
                            <img src="<?= $post['img'] ?>" alt="<?= $post['tag'] ?>" class="article-cover">
                            <div class="article-meta">
                                <span class="blog-tag"><?= $post['tag'] ?></span>
                                <span><i class="fi fi-rs-clock"></i> <?= $post['read_time'] ?></span>
                                <span><i class="fi fi-rs-user-md"></i> By Dr. S. Ravi Kumar&rsquo;s team</span>
                                <span><i class="fi fi-rs-calendar"></i> <?= $published ?></span>
                            </div>

                            <p class="legal-intro">Gallbladder removal (cholecystectomy) is one of the most common operations, and most people go on to live completely normally afterwards. Knowing what the first few weeks look like helps you plan your recovery and feel more at ease.</p>

                            <h2>Can I live normally without a gallbladder?</h2>
                            <p>Yes. The gallbladder only stores bile, which helps digest fat. Your liver keeps making bile, and it now flows directly into the intestine. Most people digest food normally, though your body may need a little time to adjust.</p>

                            <h2>Your recovery timeline</h2>
                            <div class="article-table-wrap">
                                <table class="article-compare">
                                    <thead>
                                        <tr><th>When</th><th>What to expect</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>First 1&ndash;2 days</td><td>After keyhole surgery, many people go home within a day or two. Expect mild soreness at the small cuts.</td></tr>
                                        <tr><td>First week</td><td>Walk a little every day. Some feel bloated or have shoulder-tip pain from the gas used during surgery; it fades in a few days.</td></tr>
                                        <tr><td>Weeks 2&ndash;4</td><td>Energy returns. Many people go back to desk work, but avoid heavy lifting and hard exercise until your surgeon says it is safe.</td></tr>
                                        <tr><td>Weeks 4&ndash;6</td><td>Most return to full activity. Open surgery, or a complicated case, may take longer.</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>Your own timeline depends on your health and the type of surgery, so follow your surgeon&rsquo;s advice.</p>

                            <h2>Eating after gallbladder surgery</h2>
                            <ul>
                                <li>Start with light, low-fat meals such as soups, dal, rice, fruit and idli.</li>
                                <li>Eat smaller meals more often instead of a few large ones.</li>
                                <li>Bring back fried, oily and rich foods slowly, one at a time, to see how you feel.</li>
                                <li>Add fibre gradually and drink plenty of water.</li>
                                <li>Loose stools or bloating for a few weeks can happen and usually settle. Tell your doctor if they continue.</li>
                            </ul>

                            <h2>Caring for yourself at home</h2>
                            <ul>
                                <li>Keep the wounds clean and dry as advised, and do not pick at the dressings.</li>
                                <li>Take medicines exactly as prescribed, and rest when you feel tired.</li>
                                <li>Do not lift heavy weights or strain until you are cleared.</li>
                            </ul>

                            <h2>When to call your doctor</h2>
                            <p>Get in touch straight away if you have fever, severe or worsening belly pain, repeated vomiting, yellowing of the skin or eyes, or redness, swelling or pus at a wound. For urgent problems, call our 24x7 helpline on <a href="<?= htmlspecialchars($info['phone_href']) ?>"><?= htmlspecialchars($info['phone_display']) ?></a>.</p>

                            <div class="article-cta">
                                <h3>Have gallstones or planning surgery?</h3>
                                <p>Book a free consultation with Dr. S. Ravi Kumar to understand your options and what recovery will look like for you.</p>
                                <a href="book-free-appointment.php" class="about-btn">Book Free Consultation <i class="fi fi-rs-arrow-small-right"></i></a>
                            </div>

                            <p class="article-note">This article is for general information only and is not a substitute for medical advice. Please consult a doctor about your own condition. Read more about our <a href="cholecystectomy-open-laparoscopy.php">gallbladder surgery</a>.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!--/ article -->

        <?php include 'components/cta.php'; ?>

        <script type="application/ld+json"><?= json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'headline' => html_entity_decode($post['title'], ENT_QUOTES | ENT_HTML5, 'UTF-8'),
            'description' => html_entity_decode($post['excerpt'], ENT_QUOTES | ENT_HTML5, 'UTF-8'),
            'image' => 'https://www.mastersurgeon.in/' . $post['img'],
            'datePublished' => '2026-09-21',
            'author' => ['@type' => 'Organization', 'name' => 'Master Surgeon'],
            'publisher' => ['@type' => 'Organization', 'name' => 'Master Surgeon'],
            'mainEntityOfPage' => $data['pages']['life-after-gallbladder-surgery.php']['canonical'],
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) ?></script>
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
