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
                <h1 class="page-hero-title" data-aos="fade-down">Terms &amp; Conditions</h1>
                <div class="page-hero-breadcrumb" data-aos="fade-up" data-aos-delay="150">
                    <a href="index.php">Home</a>
                    <i class="fi fi-rs-angle-small-right"></i>
                    <span>Terms &amp; Conditions</span>
                </div>
            </div>
        </section>
        <!--/ page hero -->

        <!-- terms and conditions -->
        <section class="legal-section">
            <div class="container-90">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-9">
                        <article class="legal-card" data-aos="fade-up">
                            <p class="legal-updated">Last updated: <?= $lastUpdated ?></p>
                            <p class="legal-intro">Welcome to Master Surgeon. These Terms &amp; Conditions set out the rules for using our website and for booking a consultation through it. Please read them carefully. They are written in plain language, and we are happy to explain anything that is unclear.</p>

                            <nav class="legal-toc" aria-label="Contents">
                                <a href="#acceptance">Acceptance</a>
                                <a href="#medical-disclaimer">Medical disclaimer</a>
                                <a href="#free-consultation">Free consultation</a>
                                <a href="#appointments">Appointments</a>
                                <a href="#your-responsibilities">Your responsibilities</a>
                                <a href="#fees">Fees &amp; insurance</a>
                                <a href="#outcomes">Treatment outcomes</a>
                                <a href="#website-use">Website use</a>
                                <a href="#liability">Liability</a>
                                <a href="#governing-law">Governing law</a>
                                <a href="#contact-us">Contact us</a>
                            </nav>

                            <h2 id="acceptance">1. Acceptance of these terms</h2>
                            <p>By visiting this website (<strong>mastersurgeon.in</strong>), submitting a form on it, or booking a consultation through it, you agree to these Terms &amp; Conditions and to our <a href="privacy.php">Privacy Policy</a>. If you do not agree, please do not use the website; you are always welcome to call us instead.</p>
                            <p>In these terms, &ldquo;we&rdquo;, &ldquo;us&rdquo; and &ldquo;our&rdquo; mean Master Surgeon, a surgical care practice led by Dr. S. Ravi Kumar, Laparoscopic &amp; Laser Surgeon. &ldquo;You&rdquo; means anyone using the website, including a patient or a person booking on a patient&rsquo;s behalf.</p>

                            <h2 id="medical-disclaimer">2. Medical information and emergencies</h2>
                            <ul>
                                <li><strong>General information only.</strong> The content on this website, including service pages, blogs and FAQs, is for general awareness. It is not a diagnosis, medical advice or a substitute for a proper consultation with a doctor who has examined you.</li>
                                <li><strong>No doctor&ndash;patient relationship from the website.</strong> Reading the website or submitting a form does not create a doctor&ndash;patient relationship. That begins only when a doctor at Master Surgeon examines you and agrees to treat you.</li>
                                <li><strong>Not for emergencies.</strong> The website and its forms are not monitored for emergencies. If you or someone else needs urgent help, call our 24x7 helpline on <a href="<?= htmlspecialchars($info['phone_href']) ?>"><?= htmlspecialchars($info['phone_display']) ?></a> or go to the nearest hospital straight away.</li>
                                <li><strong>Not an advertisement.</strong> Information here is provided to inform the public about the care we offer. It is not a solicitation or an invitation to seek treatment.</li>
                            </ul>

                            <h2 id="free-consultation">3. Free consultation</h2>
                            <ul>
                                <li>Your <strong>first consultation with our team is free</strong>. This covers the consultation itself.</li>
                                <li>Any tests, scans, procedures, medicines, hospital stay or follow-up that may be advised are <strong>not</strong> part of the free consultation and are charged separately. We will explain what is needed, and the likely cost, before you decide.</li>
                                <li>Submitting the Book Free Consultation form is a <strong>request</strong>, not a confirmed appointment. Your appointment is confirmed only when our care coordinator contacts you and agrees a time with you.</li>
                                <li>Our care coordinator will call you at the earliest, but we cannot promise an exact call-back time. For anything urgent, please call our helpline.</li>
                                <li>We may decline or postpone a request, for example if the concern is outside the care we provide, and we will guide you to the right place where we can.</li>
                            </ul>

                            <h2 id="appointments">4. Appointments, rescheduling and cancellation</h2>
                            <ul>
                                <li>Our clinic hours are <?= htmlspecialchars($info['hours']) ?>. Appointments outside these hours are arranged only where the doctor agrees.</li>
                                <li>If you cannot attend, please let us know as early as you can so that the slot can be offered to another patient, and so that we can reschedule for you.</li>
                                <li>Sometimes a doctor is called away for an emergency or surgery. If that happens we will try to inform you and offer the earliest alternative time.</li>
                            </ul>

                            <h2 id="your-responsibilities">5. Your responsibilities</h2>
                            <ul>
                                <li>Give us <strong>accurate and complete</strong> details in the forms, and tell the doctor about your medical history, current medicines and allergies.</li>
                                <li>You must be at least 18 years old to use the forms yourself. A parent or legal guardian may book for a child or for a person who cannot book for themselves, and confirms that they have the right to do so.</li>
                                <li>Do not use another person&rsquo;s details without their permission.</li>
                                <li>Follow the doctor&rsquo;s instructions before and after any procedure. Advice is given for your safety, and results depend on following it.</li>
                            </ul>

                            <h2 id="fees">6. Fees, payment and insurance</h2>
                            <ul>
                                <li>Charges for tests, procedures and treatment will be shared with you <strong>before</strong> you agree to go ahead. Fees can change if your condition or the plan of care changes, and we will tell you when that happens.</li>
                                <li>Payment is due as agreed with our team at the time of service. We do not ask for payment through the website.</li>
                                <li>We can help with insurance and admission paperwork, but <strong>approval of any claim is decided by your insurer</strong>, not by us. You remain responsible for any amount your insurer does not cover.</li>
                            </ul>

                            <h2 id="outcomes">7. Treatment, consent and outcomes</h2>
                            <ul>
                                <li>Any surgery or procedure is done only after the doctor has explained your diagnosis, the options, the benefits, the risks and the expected recovery, and you have given your <strong>informed consent</strong>.</li>
                                <li>Every person is different. Descriptions on the website such as &ldquo;faster recovery&rdquo; or &ldquo;minimal incisions&rdquo; are general and are <strong>not a promise or guarantee</strong> of a particular result for you. All surgery and medical treatment carries some risk.</li>
                                <li>We may recommend a different treatment from what you expected, including no surgery, if that is in your best interest.</li>
                            </ul>

                            <h2 id="website-use">8. Using this website</h2>
                            <h3>Acceptable use</h3>
                            <p>You agree not to:</p>
                            <ul>
                                <li>submit false, misleading, abusive or unlawful content through the forms;</li>
                                <li>send spam, or use automated tools to submit forms or collect content from the website;</li>
                                <li>try to break, overload, probe or gain unauthorised access to the website or its systems; or</li>
                                <li>use the website in any way that breaks the law.</li>
                            </ul>
                            <h3>Our content</h3>
                            <p>The text, images, logo, design and other content on this website belong to Master Surgeon or its licensors and are protected by law. You may view and share pages for personal, non-commercial use. You may not copy, sell or republish our content, or use our name or logo, without our written permission.</p>
                            <h3>Third-party services and links</h3>
                            <p>The website may link to services we do not control, such as WhatsApp and social media. We are not responsible for their content, availability or privacy practices, and your use of them is under their own terms.</p>
                            <h3>Availability</h3>
                            <p>We try to keep the website running and accurate, but we do not promise that it will always be available, error-free or up to date. We may change or remove content, or suspend access, at any time.</p>

                            <h2 id="liability">9. Limits on our responsibility</h2>
                            <p>To the extent the law allows:</p>
                            <ul>
                                <li>We are not responsible for loss caused by relying on general information on the website in place of a consultation with a doctor.</li>
                                <li>We are not responsible for problems outside our reasonable control, such as internet or power failures, or the actions of third-party services.</li>
                                <li>We are not responsible for indirect or consequential loss arising from your use of the website.</li>
                            </ul>
                            <p>Nothing in these terms limits or excludes any responsibility that cannot be limited or excluded by law, including your rights as a patient and consumer under Indian law, or a doctor&rsquo;s professional duty of care.</p>

                            <h2 id="governing-law">10. Governing law and disputes</h2>
                            <p>These terms are governed by the laws of India. We would like to resolve any concern directly, so please write to us first using the details below and give us a fair chance to put things right. If a dispute cannot be resolved that way, it will be subject to the jurisdiction of the competent courts at the place where Master Surgeon&rsquo;s practice is located, without affecting any right you have to approach a consumer forum or other authority under the law.</p>

                            <h2 id="changes">11. Changes to these terms</h2>
                            <p>We may update these terms from time to time, for example when our services or the law change. The &ldquo;Last updated&rdquo; date at the top shows the latest version. By continuing to use the website after a change, you accept the updated terms.</p>

                            <h2 id="contact-us">12. Contact us</h2>
                            <p>If you have any question about these terms, please get in touch:</p>
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
                </div>
            </div>
        </section>
        <!--/ terms and conditions -->

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
