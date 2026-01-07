<?php
/**
 * Template part for displaying the Tabs section.
 *
 * @package csk-drift
 */
?>

<section class="tabs-section">
    <div class="container">

        <div class="section-header text-center">
            <h2 class="section-title">NAJBLIŻSZY <span class="highlight">TERMIN</span></h2>
            <div class="section-subtitle">KURS PRAWA JAZDY</div>
        </div>

        <div class="tabs-wrapper">
            <!-- Tabs Navigation -->
            <ul class="tabs-nav">
                <li class="tab-link active" data-tab="tab-1">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>INFO</span>
                </li>
                <li class="tab-link" data-tab="tab-2">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>PŁATNOŚCI</span>
                </li>
                <li class="tab-link" data-tab="tab-3">
                    <i class="fa-solid fa-clock"></i>
                    <span>TERMINARZ</span>
                </li>
                <li class="tab-link" data-tab="tab-4">
                    <i class="fa-solid fa-briefcase"></i>
                    <span>FORMALNOŚCI</span>
                </li>
                <li class="tab-link" data-tab="tab-5">
                    <i class="fa-solid fa-keyboard"></i>
                    <span>ZAPISY</span>
                </li>
            </ul>

            <!-- Tabs Content -->
            <div class="tabs-content">

                <?php
                // Helper to render the Right Column CTA (same for all tabs)
                $cta_html = '
                <div class="tab-right-col">
                    <div class="cta-box">
                        <h3 class="cta-title">ZAPISZ SIĘ</h3>
                        <p class="cta-text">na kurs prawa jazdy</p>
                        <a href="#" class="btn btn-primary btn-cta">SPRAWDŹ CENNIK <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>';
                ?>

                <!-- Tab 1: INFO -->
                <div id="tab-1" class="tab-panel active">
                    <div class="tab-inner-layout">
                        <div class="tab-left-col">
                            <span class="badge-category">KATEGORIA B</span>
                            <h3 class="tab-heading">SPOTKANIE<br>ORGANIZACYJNE</h3>
                            <p class="tab-tagline">ROZPOCZNIJ SWOJĄ... PRZYGODĘ™</p>

                            <div class="info-box-blue">
                                <div class="icon-calendar">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="info-details">
                                    <strong>W KAŻDY PONIEDZIAŁEK</strong>
                                    <div class="info-time">Godzina 16:00</div>
                                </div>
                            </div>

                            <div class="tab-description">
                                <p>Szkolenie teoretyczne trwa 30 godzin lekcyjnych. Zajęcia prowadzone będą w sali
                                    wykładowej w Białymstoku przy ul. Sienkiewicza 55A lok.72 (budynek Trzy Kłosy). W
                                    czasie zajęć wykorzystywane są plansze poglądowe, foliogramy, filmy i prezentacje
                                    multimedialne, które są integralną częścią systemu SPS.</p>
                                <p class="location-note"><i class="fa-solid fa-location-dot"></i> ul. Sienkiewicza 55A
                                    lok.72 (budynek Trzy Kłosy)</p>
                            </div>
                        </div>
                        <?php echo $cta_html; ?>
                    </div>
                </div>

                <!-- Tab 2: PŁATNOŚCI -->
                <div id="tab-2" class="tab-panel">
                    <div class="tab-inner-layout">
                        <div class="tab-left-col">
                            <h3 class="tab-heading">Płatności</h3>
                            <div class="tab-text-content">
                                <p>Całkowita cena kursu wynosi: <strong>3700 pln</strong> - przy płatności jednorazowej
                                    lub <strong>3900 pln</strong> - płatność ratalna.</p>
                                <p>Dla osób, które nie mają możliwość w momencie zapisu, wpłacenia pełnej kwoty za
                                    szkolenie, proponujemy rozłożenie płatności na raty*:</p>
                                <ul>
                                    <li>w momencie zapisu należy wpłacić min 1500zł,</li>
                                    <li>reszta wpłat jest dokonywana w trakcie kursu teoretycznego i praktycznego (przed
                                        rozpoczęciem części praktycznej kursu suma wpłat musi wynosić min. 2000zł).</li>
                                </ul>
                            </div>
                        </div>
                        <?php echo $cta_html; ?>
                    </div>
                </div>

                <!-- Tab 3: TERMINARZ -->
                <div id="tab-3" class="tab-panel">
                    <div class="tab-inner-layout">
                        <div class="tab-left-col">
                            <h3 class="tab-heading">Terminarz zajęć</h3>
                            <div class="tab-text-content">
                                <p>Zajęcia teoretyczne odbywają się w godzinach przed i popołudniowych, w dniach
                                    wcześniej uzgodnionych z powstałą grupą.</p>
                                <div class="info-box-blue" style="max-width: 600px;">
                                    <div class="icon-calendar">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                    <div class="info-details">
                                        <strong>Spotkania informacyjne są w każdy poniedziałek</strong>
                                        <div class="info-time">o godz 16.00</div>
                                        <div class="info-loc">w sali wykładowej przy ul. Sienkiewicza 55a lok 72</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo $cta_html; ?>
                    </div>
                </div>

                <!-- Tab 4: FORMALNOŚCI -->
                <div id="tab-4" class="tab-panel">
                    <div class="tab-inner-layout">
                        <div class="tab-left-col">
                            <h3 class="tab-heading">Formalności związane z kursem i egzaminem</h3>
                            <div class="tab-text-content">
                                <p>Warunkiem rozpoczęcia kursu prawa jazdy jest posiadanie <strong>PROFILU KANDYDATA NA
                                        KIEROWCĘ (PKK)</strong>, wydany przez Starostwo lub Urząd Miejski.</p>
                                <p>Dokumenty potrzebne do otrzymania profilu:</p>
                                <ul class="styled-list">
                                    <li>orzeczenie lekarskie</li>
                                    <li>aktualna fotografia</li>
                                    <li>dowód osobisty lub oświadczenie rodziców w przypadku osoby niepełnoletniej</li>
                                </ul>
                            </div>
                        </div>
                        <?php echo $cta_html; ?>
                    </div>
                </div>

                <!-- Tab 5: ZAPISY -->
                <div id="tab-5" class="tab-panel">
                    <div class="tab-inner-layout">
                        <div class="tab-left-col">
                            <h3 class="tab-heading">Zapisy na kurs</h3>
                            <div class="tab-text-content">
                                <!-- Removed centered-content class to align left with layout -->
                                <p>Wszystkich zainteresowanych prosimy o kontakt telefoniczny.</p>
                                <div class="phone-box" style="text-align: left;">
                                    <i class="fa-solid fa-phone"></i> 516 537 654
                                </div>
                                <p>Udzielimy wszystkich niezbędnych informacji.</p>
                            </div>
                        </div>
                        <?php echo $cta_html; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>