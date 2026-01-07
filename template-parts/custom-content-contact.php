<?php
/**
 * Template part for displaying the Contact section.
 *
 * @package csk-drift
 */
?>

<section class="contact-section">
  <div class="container">

    <div class="section-header text-center">
      <h2 class="section-title">SKONTAKTUJ SIĘ <span class="highlight">Z NAMI</span></h2>
      <div class="section-subtitle">MASZ PYTANIA?</div>
    </div>

    <div class="contact-intro text-center">
      <p>Wypełnij poniższy formularz, a my skontaktujemy się z Tobą tak szybko, jak to możliwe. Chętnie odpowiemy na
        wszystkie Twoje pytania i pomożemy wybrać najlepszy kurs dla Ciebie.</p>
    </div>

    <div class="contact-wrapper">
      <!-- Map Container -->
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2394.0531637736636!2d23.15830837689139!3d53.12658427244837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ffc0800000001%3A0x6b6c000000000000!2sSienkiewicza%2055A%2C%2015-002%20Bia%C5%82ystok!5e0!3m2!1spl!2spl!4v1700000000000!5m2!1spl!2spl"
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Form Container -->
      <div class="form-container">
        <form class="contact-form" action="#" method="POST">

          <div class="form-row">
            <div class="form-group half-width">
              <label for="contact-name">Imię i nazwisko</label>
              <input type="text" id="contact-name" name="contact-name" placeholder="Jan Kowalski">
            </div>
            <div class="form-group half-width">
              <label for="contact-email">Adres e-mail</label>
              <input type="email" id="contact-email" name="contact-email" placeholder="jan.kowalski@example.com">
            </div>
          </div>

          <div class="form-group">
            <label for="contact-phone">Numer telefonu</label>
            <input type="tel" id="contact-phone" name="contact-phone" placeholder="+48 123 456 789">
          </div>

          <div class="form-group">
            <label for="contact-message">Wiadomość</label>
            <textarea id="contact-message" name="contact-message" placeholder="Twoja wiadomość..."></textarea>
          </div>

          <button type="submit" class="btn btn-submit">
            WYŚLIJ WIADOMOŚĆ <i class="fa-solid fa-paper-plane"></i>
          </button>

        </form>
      </div>
    </div>

  </div>
</section>