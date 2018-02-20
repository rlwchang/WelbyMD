<?php get_header() ?>

<div class="row">
  <?php
    while (have_posts()) {
      the_post();
    }
   ?>
  <div class="col--sm-7 col--md-5 col--lg-4">
    <?php loadProfileImageWithFallback('medium', 'show') ?>
  </div>
  <div class="col--sm-5 col--md-7 col--lg-8">
    <div class="headline">
      <?php the_title(); ?>
    </div>
    <div><?php the_field('specialty') ?></div>
    <div class="text--italic"><?php the_field('education') ?></div>
    <?php the_content(); ?>
  </div>
</div>

<?php get_footer() ?>
