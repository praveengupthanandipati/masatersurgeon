<?php
// Reusable "Book FREE Consultation" form card (home page hero, book-free-appointment.php).
// Submits via AJAX to consultation-mail.php (see js/custom.js) and shows the success popup.
//
// Usage: start the session before any output, load $data (components/data.php), then
//   include 'components/consultation-form.php';
// Optional: set $consultFormClass first to add a class to the card (e.g. 'consult-card-inline').

/** @var array $data */

if (empty($_SESSION['contact_csrf'])) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(16));
}
?>
<div class="hero-form-card<?= !empty($consultFormClass) ? ' ' . htmlspecialchars($consultFormClass) : '' ?>">
    <div class="hero-form-header">Book <span>FREE</span> Consultation</div>
    <form class="hero-form-body js-consult-form" action="consultation-mail.php" method="post" novalidate>
        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['contact_csrf']) ?>">
        <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off" aria-hidden="true">
        <div>
            <input type="text" name="name" class="hero-form-control" placeholder="Enter your full name" aria-label="Full name" autocomplete="name" maxlength="80" required>
            <small class="hero-form-error" data-error-for="name"></small>
        </div>
        <div>
            <div class="hero-form-phone">
                <span class="hero-form-code">&#127470;&#127475; +91</span>
                <input type="tel" name="phone" class="hero-form-control" placeholder="Phone number" aria-label="Phone number" inputmode="tel" autocomplete="tel-national" maxlength="10" pattern="[6-9][0-9]{9}" required>
            </div>
            <small class="hero-form-error" data-error-for="phone"></small>
        </div>
        <div>
            <select name="treatment" class="hero-form-control" aria-label="Select Treatment" required>
                <option value="" selected disabled>Select Treatment</option>
                <?php foreach ($data['treatment_options'] as $option): ?>
                    <option><?= $option ?></option>
                <?php endforeach; ?>
                <option>Other / Not sure</option>
            </select>
            <small class="hero-form-error" data-error-for="treatment"></small>
        </div>
        <div>
            <select name="city" class="hero-form-control" aria-label="Select City" required>
                <option value="" selected disabled>Select City</option>
                <?php foreach ($data['appointment']['cities'] as $city): ?>
                    <option><?= htmlspecialchars($city) ?></option>
                <?php endforeach; ?>
            </select>
            <small class="hero-form-error" data-error-for="city"></small>
        </div>
        <p class="hero-form-alert js-consult-alert" role="alert" hidden></p>
        <button type="submit" class="hero-form-submit js-consult-submit">Book Free Consultation</button>
        <p class="hero-form-note"><i class="fi fi-rs-lock"></i> Your data is secured. We prioritize your medical privacy.</p>
    </form>
</div>
<?php
if (empty($consultModalRendered)) {
    $consultModalRendered = true;
    $modalId = 'consultSuccessModal';
    $modalTitle = 'Consultation Booked!';
    $modalText = 'Your free consultation has been booked successfully. The relevant doctor will contact you shortly.';
    include __DIR__ . '/success-modal.php';
}
