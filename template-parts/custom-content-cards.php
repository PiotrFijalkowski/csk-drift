<?php
/**
 * Template part for displaying the Cards section.
 *
 * @package csk-drift
 */

?>

<section class="cards-section">
  <div class="container cards-container">
    <?php if (have_rows('cards')): ?>
      <div class="cards-grid">
        <?php while (have_rows('cards')):
          the_row();
          $icon = get_sub_field('icon');
          $bg_icon = get_sub_field('bg_icon');
          $title = get_sub_field('title');
          $text = get_sub_field('text');
          $more_text = get_sub_field('more_text');
          $more_link = get_sub_field('more_link');
          ?>
          <div class="card-item">
            <?php if ($bg_icon): ?>
              <div class="card-bg-icon">
                <?php
                if (is_array($bg_icon) && isset($bg_icon['id'])) {
                  echo wp_get_attachment_image($bg_icon['id'], 'medium');
                } elseif (is_numeric($bg_icon)) {
                  echo wp_get_attachment_image($bg_icon, 'medium');
                } elseif (is_string($bg_icon)) {
                  echo '<img src="' . esc_url($bg_icon) . '" alt="" />';
                }
                ?>
              </div>
            <?php endif; ?>

            <div class="card-content">
              <?php if ($icon): ?>
                <div class="card-icon">
                  <?php
                  if (is_array($icon) && isset($icon['id'])) {
                    echo wp_get_attachment_image($icon['id'], 'thumbnail');
                  } elseif (is_numeric($icon)) {
                    echo wp_get_attachment_image($icon, 'thumbnail');
                  } elseif (is_string($icon)) {
                    echo '<img src="' . esc_url($icon) . '" alt="" />';
                  }
                  ?>
                </div>
              <?php endif; ?>

              <?php if ($title): ?>
                <h3 class="card-title">
                  <?php echo esc_html($title); ?>
                </h3>
              <?php endif; ?>

              <?php if ($text): ?>
                <div class="card-text">
                  <?php echo wp_kses_post($text); ?>
                </div>
              <?php endif; ?>

              <?php
              if ($more_text && $more_link):
                $link_url = $more_link;
                $link_target = '_self';

                if (is_array($more_link)) {
                  $link_url = isset($more_link['url']) ? $more_link['url'] : '';
                  $link_target = isset($more_link['target']) ? $more_link['target'] : '_self';
                }

                if ($link_url):
                  ?>
                  <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="card-link">
                    <?php echo esc_html($more_text); ?>
                  </a>
                  <?php
                endif;
              endif;
              ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>