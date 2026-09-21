<?php
$data = require __DIR__ . '/components/data.php';
$info = $data['contact_info'];
$lastUpdated = '21 September 2026';
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
                <h1 class="page-hero-title" data-aos="fade-down">Privacy Policy</h1>
                <div class="page-hero-breadcrumb" data-aos="fade-up" data-aos-delay="150">
                    <a href="index.php">Home</a>
                    <i class="fi fi-rs-angle-small-right"></i>
                    <span>Privacy Policy</span>
                </div>
            </div>
        </section>
        <!--/ page hero -->

        <!-- privacy policy -->
        <section class="legal-section">
            <div class="container-90">
                <article class="legal-card" data-aos="fade-up">
                    <p class="legal-updated">Last updated: <?= $lastUpdated ?></p>
                    <p class="legal-intro">Your privacy matters to us. This policy explains what personal information Master Surgeon collects through this website, why we collect it, how we look after it, and the choices you have. We have kept it short and in plain language.</p>

                    <nav class="legal-toc" aria-label="Contents">
                        <a href="#who-we-are">Who we are</a>
                        <a href="#what-we-collect">What we collect</a>
                        <a href="#health-information">Health information</a>
                        <a href="#how-we-use">How we use it</a>
                        <a href="#sharing">Sharing</a>
                        <a href="#cookies">Cookies</a>
                        <a href="#third-parties">Third-party services</a>
                        <a href="#security">Security &amp; retention</a>
                        <a href="#your-rights">Your rights</a>
                        <a href="#contact-us">Contact us</a>
                    </nav>

                    <h2 id="who-we-are">1. Who we are</h2>
                    <p>Master Surgeon is a surgical care practice led by Dr. S. Ravi Kumar, Laparoscopic &amp; Laser Surgeon, offering surgical, orthopedic, diabetes and pain management care. This website (<strong>mastersurgeon.in</strong>) lets you learn about our services and get in touch with us. In this policy, &ldquo;we&rdquo;, &ldquo;us&rdquo; and &ldquo;our&rdquo; mean Master Surgeon.</p>
                    <p>By using this website or submitting a form on it, you agree to the practices described here. If you do not agree, please do not submit your details through the website; you are always welcome to call us instead.</p>

                    <h2 id="what-we-collect">2. Information we collect</h2>
                    <h3>Information you give us</h3>
                    <ul>
                        <li><strong>Contact form:</strong> your name, phone number, email address, the subject and the message you write.</li>
                        <li><strong>Book Free Consultation form:</strong> the patient&rsquo;s name, mobile number, city, and the disease or treatment you select.</li>
                        <li><strong>Calls and WhatsApp:</strong> if you call or message us, we see your phone number and whatever you choose to tell us.</li>
                    </ul>
                    <h3>Information collected automatically</h3>
                    <ul>
                        <li>When you send a form, we record the date, time and your IP address to help us prevent spam and misuse.</li>
                        <li>Like most websites, our web server may log technical details such as your IP address, browser type, device and the pages requested.</li>
                    </ul>
                    <p>We do not ask for payment details, Aadhaar or other government ID numbers, or medical records through this website.</p>

                    <h2 id="health-information">3. Health information &mdash; please read</h2>
                    <p>The disease or treatment you select in the consultation form, and anything you write in a message, can relate to your health. We treat this as sensitive. To keep it safe:</p>
                    <ul>
                        <li>Share only what is needed to arrange your consultation. Please do not send detailed medical history, reports or scans through the website forms. Bring them to your visit instead.</li>
                        <li>This website is not for medical emergencies. If you or someone else needs urgent help, call our 24x7 helpline on <a href="<?= htmlspecialchars($info['phone_href']) ?>"><?= htmlspecialchars($info['phone_display']) ?></a> or go to the nearest hospital.</li>
                        <li>Information on this website is general in nature and is not a diagnosis or a substitute for a consultation with a doctor.</li>
                    </ul>

                    <h2 id="how-we-use">4. How we use your information</h2>
                    <p>We use your information only to:</p>
                    <ul>
                        <li>respond to your enquiry and call you back to arrange your free consultation;</li>
                        <li>understand your concern so the right doctor and time can be arranged;</li>
                        <li>keep the website secure and prevent spam or misuse; and</li>
                        <li>meet legal and regulatory obligations.</li>
                        
                    </ul>
                    <p>We rely on your <strong>consent</strong>, which you give by submitting a form or contacting us, to use your information for these purposes. You can withdraw that consent at any time (see &ldquo;Your rights&rdquo;). We do not use your details for automated decision-making, and we do not sell your personal information.</p>

                    <h2 id="sharing">5. Who we share it with</h2>
                    <p>We do not sell or rent your information. We share it only when necessary:</p>
                    <ul>
                        <li><strong>Our team:</strong> the doctors and care coordinators who need it to help you.</li>
                        <li><strong>Service providers:</strong> companies that help us run the website, such as web hosting and email delivery. They may process your details on our behalf, only for that purpose.</li>
                        <li><strong>Legal reasons:</strong> when the law, a court or a government authority requires us to, or to protect the rights, safety or property of our patients, staff or website.</li>
                        <li><strong>Business changes:</strong> if our practice is reorganised or transferred, your information may be passed on to the successor, who must honour this policy.</li>
                    </ul>
                    <p>Enquiries sent through the website forms are delivered to us by email.</p>

                    <h2 id="cookies">6. Cookies</h2>
                    <p>Cookies are small files a website stores in your browser. Our forms use a <strong>session cookie</strong> that keeps the form secure and helps stop automated submissions. It contains no personal details and expires when you close your browser. We do not use advertising or tracking cookies on this website.</p>
                    <p>You can block or delete cookies in your browser settings. The forms may not work if session cookies are blocked.</p>

                    <h2 id="third-parties">7. Third-party services and links</h2>
                    <ul>
                        <li><strong>Fonts and icons:</strong> this website loads fonts and icons from Google Fonts and Flaticon. Your browser contacts those services when a page loads, so they can see your IP address and browser details under their own privacy policies.</li>
                        <li><strong>WhatsApp:</strong> the WhatsApp buttons open WhatsApp on your device. Anything you send there is handled by WhatsApp under its own terms and privacy policy.</li>
                        <li><strong>Social media and other links:</strong> we may link to our pages on social networks or to other websites. We are not responsible for their content or privacy practices.</li>
                    </ul>

                    <h2 id="security">8. Security and how long we keep your information</h2>
                    <p>We use reasonable safeguards to protect your information, including encrypted (HTTPS) connections, form protection against spam and forged requests, and limiting access to those who need it. No method of transmission over the internet is completely secure, so we cannot guarantee absolute security.</p>
                    <p>We keep enquiry details only for as long as needed to respond to you and arrange care, and for as long as the law requires. After that we delete or anonymise them. If you become a patient, your medical records are kept as required by medical and legal rules and are handled separately from this website.</p>

                    <h2 id="children">9. Children</h2>
                    <p>This website is meant for adults. A parent or guardian may use the forms to arrange care for a child, and should enter the child&rsquo;s details only with that responsibility in mind. We do not knowingly collect information from children for any other purpose.</p>

                    <h2 id="your-rights">10. Your rights</h2>
                    <p>Under applicable Indian law, including the Digital Personal Data Protection Act, 2023, you may:</p>
                    <ul>
                        <li>ask what personal information we hold about you and why;</li>
                        <li>ask us to correct or update information that is wrong or incomplete;</li>
                        <li>ask us to erase your information, unless we must keep it by law;</li>
                        <li>withdraw your consent at any time; and</li>
                        <li>make a complaint about how your information is handled.</li>
                    </ul>
                    <p>To use any of these rights, contact us using the details below. We will respond within a reasonable time. If you are unhappy with our response, you may approach the Data Protection Board of India, once it is in operation, or any other authority the law provides.</p>

                    <h2 id="changes">11. Changes to this policy</h2>
                    <p>We may update this policy from time to time, for example as our services or the law change. The &ldquo;Last updated&rdquo; date at the top shows when it last changed. If we make a significant change, we will make it clear on this website.</p>

                    <h2 id="contact-us">12. Contact us</h2>
                    <p>For any question about this policy, or to exercise your rights, contact Master Surgeon:</p>
                    <ul class="legal-contact">
                        <li><i class="fi fi-rs-envelope"></i> <a href="mailto:<?= htmlspecialchars($info['email']) ?>"><?= htmlspecialchars($info['email']) ?></a></li>
                        <li><i class="fi fi-rs-phone-call"></i> <a href="<?= htmlspecialchars($info['phone_href']) ?>"><?= htmlspecialchars($info['phone_display']) ?></a></li>
                        <?php if ($info['address'] !== ''): ?>
                            <li><i class="fi fi-rs-marker"></i> <?= nl2br(htmlspecialchars($info['address'])) ?></li>
                        <?php endif; ?>
                        <li><i class="fi fi-rs-clock"></i> <?= htmlspecialchars($info['hours']) ?></li>
                    </ul>
                    <p>You can also use our <a href="contact.php">Contact Us</a> page.</p>
                </article>
            </div>
        </section>
        <!--/ privacy policy -->

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
