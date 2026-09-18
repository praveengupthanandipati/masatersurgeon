    <?php if (!isset($data)) { $data = require __DIR__ . '/data.php'; } ?>
    <!-- footer-->
    <footer class="site-footer">
        <div class="container-90 footer-top">
            <div class="footer-col footer-about">
                <img src="img/logo-white.svg" alt="Master Surgeon" class="footer-logo">
                <p class="footer-text">Advanced laparoscopic and open surgery from Dr. S. Ravi Kumar &mdash; focused on precision, patient comfort and faster recovery.</p>
                <div class="footer-social">
                    <?php foreach ($data['social_links'] as $social): ?>
                        <a href="<?= $social['href'] ?>" class="footer-social-link" aria-label="<?= $social['label'] ?>">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="<?= $social['path'] ?>"/></svg>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="footer-col">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <?php foreach ($data['footer_quick_links'] as $link): ?>
                        <li><a href="<?= $link['href'] ?>"><?= $link['label'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-heading">Our Services</h4>
                <ul class="footer-links">
                    <?php foreach ($data['footer_services'] as $service): ?>
                        <li><a href="<?= $service['href'] ?>"><?= $service['label'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-heading">Get In Touch</h4>
                <ul class="footer-contact">
                    <?php foreach ($data['footer_contact'] as $contact): ?>
                        <li>
                            <i class="fi <?= $contact['icon'] ?>"></i>
                            <?php if ($contact['type'] === 'text'): ?>
                                <span><?= $contact['text'] ?></span>
                            <?php else: ?>
                                <a href="<?= $contact['href'] ?>"><?= $contact['text'] ?></a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="#" class="footer-book-btn">Book Free Appointment</a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container-90 footer-bottom-inner">
                <p>&copy; <span id="footerYear"></span> Master Surgeon. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer-->
