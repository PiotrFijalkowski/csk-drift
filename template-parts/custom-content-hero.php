<?php
/**
 * Template part for displaying the Hero section.
 *
 * @package csk-drift
 */

$label = get_sub_field('label');
$title = get_sub_field('title');
$text = get_sub_field('text');
$button1_text = get_sub_field('button1_text');
$button1_link = get_sub_field('button1_link');
$button2_text = get_sub_field('button2_text');
$button2_link = get_sub_field('button2_link');
$image = get_sub_field('image');
$box_title = get_sub_field('box_title');
$box_text = get_sub_field('box_text');
$box_icon = get_sub_field('box_icon');
?>

<section class="hero-section">
  <div class="container hero-container">
    <div class="hero-content">
      <?php if ($label): ?>
        <div class="hero-label">
          <span class="dot"></span> <?php echo esc_html($label); ?>
        </div>
      <?php endif; ?>

      <?php if ($title): ?>
        <h1 class="hero-title"><?php echo wp_kses_post($title); ?></h1>
      <?php endif; ?>

      <?php if ($text): ?>
        <div class="hero-text"><?php echo wp_kses_post($text); ?></div>
      <?php endif; ?>

      <div class="hero-buttons">
        <?php if ($button1_text && $button1_link): ?>
          <a href="<?php echo esc_url($button1_link); ?>" class="btn btn-primary">
            <?php echo esc_html($button1_text); ?> <i class="fa-solid fa-arrow-right"></i>
          </a>
        <?php endif; ?>

        <?php if ($button2_text && $button2_link): ?>
          <a href="<?php echo esc_url($button2_link); ?>" class="btn btn-secondary">
            <?php echo esc_html($button2_text); ?>
          </a>
        <?php endif; ?>
      </div>
    </div>

    <div class="hero-image-wrapper">
      <?php if ($image): ?>
        <?php echo wp_get_attachment_image($image['id'], 'full', false, array('class' => 'hero-image')); ?>
      <?php endif; ?>

      <?php if ($box_title || $box_text): ?>
        <div class="hero-stats-box">
          <?php if ($box_icon): ?>
            <div class="stats-icon">
              <?php echo wp_get_attachment_image($box_icon['id'], 'thumbnail'); ?>
            </div>
          <?php else: ?>
            <!-- Fallback icon if needed -->
            <div class="stats-icon"><i class="fa-solid fa-check"></i></div>
          <?php endif; ?>

          <div class="stats-content">
            <?php if ($box_text): ?>
              <div class="stats-text"><?php echo esc_html($box_text); ?></div>
            <?php endif; ?>
            <?php if ($box_title): ?>
              <div class="stats-title"><?php echo esc_html($box_title); ?></div>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>