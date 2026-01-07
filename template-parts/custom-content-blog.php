<?php
/**
 * Template part for displaying the Blog/Actualities section.
 *
 * @package csk-drift
 */

// Fetch categories that have posts
$categories = get_categories(array(
  'orderby' => 'name',
  'order' => 'ASC',
  'hide_empty' => true,
));

// Build a dynamic query for blog posts
$blog_query = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => 9, // Adjust number of posts as needed
  'post_status' => 'publish',
));

?>

<section class="blog-section" id="blog">
  <div class="container">

    <div class="section-header text-center">
      <h2 class="section-title">AKTUALNOŚCI</h2>
      <div class="section-subtitle">BĄDŹ NA BIEŻĄCO</div>
    </div>

    <!-- Filter Buttons -->
    <?php if (!empty($categories)): ?>
      <div class="blog-filters-wrapper">
        <div class="blog-filters">
          <button class="filter-btn active" data-filter="all">Wszystkie</button>
          <?php foreach ($categories as $category): ?>
            <button class="filter-btn" data-filter="<?php echo esc_attr($category->slug); ?>">
              <?php echo esc_html($category->name); ?>
            </button>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <!-- Posts Grid -->
    <div class="blog-grid">
      <?php if ($blog_query->have_posts()): ?>
        <?php while ($blog_query->have_posts()):
          $blog_query->the_post();
          // Get first category for data attribute and display
          $cats = get_the_category();
          $cat_slug = !empty($cats) ? $cats[0]->slug : '';
          $cat_name = !empty($cats) ? $cats[0]->name : '';
          $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'medium'); // Use appropriate size
          ?>
          <div class="blog-card visible" data-category="<?php echo esc_attr($cat_slug); ?>">
            <div class="blog-img-placeholder" <?php if ($thumb_url): ?>style="background-image: url('<?php echo esc_url($thumb_url); ?>'); background-size: cover; background-position: center;"
              <?php endif; ?>>
              <?php if (!$thumb_url): ?>
                <i class="fa-solid fa-image"></i>
              <?php endif; ?>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span class="blog-cat"><?php echo esc_html($cat_name); ?></span>
                <span class="blog-date"><?php echo get_the_date('d.m.Y'); ?></span>
              </div>
              <h3 class="blog-title"><?php the_title(); ?></h3>
              <p class="blog-excerpt"><?php echo get_the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn-read-more">CZYTAJ WIĘCEJ <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php else: ?>
        <p>Brak wpisów do wyświetlenia.</p>
      <?php endif; ?>
    </div>

    <div class="text-center mt-5">
      <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn btn-outline">ZOBACZ
        ARCHIWUM</a>
    </div>

  </div>
</section>