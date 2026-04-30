<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="SCV Marchovelette — Club cycliste de Fernelmont, Namur.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,600;0,700;0,900;1,700&family=Barlow:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- CSS principal -->
    <link rel="stylesheet" href="<?= SITE_URL ?>/Assets/css/style.css">
</head>
<body>

<!-- ─── LOADER ──────────────────────────────────────────────────────────────── -->
<div class="loader" id="loader">
    <div class="loader__inner">
        <svg class="loader__wheel" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
            <circle cx="40" cy="40" r="32" fill="none" stroke="#f5c400" stroke-width="4" stroke-dasharray="50 150" stroke-linecap="round"/>
            <circle cx="40" cy="40" r="18" fill="none" stroke="#f5c400" stroke-width="2" opacity="0.4"/>
            <circle cx="40" cy="40" r="4" fill="#f5c400"/>
        </svg>
        <span class="loader__text">SCV<strong>MARCHOVELETTE</strong></span>
    </div>
</div>

<!-- ─── NAVIGATION ──────────────────────────────────────────────────────────── -->
<header class="header" id="header">
    <div class="header__inner">

        <!-- Logo -->
        <a href="<?= SITE_URL ?>/index.php?page=home" class="logo">
            <div class="logo__icon">
                <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="24" cy="24" r="20" fill="none" stroke="currentColor" stroke-width="2.5"/>
                    <circle cx="24" cy="24" r="10" fill="none" stroke="currentColor" stroke-width="2"/>
                    <circle cx="24" cy="24" r="3" fill="#f5c400"/>
                    <line x1="24" y1="4" x2="24" y2="14" stroke="currentColor" stroke-width="2"/>
                    <line x1="24" y1="34" x2="24" y2="44" stroke="currentColor" stroke-width="2"/>
                    <line x1="4" y1="24" x2="14" y2="24" stroke="currentColor" stroke-width="2"/>
                    <line x1="34" y1="24" x2="44" y2="24" stroke="currentColor" stroke-width="2"/>
                    <line x1="9" y1="9" x2="16.5" y2="16.5" stroke="currentColor" stroke-width="1.5"/>
                    <line x1="31.5" y1="31.5" x2="39" y2="39" stroke="currentColor" stroke-width="1.5"/>
                    <line x1="39" y1="9" x2="31.5" y2="16.5" stroke="currentColor" stroke-width="1.5"/>
                    <line x1="16.5" y1="31.5" x2="9" y2="39" stroke="currentColor" stroke-width="1.5"/>
                </svg>
            </div>
            <div class="logo__text">
                <span class="logo__scv">SCV</span>
                <span class="logo__club">Marchovelette</span>
            </div>
        </a>

        <!-- Nav desktop -->
        <nav class="nav" aria-label="Navigation principale">
            <ul class="nav__list">
                <li><a href="<?= SITE_URL ?>/index.php?page=home"       class="nav__link <?= $currentPage === 'home'       ? 'nav__link--active' : '' ?>">Accueil</a></li>
                <li><a href="<?= SITE_URL ?>/index.php?page=club"       class="nav__link <?= $currentPage === 'club'       ? 'nav__link--active' : '' ?>">Le Club</a></li>
                <li><a href="<?= SITE_URL ?>/index.php?page=evenements" class="nav__link <?= $currentPage === 'evenements' ? 'nav__link--active' : '' ?>">Événements</a></li>
                <li><a href="<?= SITE_URL ?>/index.php?page=palmares"   class="nav__link <?= $currentPage === 'palmares'   ? 'nav__link--active' : '' ?>">Palmarès</a></li>
                <li><a href="<?= SITE_URL ?>/index.php?page=contact"    class="nav__link <?= $currentPage === 'contact'    ? 'nav__link--active' : '' ?>">Contact</a></li>
            </ul>
        </nav>

        <!-- Bouton mobile -->
        <button class="burger" id="burger" aria-label="Menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>

    <!-- Nav mobile -->
    <nav class="nav-mobile" id="navMobile" aria-hidden="true">
        <ul>
            <li><a href="<?= SITE_URL ?>/index.php?page=home">Accueil</a></li>
            <li><a href="<?= SITE_URL ?>/index.php?page=club">Le Club</a></li>
            <li><a href="<?= SITE_URL ?>/index.php?page=evenements">Événements</a></li>
            <li><a href="<?= SITE_URL ?>/index.php?page=palmares">Palmarès</a></li>
            <li><a href="<?= SITE_URL ?>/index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
</header>

<!-- ─── CONTENU PRINCIPAL ───────────────────────────────────────────────────── -->
<main class="main" id="main">
    <?php
    $viewFile = __DIR__ . '/' . $view . '.php';
    if (file_exists($viewFile)) {
        require $viewFile;
    } else {
        echo '<p style="color:red">Vue introuvable : ' . htmlspecialchars($view) . '</p>';
    }
    ?>
</main>

<!-- ─── FOOTER ──────────────────────────────────────────────────────────────── -->
<footer class="footer">
    <div class="footer__inner">
        <div class="footer__brand">
            <div class="footer__logo">
                <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                    <circle cx="24" cy="24" r="20" fill="none" stroke="#f5c400" stroke-width="2.5"/>
                    <circle cx="24" cy="24" r="10" fill="none" stroke="#f5c400" stroke-width="2"/>
                    <circle cx="24" cy="24" r="3" fill="#f5c400"/>
                    <line x1="24" y1="4" x2="24" y2="14" stroke="#f5c400" stroke-width="2"/>
                    <line x1="24" y1="34" x2="24" y2="44" stroke="#f5c400" stroke-width="2"/>
                    <line x1="4" y1="24" x2="14" y2="24" stroke="#f5c400" stroke-width="2"/>
                    <line x1="34" y1="24" x2="44" y2="24" stroke="#f5c400" stroke-width="2"/>
                </svg>
                <span>SCV <strong>Marchovelette</strong></span>
            </div>
            <p>Club cycliste de Fernelmont<br>Province de Namur — Belgique</p>
        </div>

        <div class="footer__links">
            <h4>Navigation</h4>
            <ul>
                <li><a href="<?= SITE_URL ?>/index.php?page=home">Accueil</a></li>
                <li><a href="<?= SITE_URL ?>/index.php?page=club">Le Club</a></li>
                <li><a href="<?= SITE_URL ?>/index.php?page=evenements">Événements</a></li>
                <li><a href="<?= SITE_URL ?>/index.php?page=palmares">Palmarès</a></li>
                <li><a href="<?= SITE_URL ?>/index.php?page=contact">Contact</a></li>
            </ul>
        </div>

        <div class="footer__contact">
            <h4>Contact</h4>
            <p>📍 Fernelmont, Namur</p>
            <p>📧 contact@scv-marchovelette.be</p>
            <p>📞 +32 81 00 00 00</p>
            <div class="footer__socials">
                <a href="#" aria-label="Facebook">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                </a>
                <a href="#" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <p>&copy; <?= date('Y') ?> SCV Marchovelette — Tous droits réservés</p>
        <p>Fondé en 1978 · Fernelmont · Namur · Belgique</p>
    </div>
</footer>

<script src="<?= SITE_URL ?>/Assets/js/main.js"></script>
</body>
</html>