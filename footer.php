<!-- Driver Status Section (Pre-Footer) -->
<section class="driver-status-section">
  <div class="container text-center">
    <div class="status-icon-wrapper">
      <div class="status-icon">
        <i class="fa-solid fa-id-card"></i>
      </div>
    </div>
    <h2 class="status-title">STATUS PRAWA JAZDY</h2>
    <p class="status-subtitle">Oficjalny serwis do sprawdzania statusu wydania dokumentu.</p>
    <a href="http://www.kierowca.pwpw.pl/" target="_blank" class="btn btn-pwpw">
      <i class="fa-solid fa-link"></i> www.kierowca.pwpw.pl
    </a>
  </div>
</section>

<!-- Main Footer -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Column 1: Branding -->
      <div class="footer-col footer-branding">
        <div class="footer-logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt="Drift Logo">
          </a>
        </div>
        <p class="footer-desc">
          Profesjonalna szkoła jazdy w Białymstoku. Stawiamy na jakość, nowoczesność i bezpieczeństwo naszych kursantów.
        </p>
        <div class="footer-socials">
          <a href="#" class="social-btn"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="social-btn"><i class="fa-solid fa-thumbs-up"></i></a>
          <a href="#" class="social-btn"><i class="fa-solid fa-video"></i></a>
        </div>
      </div>

      <!-- Column 2: Shortcuts -->
      <div class="footer-col">
        <h4 class="footer-heading">NA SKRÓTY</h4>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'footer-menu',
            'fallback_cb' => false,
          )
        );
        ?>
      </div>

      <!-- Column 3: Contact -->
      <div class="footer-col">
        <h4 class="footer-heading">KONTAKT</h4>
        <ul class="footer-contact-list">
          <li>
            <i class="fa-solid fa-location-dot"></i>
            <span>Białystok 15-002,<br>ul. Sienkiewicza 55A lok. 64</span>
          </li>
          <li>
            <i class="fa-solid fa-envelope"></i>
            <a href="mailto:szkola@drift.net.pl">szkola@drift.net.pl</a>
          </li>
          <li>
            <i class="fa-solid fa-mobile-screen"></i>
            <a href="tel:516537654">516 537 654</a>
          </li>
        </ul>
      </div>

      <!-- Column 4: Zapisz się -->
      <div class="footer-col">
        <h4 class="footer-heading">ZAPISZ SIĘ</h4>
        <div class="instructor-box">
          <p class="inst-label">Bezpośredni kontakt:</p>
          <div class="inst-phone">516 537 654</div>

          <?php
          // Availability Logic
          // Times: PON:10.00-16.00, ŚR:10.00-16.00, CZW:10.00-15.30
          $now = current_time('timestamp');
          $day = date('N', $now); // 1 = Mon, 3 = Wed, 4 = Thu
          $hour_min = date('H.i', $now);
          $hour_min = (float) $hour_min;

          $is_available = false;
          $availability_text = '';

          if ($day == 1) { // Monday
            if ($hour_min >= 10.00 && $hour_min <= 16.00) {
              $is_available = true;
              $availability_text = 'PON: 10.00 - 16.00';
            }
          } elseif ($day == 3) { // Wednesday
            if ($hour_min >= 10.00 && $hour_min <= 16.00) {
              $is_available = true;
              $availability_text = 'ŚR: 10.00 - 16.00';
            }
          } elseif ($day == 4) { // Thursday
            if ($hour_min >= 10.00 && $hour_min <= 15.30) {
              $is_available = true;
              $availability_text = 'CZW: 10.00 - 15.30';
            }
          }
          ?>

          <?php if ($is_available): ?>
            <div class="inst-status">
              <span class="status-dot"></span> DOSTĘPNY: <?php echo esc_html($availability_text); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <div class="copyright">
        &copy; <?php echo date('Y'); ?> Szkoła Jazdy "Drift". Wszelkie prawa zastrzeżone.
      </div>
      <div class="credits">
        Projekt: <a href="https://pollos.pl" target="_blank">Pollos.pl</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>