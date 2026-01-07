<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="site-header">
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container top-bar__inner">
        <div class="top-bar__left">
          <a href="tel:516537654" class="top-bar__item">
            <i class="fa-solid fa-mobile-screen"></i> 516 537 654
          </a>
          <a href="mailto:szkola@drift.net.pl" class="top-bar__item">
            <i class="fa-regular fa-envelope"></i> szkola@drift.net.pl
          </a>
        </div>
        <div class="top-bar__right">
          <a href="#" class="top-bar__item top-bar__item--like">
            <i class="fa-solid fa-thumbs-up"></i> LUBIĘ TO
          </a>
        </div>
      </div>
    </div>

    <!-- Main Navbar -->
    <div class="main-navbar">
      <div class="container main-navbar__inner">
        <div class="main-navbar__branding">
          <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt="Drift Logo">
            </a>
          </div>
          <div class="branding-separator"></div>
          <div class="slogan">
            <span class="slogan__main">PROSTA DROGA</span>
            <span class="slogan__sub">DO BEZPIECZNEJ JAZDY</span>
          </div>
        </div>

        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
          <i class="fa-solid fa-bars"></i>
        </button>

        <nav class="main-navigation">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'primary',
              'menu_id' => 'primary-menu',
              'container' => false,
              'menu_class' => 'nav-menu',
            )
          );
          ?>
        </nav>
      </div>
    </div>
  </header>