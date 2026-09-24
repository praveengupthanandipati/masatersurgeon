<?php
$data = require __DIR__ . '/components/data.php';
$info = $data['contact_info'];
$post = $data['blogs'][2];
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
                    <span>Piles, Fistula &amp; Fissure</span>
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

                            <p class="legal-intro">Piles, fissures and fistulas are very common, yet many people suffer in silence because of embarrassment and half-truths. Waiting, or trying the wrong remedy, often makes things worse. Here are the most common myths, and what is actually true.</p>

                            <h2>First, what are they?</h2>
                            <ul>
                                <li><strong>Piles (haemorrhoids)</strong> are swollen cushions of tissue and veins in the anal canal. They can cause bleeding, itching, a lump or discomfort.</li>
                                <li><strong>Fissure</strong> is a small tear in the lining of the anus. It causes sharp pain during and after passing stool, sometimes with a little bright red blood.</li>
                                <li><strong>Fistula</strong> is an abnormal small tunnel between the inside of the anus and the skin around it, usually after an abscess. It causes pain, swelling and repeated discharge of pus.</li>
                            </ul>

                            <h2>Myths vs. facts</h2>
                            <div class="article-myth">
                                <h3>Myth 1: &ldquo;They are all the same problem.&rdquo;</h3>
                                <p><span class="mf-tag">Fact</span> They look alike from the outside, but each has a different cause and needs a different treatment. Only an examination can tell which one you have.</p>
                            </div>
                            <div class="article-myth">
                                <h3>Myth 2: &ldquo;Spicy food causes piles.&rdquo;</h3>
                                <p><span class="mf-tag">Fact</span> The real causes are constipation, straining, sitting for long on the toilet, low fibre and too little water. Pregnancy, obesity and long hours of sitting also play a part. Spicy food may irritate the area, but it is not the root cause.</p>
                            </div>
                            <div class="article-myth">
                                <h3>Myth 3: &ldquo;Piles or fissure always mean surgery.&rdquo;</h3>
                                <p><span class="mf-tag">Fact</span> Many early piles and fresh fissures settle with more fibre and water, better toilet habits and prescribed creams or medicines. Procedures or surgery are advised when symptoms persist or the problem is advanced.</p>
                            </div>
                            <div class="article-myth">
                                <h3>Myth 4: &ldquo;Bleeding from the bottom is always just piles.&rdquo;</h3>
                                <p><span class="mf-tag">Fact</span> Piles are a common cause, but bleeding can also come from other conditions, including problems in the colon or rectum. Do not self-diagnose. See a doctor if bleeding keeps happening, if your bowel habits change, or if you are over 40.</p>
                            </div>
                            <div class="article-myth">
                                <h3>Myth 5: &ldquo;A fistula will heal on its own or with ointments.&rdquo;</h3>
                                <p><span class="mf-tag">Fact</span> An established anal fistula rarely heals by itself, and creams only ease symptoms. It usually needs surgical treatment. A painful swelling near the anus may be an abscess that needs prompt drainage.</p>
                            </div>
                            <div class="article-myth">
                                <h3>Myth 6: &ldquo;Treatment is painful and means a long hospital stay.&rdquo;</h3>
                                <p><span class="mf-tag">Fact</span> Modern methods, including laser treatment, are often done as day-care procedures with less discomfort and a quicker return to routine. Your surgeon will explain what suits your case.</p>
                            </div>

                            <h2>Simple habits that help</h2>
                            <ul>
                                <li>Eat plenty of fibre: vegetables, fruit, whole grains and pulses.</li>
                                <li>Drink enough water through the day.</li>
                                <li>Do not strain, and avoid sitting on the toilet for long.</li>
                                <li>Stay active, and do not ignore the urge to go.</li>
                            </ul>
                            <p>See a surgeon if you have bleeding, ongoing pain, a lump, swelling, or pus or discharge near the anus. Examinations are private and respectful, and early treatment is simpler.</p>

                            <div class="article-cta">
                                <h3>Don&rsquo;t suffer in silence</h3>
                                <p>Book a free consultation with Dr. S. Ravi Kumar for private, expert advice on piles, fistula and fissure.</p>
                                <a href="book-free-appointment.php" class="about-btn">Book Free Consultation <i class="fi fi-rs-arrow-small-right"></i></a>
                            </div>

                            <p class="article-note">This article is for general information only and is not a substitute for medical advice. Please consult a doctor about your own condition. Read more about our <a href="piles-fistula-and-fissure-surgery.php">piles, fistula and fissure treatment</a>.</p>
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
            'mainEntityOfPage' => $data['pages']['piles-fistula-fissure-myths-vs-facts.php']['canonical'],
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
