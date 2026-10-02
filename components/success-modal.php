<?php
// Reusable success popup (Bootstrap modal). Set these before including:
//   $modalId    element id the JS opens, e.g. 'contactSuccessModal'
//   $modalTitle heading text
//   $modalText  message text
// js/custom.js moves the modal to <body> before showing it.
?>
<!-- success popup -->
<div class="modal fade consult-modal" id="<?= htmlspecialchars($modalId) ?>" tabindex="-1" aria-labelledby="<?= htmlspecialchars($modalId) ?>Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close consult-modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="consult-modal-icon"><i class="fi fi-rs-check-circle"></i></div>
            <h3 class="consult-modal-title" id="<?= htmlspecialchars($modalId) ?>Title"><?= htmlspecialchars($modalTitle) ?></h3>
            <p class="consult-modal-text"><?= htmlspecialchars($modalText) ?></p>
            <button type="button" class="hero-form-submit consult-modal-btn" data-bs-dismiss="modal">OK</button>
        </div>
    </div>
</div>
<!--/ success popup -->
