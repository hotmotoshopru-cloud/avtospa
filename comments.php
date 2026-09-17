<?php
if (!defined('ABSPATH')) { exit; }
if (post_password_required()) { return; }
?>
<section id="comments" class="section" aria-label="Комментарии">
 <div class="container">
  <?php if (have_comments()) : ?>
   <h2><?php echo esc_html(get_comments_number()); ?> комментариев</h2>
   <ol><?php wp_list_comments(array('style'=>'ol','short_ping'=>true)); ?></ol>
  <?php endif; ?>
  <?php comment_form(); ?>
 </div>
</section>
