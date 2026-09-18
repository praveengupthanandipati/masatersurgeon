    <?php
    // SEO meta is read from $data['pages'][<current file>] (see components/data.php).
    // A page can still override any of these by setting $pageTitle / $pageDescription /
    // $pageKeywords / $pageCanonical before including this file.
    if (!isset($data)) { $data = require __DIR__ . '/data.php'; }
    $currentPage = $currentPage ?? basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
    $pageMeta    = $data['pages'][$currentPage] ?? $data['pages']['index.php'];

    $pageTitle       = $pageTitle       ?? $pageMeta['title'];
    $pageDescription = $pageDescription ?? $pageMeta['description'];
    $pageKeywords    = $pageKeywords    ?? $pageMeta['keywords'];
    $pageCanonical   = $pageCanonical   ?? $pageMeta['canonical'];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <!-- SEO -->
    <meta name="description" content="<?= $pageDescription ?>">
    <meta name="keywords" content="<?= $pageKeywords ?>">
    <meta name="author" content="Master Surgeon">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <link rel="canonical" href="<?= $pageCanonical ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Master Surgeon">
    <meta property="og:title" content="<?= $pageTitle ?>">
    <meta property="og:description" content="<?= $pageDescription ?>">
    <meta property="og:image" content="img/fav.png">
    <meta property="og:url" content="<?= $pageCanonical ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?= $pageTitle ?>">
    <meta name="twitter:description" content="<?= $pageDescription ?>">
    <meta name="twitter:image" content="img/fav.png">

    <meta name="theme-color" content="#00291d">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/fav.png">
    <link rel="shortcut icon" type="image/png" href="img/fav.png">
    <link rel="apple-touch-icon" href="img/fav.png">

    <!-- styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
