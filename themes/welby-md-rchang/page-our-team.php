<?php get_header() ?>

<div class="container">
  <h2 class="headline--large headline--thin headline--underline">Doctors</h2>
  <div class="row">
  <?php
    $doctorsQueryOptions = array(
      'posts_per_page' => -1,
      'post_type' => 'doctor',
      'orderby' => 'title'
    );
    $doctors = new WP_Query($doctorsQueryOptions);

    while ($doctors->have_posts()) {
      $doctors->the_post(); ?>

        <div class="col--sm-6 col--md-3 col--xl-2">
          <a href=<?php the_permalink() ?>>
            <?php loadProfileImageWithFallback('small', 'index') ?>
          </a>
        </div>
  <?php  }
    wp_reset_postdata();
   ?>
  </div>
</div>

<?php get_footer() ?>
