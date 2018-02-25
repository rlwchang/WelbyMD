<?php get_header() ?>


<?php while (have_posts()) {
  the_post(); ?>
  <div class="container">
    <p><?php the_content() ?></p>
  </div>

<?php } ?>

<?php get_footer() ?>
