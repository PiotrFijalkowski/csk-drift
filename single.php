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
    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()):
      comments_template();
    endif;
    ?>

      <?php
      // Related Posts Logic
      $related_args = array(
        'category__in' => wp_get_post_categories(get_the_ID()),
        'post__not_in' => array(get_the_ID()),
        'posts_per_page' => 3,
        'orderby' => 'rand'
      );
      $related_query = new WP_Query($related_args);

      if ($related_query->have_posts()):
        ?>
        <div class="related-section">
            <div class="container">
                <div class="related-header">
                    <h3 class="related-title">ZOBACZ RÓWNIEŻ</h3>
                    <a href="<?php echo esc_url(home_url('/aktualnosci')); ?>" class="related-link">ZOBACZ WSZYSTKIE</a>
                </div>

                <div class="blog-grid related-grid">
                    <?php while ($related_query->have_posts()):
                      $related_query->the_post();
                      $rel_cats = get_the_category();
                      $rel_cat_name = !empty($rel_cats) ? $rel_cats[0]->name : '';
                      $rel_thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                      ?>
                      <div class="blog-card visible">
                           <div class="blog-img-placeholder" <?php if ($rel_thumb_url): ?>style="background-image: url('<?php echo esc_url($rel_thumb_url); ?>'); background-size: cover; background-position: center;"<?php endif; ?>>
                              <?php if (!$rel_thumb_url): ?>
                                    <i class="fa-solid fa-image"></i>
                              <?php endif; ?>
                          </div>
                          <div class="blog-content">
                              <div class="blog-meta">
                                  <span class="blog-cat"><?php echo esc_html($rel_cat_name); ?></span>
                                  <span class="blog-date"><?php echo get_the_date('d.m.Y'); ?></span>
                              </div>
                              <h1 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                              <a href="<?php the_permalink(); ?>" class="btn-read-more">CZYTAJ WIĘCEJ <i class="fa-solid fa-arrow-right"></i></a>
                          </div>
                      </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
      <?php endif; ?>

      <?php
  endwhile; // End of the loop.
  ?>

</main>

<?php
get_footer();
