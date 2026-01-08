<?php
/**
 * The template for displaying comments
 *
 * @package csk-drift
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
  return;
}
?>

<div id="comments" class="comments-area">
  <div class="container container-medium">

    <div class="comments-header-row">
      <h3 class="comments-title">
        Discussion (<?php echo get_comments_number(); ?>)
      </h3>
    </div>

    <?php
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $aria_req = ($req ? " aria-required='true'" : '');

    // Form fields (hidden if logged in, but we still define them)
    $fields = array(
      'author' =>
        '<div class="comment-fields-grid"><p class="comment-form-author"><label for="author">Name</label> ' .
        ($req ? '<span class="required">*</span>' : '') .
        '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
        '" size="30"' . $aria_req . ' /></p>',

      'email' =>
        '<p class="comment-form-email"><label for="email">Email</label> ' .
        ($req ? '<span class="required">*</span>' : '') .
        '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
        '" size="30"' . $aria_req . ' /></p></div>',
    );

    // Custom form layout with avatar
    ob_start();
    ?>
    <div class="comment-form-flex">
      <div class="comment-form-avatar">
        <?php
        $current_user = wp_get_current_user();
        if ($current_user->ID != 0) {
          echo get_avatar($current_user->ID, 48);
        } else {
          echo '<div class="avatar-placeholder"><i class="fa-solid fa-user"></i></div>';
        }
        ?>
      </div>
      <div class="comment-form-main">
        <textarea id="comment" name="comment" cols="45" rows="4" aria-required="true"
          placeholder="Join the discussion..."></textarea>
      </div>
    </div>
    <?php
    $comment_field = ob_get_clean();

    comment_form(array(
      'title_reply' => '',
      'title_reply_to' => __('Reply to %s'),
      'class_submit' => 'submit-comment-btn', // Custom class for styling
      'label_submit' => 'Post Comment',
      'comment_field' => $comment_field,
      'fields' => apply_filters('comment_form_default_fields', $fields),
      'submit_field' => '<div class="form-submit-row">%1$s %2$s</div>',
    ));
    ?>

    <?php if (have_comments()): ?>

      <ol class="comment-list">
        <?php
        wp_list_comments(array(
          'style' => 'ol',
          'short_ping' => true,
          'avatar_size' => 50,
        ));
        ?>
      </ol><!-- .comment-list -->

      <?php if (get_comment_pages_count() > 1 && get_option('page_comments')):  // Are there comments to navigate through? ?>
        <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
          <h2 class="screen-reader-text">
            <?php esc_html_e('Comment navigation', 'csk-drift'); ?>
          </h2>
          <div class="nav-links">
            <div class="nav-previous">
              <?php previous_comments_link(esc_html__('Older Comments', 'csk-drift')); ?>
            </div>
            <div class="nav-next">
              <?php next_comments_link(esc_html__('Newer Comments', 'csk-drift')); ?>
            </div>
          </div><!-- .nav-links -->
        </nav><!-- #comment-nav-below -->
      <?php endif; // Check for comment navigation. ?>

    <?php endif; // Check for have_comments(). ?>

  </div>
</div><!-- #comments -->