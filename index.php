<?php
get_header();
?>

<main id="primary" class="site-main">
  <?php
  if (have_rows('content')):
    while (have_rows('content')):
      the_row();
      $layout = get_row_layout();
      get_template_part('template-parts/custom-content', $layout);
    endwhile;
  else:
    // Fallback content or empty
    if (have_posts()):
      ?>
      <div class="container">
        <?php
        while (have_posts()):
          the_post();
          the_content();
        endwhile;
        ?>
      </div>
      <?php
    endif;
  endif;
  ?>
</main>

<?php
get_footer();
