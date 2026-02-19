<?php
// Detect protocol and main domain for CSS/Assets linking on subdomain
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://";
$host = $_SERVER['HTTP_HOST'];

// Logic compatible with navbar.php
if (strpos($host, 'pakiety.') !== false) {
    // We are on packages subdomain
    $main_host = str_replace('pakiety.', '', $host);
    $site_url = $protocol . $main_host; // e.g. https://test.raricart.pl
} else {
    // Fallback or main domain (e.g. accessing packages/index.php directly)
    $site_url = ''; // Relative path base? No, better use root-relative if on main domain
    // If on main domain, /site/assets is correct from root.
    // If we are in packages/ directory on main domain, /site/assets is also correct.
    $site_url = ''; 
}
// Assets Base URL
$assets_base = $site_url . '/site/assets'; 
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raricart - Pakiety Eventowe</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Comfortaa:wght@300;400;700&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=Playfair+Display:ital,wght@0,700;1,700&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $assets_base; ?>/images/logo_optimized.png">
    
    <!-- Main CSS (for Navbar & Global Styles) -->
    <link rel="stylesheet" href="<?php echo $assets_base; ?>/css/styles.css">
    <!-- Packages specific CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        /* Specific overrides for packages page to ensure navbar visibility */
        body {
            padding-top: 0; /* Navbar is fixed/overlay */
        }
        /* Ensure navbar background is visible since we don't have a hero video here */
        .nav-bg {
            /* background: rgba(20, 20, 20, 0.95) !important; REMOVED - use default styles */
            /* backdrop-filter: handled by css */
        }
        
        main {
            padding-top: 90px; /* Space for fixed navbar (approx 80px + 10px buffer) */
        }

    </style>
</head>

<body>
    <!-- Navbar Integration -->
    <?php include '../site/parts/navbar.php'; ?>

    <div class="bg-decoration dec-1"></div>
    <div class="bg-decoration dec-2"></div>

    <div class="container">
        <!-- Old Header Removed (replaced by Navbar) -->

        <main>
            <!-- INDIVIDUAL STATIONS -->
            <section>


                <!-- PDF GALLERY GRID (Now all HTML Split Cards) -->
                <div class="split-cards-stack">

                    <!-- 1. IDEA MARKI -->
                    <div class="split-card">
                        <img src="assets/gallery/images/1a-001.webp" alt="Idea Marki Raricart" class="split-card-image"
                            loading="lazy">
                        <div class="split-card-text">
                            <div class="split-card-text-inner">
                                <div class="split-card-text-content">
                                    <h3>IDEA MARKI</h3>
                                    <p>Raricart to koncept live food station, który zmienia sposób, w jaki myślimy o
                                        cateringu.</p>
                                    <p>Nie ustawiamy stołu i nie znikamy na zapleczu. Tworzymy przestrzeń, w której
                                        jedzenie powstaje przy gościach i wśród gości.</p>
                                    <p>Mini porcje, swoboda wyboru, estetyczna forma.</p>
                                    <p>Jedzenie jako część wydarzenia, nie jego tło.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2. DLA KOGO -->
                    <div class="split-card">
                        <img src="assets/gallery/images/2a-001.webp" alt="Dla kogo jest Raricart"
                            class="split-card-image" loading="lazy">
                        <div class="split-card-text">
                            <div class="split-card-text-inner">
                                <div class="split-card-text-content">
                                    <h3>DLA KOGO JEST RARICART?</h3>
                                    <p>Dla par młodych, które chcą, by ich wesele miało charakter. Dla firm
                                        organizujących eventy, gale i spotkania integracyjne. Dla osób planujących
                                        urodziny, jubileusze, baby shower czy przyjęcia plenerowe.</p>
                                    <p>Dla tych, którzy szukają czegoś więcej niż klasyczny catering.</p>
                                    <p>Dla tych, którzy chcą, by jedzenie było częścią doświadczenia.</p>
                                    <p>Jeśli liczy się klimat, detal i swoboda wyboru, Raricart odnajdzie się na Twoim
                                        wydarzeniu.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3. JAK TO DZIAŁA -->
                    <div class="split-card">
                        <img src="assets/gallery/images/3a-000.webp" alt="Jak działa Raricart" class="split-card-image"
                            loading="lazy">
                        <div class="split-card-text">
                            <div class="split-card-text-inner">
                                <div class="split-card-text-content">
                                    <h3>JAK TO DZIAŁA?</h3>
                                    <p>Przygotowujemy mini porcje na miejscu, w bezpośrednim kontakcie z gośćmi. Każdy
                                        sam komponuje swoją wersję zgodnie z własnym smakiem i nastrojem chwili.</p>
                                    <p>Bez sztywnych schematów, bez gotowych zestawów, bez konieczności dopasowywania
                                        się do jednej opcji.</p>
                                    <p>Goście podchodzą wtedy, kiedy mają ochotę. Próbują różnych połączeń i wracają po
                                        więcej.</p>
                                    <p>To swobodna forma serwowania, która daje wybór i naturalnie tworzy przestrzeń do
                                        spotkań.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4. LODY WŁOSKIE (Moved Up) -->
                    <div class="split-card">
                        <img src="assets/gallery/images/x1-000.webp" alt="Lody włoskie Raricart"
                            class="split-card-image" loading="lazy">
                        <div class="split-card-text">
                            <div class="split-card-text-inner">
                                <div class="split-card-text-content">
                                    <h3>LODY WŁOSKIE</h3>
                                    <p>Prosto, kremowo.</p>
                                    <p>Bez zbędnych dodatków, poza tymi, które wybiorą goście.</p>
                                    <p>Lody włoskie serwowane na bieżąco, komponowane według indywidualnych preferencji.
                                        Klasyka, która sprawdza się niezależnie od wieku i okazji.</p>
                                    <p>Lekka forma, szybkie porcje i swobodna atmosfera.</p>
                                    <p>Deser, który naturalnie przyciąga.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 5. MINI PANCAKES (Moved Up) -->
                    <div class="split-card">
                        <img src="assets/gallery/images/x2-001.webp" alt="Mini pancakes Raricart"
                            class="split-card-image" loading="lazy">
                        <div class="split-card-text">
                            <div class="split-card-text-inner">
                                <div class="split-card-text-content">
                                    <h3>MINI PANCAKES</h3>
                                    <p>Ciepłe, złociste, robione na miejscu.</p>
                                    <p>Mini pancakes, które same wyznaczają słodki kierunek wieczoru.</p>
                                    <p>Dobierasz dodatki, tworzysz własną wersję i… wracasz po kolejną.</p>
                                    <p>To słodki akcent, który ożywia przestrzeń i naturalnie zbiera ludzi w jednym
                                        miejscu.</p>
                                    <p>Proste w formie, efektowne w odbiorze.</p>
                                    <p>Idealne, gdy chcesz dodać wydarzeniu lekkości i energii.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6. DESKI SERÓW (Moved Up) -->
                    <div class="split-card">
                        <img src="assets/gallery/images/x3-003.webp" alt="Deski serów i wędlin Raricart"
                            class="split-card-image" loading="lazy">
                        <div class="split-card-text">
                            <div class="split-card-text-inner">
                                <div class="split-card-text-content">
                                    <h3>DESKI SERÓW</h3>
                                    <p>Są wydarzenia, które nie potrzebują nadmiaru, potrzebują jakości.</p>
                                    <p>Włoskie sery i dojrzewające wędliny, komponowane w formie mini desek. Każdy
                                        element ma tu znaczenie.</p>
                                    <p>Starannie dobrane produkty, zrównoważone smaki, słone dodatki, które podkreślają
                                        charakter serów i wędlin, nie dominując całości.</p>
                                    <p>Bez przesady, bez chaosu, z klasą.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 7. DLACZEGO MINI PORCJE (Formerly Row 4) -->
                    <div class="split-card">
                        <img src="assets/gallery/images/4a-000.webp" alt="Dlaczego mini porcje" class="split-card-image"
                            loading="lazy">
                        <div class="split-card-text">
                            <div class="split-card-text-inner">
                                <div class="split-card-text-content">
                                    <h3>DLACZEGO MINI PORCJE?</h3>
                                    <p>Mini porcje to świadomy wybór.</p>
                                    <p>Pozwalają próbować różnych smaków, wracać po kolejne kombinacje, decydować
                                        samodzielnie.</p>
                                    <p>Dzięki nim goście próbują tyle razy, ile mają ochotę, testują i szukają swojego
                                        ulubionego połączenia.</p>
                                    <p>To sposób serwowania, który daje swobodę i buduje doświadczenie.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 8. CO NAS WYRÓŻNIA (Formerly Row 5) -->
                    <div class="split-card">
                        <img src="assets/gallery/images/5a-000.webp" alt="Co wyróżnia Raricart" class="split-card-image"
                            loading="lazy">
                        <div class="split-card-text">
                            <div class="split-card-text-inner">
                                <div class="split-card-text-content">
                                    <h3>CO NAS WYRÓŻNIA?</h3>
                                    <p>Przemyślany koncept zamiast przypadkowej atrakcji.</p>
                                    <p>Raricart to dopracowana forma serwowania, w której każdy element ma swoje
                                        miejsce, od jakości produktów, przez tempo pracy, po estetykę całej przestrzeni.
                                    </p>
                                    <p>Nie jesteśmy dodatkiem, który "tylko stoi". Jesteśmy strefą, która żyje.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 9. JAK WYGLĄDA WSPÓŁPRACA (Formerly Row 6) -->
                    <div class="split-card">
                        <img src="assets/gallery/images/6a-000.webp" alt="Jak wygląda współpraca"
                            class="split-card-image" loading="lazy">
                        <div class="split-card-text">
                            <div class="split-card-text-inner">
                                <div class="split-card-text-content">
                                    <h3>JAK WYGLĄDA WSPÓŁPRACA?</h3>
                                    <p>Raricart dopasowuje się do Twojego wydarzenia - nie odwrotnie.</p>
                                    <p>To Ty decydujesz, w którym momencie pojawimy się z naszą realizacją. Czy będzie
                                        to główna część wesela, wieczorna atrakcja, spokojniejszy moment w trakcie
                                        przyjęcia czy zaskakujący element eventu firmowego.</p>
                                    <p>Wcześniej ustalamy wszystkie szczegóły, aby całość była spójna z planem dnia i
                                        charakterem wydarzenia.</p>
                                    <p>W dniu realizacji działamy zgodnie z harmonogramem, dbając o estetykę, płynność i
                                        komfort gości.</p>
                                    <p>Naturalnie. Punktualnie. Z wyczuciem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PACKAGES INTRO -->
            <section>
                <h2 class="section-title">Pakiety Raricart</h2>
                <div class="section-intro font-cardo">
                    <p>Oferta została podzielona na przejrzyste pakiety, dopasowane do różnych liczby gości.</p>
                    <p>Każdy wariant to jasno określony zakres realizacji, z możliwością indywidualnego dostosowania
                        szczegółów.</p>
                    <p>Wybierz opcję, która najlepiej odpowiada Twoim potrzebom.</p>
                    <p style="margin-top: 20px; font-size: 0.85em; opacity: 0.8">* Ceny mają charakter orientacyjny.<br>
                        Szczegółową wycenę przygotowujemy indywidualnie.</p>
                </div>
            </section>

            <!-- SINGLE STATIONS PRICING -->
            <section>
                <h2 class="section-title">POJEDYNCZE STANOWISKA</h2>

                <div class="card">
                    <div class="card-title">
                        Mini Pancakes
                    </div>
                    <ul class="package-list">
                        <li>Stały serwis świeżo przygotowywanych mini pancakes przez cały czas obsługi</li>
                        <li>Słodkie dodatki w cenie: świeże owoce, kremy czekoladowe, polewy, posypki oraz chrupiące
                            ciasteczka</li>
                        <li>Możliwość samodzielnego komponowania własnych zestawów przez gości</li>
                        <li>Stacja live cooking z aranżacją</li>
                    </ul>
                    <div class="price-grid">
                        <div class="price-item"><span class="price-label">50 os.</span><span class="price-value">3 150
                                zł</span></div>
                        <div class="price-item"><span class="price-label">100 os.</span><span class="price-value">4 500
                                zł</span></div>
                        <div class="price-item"><span class="price-label">150 os.</span><span class="price-value">5 850
                                zł</span></div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-title">
                        Lody Włoskie
                    </div>
                    <ul class="package-list">
                        <li>Strefa lodów włoskich dostępna dla gości przez cały czas obsługi</li>
                        <li>Serwis live i aranżacja stanowiska</li>
                        <li>Słodkie dodatki w cenie: świeże owoce, sosy owocowe i czekoladowe, chrupiące posypki,
                            orzechy, mini ciasteczka</li>
                    </ul>
                    <div class="price-grid">
                        <div class="price-item"><span class="price-label">50 os.</span><span class="price-value">3 000
                                zł</span></div>
                        <div class="price-item"><span class="price-label">100 os.</span><span class="price-value">4 250
                                zł</span></div>
                        <div class="price-item"><span class="price-label">150 os.</span><span class="price-value">5 550
                                zł</span></div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-title">
                        Deska Serów
                    </div>
                    <ul class="package-list">
                        <li>Stały serwis i uzupełnianie ekspozycji przez cały czas obsługi</li>
                        <li>Strefa degustacyjna obejmująca 12 starannie wyselekcjonowanych pozycji: włoskie sery i
                            wędliny premium z wytrawnymi dodatkami i sosami</li>
                        <li>Możliwość samodzielnego komponowania mini desek przez gości</li>
                        <li>Stylowa prezentacja stacji</li>
                    </ul>
                    <div class="price-grid">
                        <div class="price-item"><span class="price-label">50 os.</span><span class="price-value">3 250
                                zł</span></div>
                        <div class="price-item"><span class="price-label">100 os.</span><span class="price-value">4 750
                                zł</span></div>
                        <div class="price-item"><span class="price-label">150 os.</span><span class="price-value">6 300
                                zł</span></div>

                    </div>
                </div>
            </section>


            <!-- HERO: 3 STATIONS -->
            <section>
                <h2 class="section-title">PAKIET – 3 STANOWISKA</h2>
                <div class="card hero-card">
                    <span class="badge">NAJLEPSZA OPCJA (-10%)</span>
                    <div class="hero-description">
                        <p>Pełne doświadczenie live food, które robi wrażenie i ustawia wydarzenie na wyższym poziomie.
                        </p>
                        <p>Trzy stanowiska tworzą kompletną strefę smaku, bez kolejek, bez kompromisów i bez
                            powtarzalności. Goście swobodnie krążą między stacjami, atmosfera żyje, a całość staje się
                            jednym z najmocniejszych punktów wydarzenia.</p>
                        <p>To wybór dla tych, którzy chcą, by live food było nie dodatkiem, a prawdziwą atrakcją.</p>
                        <div class="hero-highlight-box">
                            <strong>Dlaczego klienci decydują się na 3 stanowiska?</strong>
                            <p>Bo daje maksymalną różnorodność, najwyższy komfort serwisu i efekt, który zostaje w
                                pamięci gości na długo.</p>
                        </div>
                    </div>
                    <div class="card-title">
                        Pakiety Kompleksowe
                    </div>
                    <ul class="package-list">
                        <li>Mini Pancakes Live Station</li>
                        <li>Lody Włoskie Live Station</li>
                        <li>Deska Serów Live Station</li>
                    </ul>
                    <div class="price-grid">
                        <div class="price-item">
                            <span class="price-label">50 osób</span>
                            <span class="price-value">8 870 zł</span>
                        </div>
                        <div class="price-item">
                            <span class="price-label">100 osób</span>
                            <span class="price-value">12 560 zł</span>
                        </div>
                        <div class="price-item">
                            <span class="price-label">150 osób</span>
                            <span class="price-value">16 340 zł</span>
                        </div>

                    </div>
                </div>
            </section>

            <!-- COMBOS: 2 STATIONS -->
            <section>
                <h2 class="section-title">PAKIETY – 2 STANOWISKA</h2>
                <div class="card hero-card" style="margin-bottom: 40px;">
                    <span class="badge">RABAT PAKIETOWY -5%</span>
                    <div class="hero-description">
                        <p>Więcej wyboru, większy komfort i płynność, którą goście naprawdę doceniają.</p>
                        <p>Dwa stanowiska live food pozwalają rozłożyć ruch, skrócić kolejki i dać gościom swobodę
                            wyboru bez pośpiechu. To rozwiązanie, które sprawia, że strefa smaku działa naturalnie,
                            każdy znajduje coś dla siebie, a Ty zyskujesz spokojny przebieg wydarzenia bez chaosu i
                            przestojów.</p>
                        <div class="hero-highlight-box">
                            <strong>Dlaczego klienci wybierają 2 stanowiska:</strong>
                            <p>Bo to najbardziej wyczuwalny upgrade doświadczenia przy zachowaniu pełnej kontroli nad
                                budżetem.</p>
                        </div>
                    </div>
                </div>

                <div class="card combo-card">
                    <div class="card-title">
                        Mini Pancakes + Lody Włoskie
                    </div>
                    <div class="price-grid">
                        <div class="price-item"><span class="price-label">50 os.</span><span class="price-value">6 250
                                zł</span></div>
                        <div class="price-item"><span class="price-label">100 os.</span><span class="price-value">8 720
                                zł</span></div>
                        <div class="price-item"><span class="price-label">150 os.</span><span class="price-value">11 240
                                zł</span></div>

                    </div>
                </div>

                <div class="card combo-card">
                    <div class="card-title">
                        Mini Pancakes + Deska Serów
                    </div>
                    <div class="price-grid">
                        <div class="price-item"><span class="price-label">50 os.</span><span class="price-value">6 490
                                zł</span></div>
                        <div class="price-item"><span class="price-label">100 os.</span><span class="price-value">9 200
                                zł</span></div>
                        <div class="price-item"><span class="price-label">150 os.</span><span class="price-value">11 950
                                zł</span></div>

                    </div>
                </div>

                <div class="card combo-card">
                    <div class="card-title">
                        Lody Włoskie + Deska Serów
                    </div>
                    <div class="price-grid">
                        <div class="price-item"><span class="price-label">50 os.</span><span class="price-value">6 350
                                zł</span></div>
                        <div class="price-item"><span class="price-label">100 os.</span><span class="price-value">8 960
                                zł</span></div>
                        <div class="price-item"><span class="price-label">150 os.</span><span class="price-value">11 670
                                zł</span></div>

                    </div>
                </div>
            </section>

            <!-- LOGISTICS -->
            <section class="logistics">
                <p>Dojazd do 50 km – w cenie</p>
                <p>Powyżej 50 km: +2 zł/km</p>
                <p style="margin-top: 10px;">Każde stanowisko zapewnia dedykowaną obsługę.</p>
                <p style="margin-top: 20px; font-weight: bold;">Kalendarz na sezon 2026 jest otwarty. Jeśli planujesz
                    wydarzenie i szukasz formy, która połączy smak z doświadczeniem, napisz do nas. Porozmawiajmy o
                    Twoim wydarzeniu</p>
            </section>

        </main>

        <footer>
            <a href="/index.php#kontakt" class="cta-btn">ZAPYTAJ O WYCENĘ</a>
            <p style="margin-top: 20px; font-size: 0.7rem; color: var(--text-muted);">raricart.pl • Live Food
                Station
            </p>
        </footer>
    </div>

    <!-- Floating CTA -->
    <a href="/index.php#kontakt" class="floating-cta" id="floatingCta" aria-label="Kontakt">
        <span class="floating-cta-icon">✉</span>
        <span class="cta-text-desktop">ZAPYTAJ O WYCENĘ</span>
        <span class="cta-text-mobile">KONTAKT</span>
    </a>


    <script>
        // Show floating CTA after scrolling 300px
        const floatingCta = document.getElementById('floatingCta');
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const y = window.scrollY;
            if (y > 300) {
                floatingCta.classList.add('visible');
            } else {
                floatingCta.classList.remove('visible');
            }

            // Hide when near footer (static CTA visible)
            const footer = document.querySelector('footer');
            if (footer) {
                const footerTop = footer.getBoundingClientRect().top;
                if (footerTop < window.innerHeight) {
                    floatingCta.classList.remove('visible');
                }
            }
            lastScroll = y;
        });
    </script>
    
    <!-- Global Script -->
    <script src="/site/assets/js/script.js"></script>
</body>

</html>
