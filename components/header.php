    <?php if (!isset($data)) { $data = require __DIR__ . '/data.php'; } ?>
    <?php $currentPage = $currentPage ?? basename($_SERVER['SCRIPT_NAME'] ?? 'index.php'); ?>
    <!-- scroll progress -->
    <div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>
    <!-- header -->
    <header class="site-header">
        <!-- top header -->
        <section class="top-header d-none d-md-block">
            <div class="container-90 top-header-inner">
                <div class="top-header-col top-welcome">
                    <span>Welcome to Dr. S. Ravi kumar, Laparoscopic &amp; Laser Surgeon</span>
                </div>
                <div class="top-header-col top-hours">
                    <i class="fi fi-rs-clock"></i>
                    <span>Mon&nbsp;-&nbsp;Sat: 9:00 AM - 8:00 PM</span>
                </div>
                <div class="top-header-col top-contact">
                    <a href="tel:+919676717852" class="top-contact-link">
                        <i class="fi fi-rs-phone-call"></i>
                        <span>+91 96767 17852</span>
                    </a>
                    <a href="https://wa.me/919676717852" target="_blank" rel="noopener" class="top-contact-link top-whatsapp" aria-label="Chat on WhatsApp">
                        <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor" aria-hidden="true">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413"/>
                        </svg>
                        <span>WhatsApp</span>
                    </a>
                </div>
            </div>
        </section>
        <!--/ top header -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid container-90">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo-white.svg" alt="Master Surgeon" class="site-logo">
                </a>

                <div class="header-actions order-lg-3">
                    <a href="book-free-appointment.php" class="btn btn-book d-none d-lg-inline-flex">Book Free Appointment</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#siteNav" aria-controls="siteNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="siteNav" aria-labelledby="siteNavLabel">
                    <div class="offcanvas-header">
                        <a href="index.php" id="siteNavLabel">
                            <img src="img/logo-white.svg" alt="Master Surgeon" class="site-logo">
                        </a>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1">
                            <?php foreach ($data['nav_links'] as $i => $link): ?>
                                <?php if ($i === 1): ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle<?= in_array($currentPage, array_column($data['company_dropdown'], 'href'), true) ? ' active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                                        <ul class="dropdown-menu">
                                            <?php foreach ($data['company_dropdown'] as $company): ?>
                                                <li><a class="dropdown-item<?= $currentPage === $company['href'] ? ' active' : '' ?>" href="<?= $company['href'] ?>"><?= $company['label'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle<?= in_array($currentPage, array_column($data['services_dropdown'], 'href'), true) ? ' active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                                        <ul class="dropdown-menu dropdown-menu-services">
                                            <?php foreach ($data['services_dropdown'] as $service): ?>
                                                <li><a class="dropdown-item<?= $currentPage === $service['href'] ? ' active' : '' ?>" href="<?= $service['href'] ?>"><?= $service['label'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                                <li class="nav-item">
                                    <a class="nav-link<?= $currentPage === $link['href'] ? ' active' : '' ?>" href="<?= $link['href'] ?>"><?= $link['label'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="book-free-appointment.php" class="btn btn-book btn-book-mobile d-lg-none">Book Free Appointment</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--/ header -->
