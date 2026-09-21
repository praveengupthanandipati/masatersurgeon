<?php
$data = require __DIR__ . '/components/data.php';
$info = $data['contact_info'];
$post = $data['blogs'][0];
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
                    <span>Hernia Surgery Signs</span>
                </div>
            </div>
        </section>
        <!--/ page hero -->

        <!-- article -->
        <section class="legal-section">
            <div class="container-90">
                <article class="legal-card article" data-aos="fade-up">
                    <img src="<?= $post['img'] ?>" alt="<?= $post['tag'] ?>" class="article-cover">
                    <div class="article-meta">
                        <span class="blog-tag"><?= $post['tag'] ?></span>
                        <span><i class="fi fi-rs-clock"></i> <?= $post['read_time'] ?></span>
                        <span><i class="fi fi-rs-user-md"></i> By Dr. S. Ravi Kumar&rsquo;s team</span>
                        <span><i class="fi fi-rs-calendar"></i> <?= $published ?></span>
                    </div>

                    <p class="legal-intro">A hernia happens when an organ or fatty tissue pushes through a weak spot in the muscle wall that normally holds it in. It is most common in the groin, around the belly button, and at the site of an earlier surgical scar. Many people live with one for months without knowing what it is, so it helps to recognise the signs early.</p>

                    <h2>A short history of hernia treatment</h2>
                    <p>Hernias are among the oldest recorded medical problems. The Ebers Papyrus of ancient Egypt, written around 1500 BC, describes groin swellings, and Greek and Roman physicians such as Hippocrates and Celsus wrote about hernias and early, often risky, attempts to treat them.</p>
                    <p>Modern hernia surgery began in the 1880s, when Italian surgeon Edoardo Bassini introduced a repair that rebuilt the weak groin wall and sharply reduced the chance of the hernia returning. In the 1980s, Irving Lichtenstein popularised the &ldquo;tension-free&rdquo; mesh repair, which made recurrence rarer and recovery easier. From the early 1990s, laparoscopic (keyhole) repair added smaller cuts, less pain and a faster return to normal routine. Today surgeons can choose between open and laparoscopic techniques to suit each patient.</p>

                    <h2>5 signs you might need hernia surgery</h2>
                    <div class="article-sign">
                        <span class="article-sign-num">1</span>
                        <div>
                            <h3>A bulge you can see or feel</h3>
                            <p>A lump in the groin, near the belly button or over an old scar is the classic sign. It often shows when you stand, cough or lift, and may disappear when you lie down. A hernia does not heal on its own, so any new bulge deserves an examination.</p>
                        </div>
                    </div>
                    <div class="article-sign">
                        <span class="article-sign-num">2</span>
                        <div>
                            <h3>Pain, burning or a heavy, dragging feeling</h3>
                            <p>A dull ache, pulling or burning at the site, especially when lifting, bending, exercising or at the end of a long day, suggests the weak area is under strain.</p>
                        </div>
                    </div>
                    <div class="article-sign">
                        <span class="article-sign-num">3</span>
                        <div>
                            <h3>A bulge that keeps growing</h3>
                            <p>If it is getting bigger, appearing more often, or starting to interfere with work, exercise or sleep, waiting rarely makes things better. Repair is usually simpler while the hernia is still small.</p>
                        </div>
                    </div>
                    <div class="article-sign">
                        <span class="article-sign-num">4</span>
                        <div>
                            <h3>A bulge that won&rsquo;t go back in</h3>
                            <p>If the lump stays out when you lie down and cannot be gently pressed back, or it feels firm and tender, tissue may be trapped. See a surgeon soon, before it becomes an emergency.</p>
                        </div>
                    </div>
                    <div class="article-sign is-urgent">
                        <span class="article-sign-num">5</span>
                        <div>
                            <h3>Sudden severe pain with sickness &mdash; an emergency</h3>
                            <p>Sudden intense pain, redness or a dark colour over the bulge, nausea or vomiting, fever, or being unable to pass stool or gas can mean the trapped tissue has lost its blood supply. Do not wait: call our 24x7 helpline on <a href="<?= htmlspecialchars($info['phone_href']) ?>"><?= htmlspecialchars($info['phone_display']) ?></a> or go to the nearest hospital immediately.</p>
                        </div>
                    </div>

                    <h2>What happens next?</h2>
                    <p>A surgeon can usually diagnose a hernia by examination, sometimes with an ultrasound. Not every hernia needs urgent surgery, and a small hernia without symptoms may simply be watched. But because hernias do not go away by themselves, an expert opinion helps you choose the right time and the right technique, open or laparoscopic.</p>

                    <div class="article-cta">
                        <h3>Noticed one of these signs?</h3>
                        <p>Book a free consultation with Dr. S. Ravi Kumar and get clear, honest advice on your options.</p>
                        <a href="book-free-appointment.php" class="about-btn">Book Free Consultation <i class="fi fi-rs-arrow-small-right"></i></a>
                    </div>

                    <p class="article-note">This article is for general information only and is not a substitute for medical advice. Please consult a doctor about your own condition.</p>
                </article>
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
            'mainEntityOfPage' => $data['pages']['signs-five-you-might-need-ernia-surgery.php']['canonical'],
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
