<?php
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= htmlspecialchars($siteConfig['tagline'], ENT_QUOTES, 'UTF-8'); ?>">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?> | <?= htmlspecialchars($siteConfig['site_name'], ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="icon" type="image/x-icon" href="<?= ($basePath === '' ? '' : $basePath); ?>/favicon.ico">
    <link rel="stylesheet" href="<?= $assetFor('vendor/bootstrap/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= $assetFor('css/style.css'); ?>">
</head>
<body>
    <header class="site-header sticky-top shadow-sm">
        <nav class="navbar navbar-expand-lg bg-white py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="<?= $urlFor('home'); ?>" aria-label="Wrth Industry VM">
                    <img src="<?= $assetFor('img/wurth-logo.png'); ?>" class="brand-logo" alt="Wrth Industry">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Alternar navegao">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainMenu">
                    <ul class="navbar-nav mx-auto gap-lg-2">
                        <?php foreach ($siteConfig['menu'] as $menuItem): ?>
                            <li class="nav-item">
                                <a class="nav-link <?= $currentPage === $menuItem['slug'] ? 'active' : ''; ?>" href="<?= $urlFor($menuItem['slug']); ?>">
                                    <?= htmlspecialchars($menuItem['label'], ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?= $urlFor('login'); ?>" class="btn btn-danger rounded-pill px-4">Login</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
