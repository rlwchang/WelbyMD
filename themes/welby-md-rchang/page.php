<?php get_header() ?>

<?php get_template_part('./partials/content', 'headline') ?>

<?php while (have_posts()) {
  the_post(); ?>

  <p><?php the_content() ?></p>

<?php } ?>

<?php get_footer() ?>
