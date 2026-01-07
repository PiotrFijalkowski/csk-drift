<?php
get_header();
?>

<main id="primary" class="site-main">
  <div class="container">
    <h1>Hello csk-drift</h1>
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post();
        the_content();
      endwhile;
    endif;
    ?>
  </div>
</main>

<?php
get_footer();
