<?php
// packages/parts/navbar.php (Dedicate for Packages Subdomain/Usage)

// Force context: We are NOT home, we are on packages.
$is_home = false;

// HARDCODED PATHS for stability on subdomain
// Main domain protocol/host detection (same as before, but simplified for packages context)
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://";
$host = $_SERVER['HTTP_HOST'];

// Determine main domain from current subdomain
// e.g. test.pakiety.raricart.pl -> test.raricart.pl
$main_host = str_replace('pakiety.', '', $host);
// Fallback if accessed via main domain directly (less likely but possible)
if ($main_host === $host) {
    echo "<!-- Warning: Packages navbar loaded on main domain? -->";
}

$main_url = $protocol . $main_host; // https://test.raricart.pl
$base_url = $main_url . '/'; // Links go to main domain root
$assets_path = $main_url . '/site/assets'; // Assets from main domain

// Initial classes for subpages
$nav_init_class = 'visible no-transition';
$logo_init_class = 'moving no-transition';

// Force final state on subpages + ENABLE POINTER EVENTS
$nav_style = 'style="opacity: 1 !important; visibility: visible !important; pointer-events: auto !important;"';
// NO inline transform for logo
$logo_style = '';
$bg_style = 'style="transition: none !important;"';

function nav_link_pkg($anchor) {
    global $base_url;
    return $base_url . $anchor; // Absolute URL to main domain anchor
}
?>
    <!-- Backgrounds -->
    <!-- Static background for subpages -->
    <div class="nav-bg visible" id="navBg" <?php echo $bg_style; ?>></div>

    <!-- Header Container -->
    <header id="main-header">
        <div class="nav-bg" id="navBg"></div>
        
        <!-- Branding & Nav (Hidden on subpages) -->
        <h1 class="new-brand" id="brandText1" data-i18n="hero.title1" style="display: none !important;">TAM, GDZIE SMAK SPOTYKA EMOCJE, A PROSTOTA STAJE
            SIĘ ELEGANCJĄ...</h1>
        <div class="new-brand" id="brandText2" data-i18n="hero.title2" style="display: none !important;">...TAM ZACZYNA SIĘ <span class="logo-pulse">RARICART</span></div>

        <div class="hamburger <?php echo $nav_init_class; ?>" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="hero-logo <?php echo $logo_init_class; ?>" id="brand" <?php echo $logo_style; ?>>
            <img src="<?php echo $assets_path; ?>/images/logo_optimized.png" class="brand-logo" alt="Raricart Live Food Station Logo"
                width="342" height="250" style="cursor:pointer" fetchpriority="high">
        </div>

        <nav id="nav" class="<?php echo $nav_init_class; ?>" <?php echo $nav_style; ?>>
            <ul class="nav-side nav-left">
                <li><a href="<?php echo nav_link_pkg('#onas'); ?>" aria-label="Przejdź do sekcji O Nas" data-i18n="nav.about">O Nas</a></li>
                <li><a href="<?php echo nav_link_pkg('#oferta-lista'); ?>" aria-label="Przejdź do sekcji Oferta" data-i18n="nav.offer">Oferta</a></li>
                <li><a href="<?php echo nav_link_pkg('#realizacje'); ?>" aria-label="Przejdź do sekcji Galeria Realizacji"
                        data-i18n="nav.gallery">Galeria</a></li>
                <li><a href="<?php echo nav_link_pkg('#faq'); ?>" aria-label="Przejdź do sekcji FAQ" data-i18n="nav.faq">FAQ</a></li>
            </ul>

            <ul class="nav-side nav-right">
                <li><a href="<?php echo nav_link_pkg('#dlaczego'); ?>" aria-label="Przejdź do sekcji Co Nas Wyróżnia" data-i18n="nav.why_us">Co Nas
                        Wyróżnia</a></li>
                <!-- Pakiety is active here -->
                <li><a href="#" aria-label="Zobacz Pakiety" data-i18n="nav.packages" class="active">Pakiety</a></li>
                <li><a href="<?php echo nav_link_pkg('#kontakt'); ?>" aria-label="Przejdź do sekcji Kontakt" data-i18n="nav.contact">Kontakt</a></li>
            </ul>

            <div class="lang-switch">
                <button class="lang-btn active" data-lang="pl">PL</button>
                <span class="sep">|</span>
                <button class="lang-btn" data-lang="en">EN</button>
                <span class="sep">|</span>
                <button class="lang-btn" data-lang="es">ES</button>
            </div>
        </nav>
    </header>
