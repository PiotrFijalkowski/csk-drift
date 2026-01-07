<?php
/**
 * The template for displaying all single posts
 *
 * @package csk-drift
 */

get_header();
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()):
    the_post();

    // Get category for header
    $cats = get_the_category();
    $cat_name = !empty($cats) ? $cats[0]->name : '';
    $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('single-post-article'); ?>>

      <!-- Hero / Header -->
      <header class="single-post-header">
        <div class="container container-narrow">
          <div class="header-meta">
            <a href="<?php echo esc_url(home_url('/aktualnosci')); ?>" class="back-link"><i
                class="fa-solid fa-arrow-left"></i>
              Wróć do aktualności</a>
            <?php if ($cat_name): ?>
              <span class="post-category">
                <?php echo esc_html($cat_name); ?>
              </span>
            <?php endif; ?>
          </div>

          <h1 class="entry-title">
            <?php the_title(); ?>
          </h1>

          <div class="entry-meta">
            <span class="posted-on"><i class="fa-regular fa-calendar"></i>
              <?php echo get_the_date('d.m.Y'); ?>
            </span>
            <!-- Add author or reading time here if needed -->
          </div>
        </div>
      </header>

      <!-- Featured Image -->
      <?php if ($thumb_url): ?>
        <div class="single-featured-image-wrapper">
          <div class="container container-medium">
            <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>"
              class="single-featured-image">
          </div>
        </div>
      <?php endif; ?>

      <!-- Content -->
      <div class="single-post-content-wrapper">
        <div class="container container-narrow">
          <div class="entry-content">
            <?php
            the_content();

            wp_link_pages(
              array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'csk-drift'),
                'after' => '</div>',
              )
            );
            ?>
          </div>
        </div>
      </div>

    </article>

    <?php
  endwhile; // End of the loop.
  ?>

</main>

<?php
get_footer();
