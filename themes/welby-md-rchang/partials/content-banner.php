<div class="banner <?php echo get_field('subtitle') ? '' : 'banner--no-subtitle'?>">
  <div class="<?php echo get_field('background_image') ? 'banner__image' : ''?>" style="background-image: url(<?php
    $bannerImageArray = get_field('background_image');
    echo $bannerImageArray['sizes']['page-banner'];
   ?>);">
  </div>
  <div class="container banner__text <?php echo get_field('background_image') ? '' : 'banner__text--no-image'  ?>">
    <h2 class="headline--large headline--normal no-margin"><?php the_title() ?></h2>
    <h3 class="headline no-margin"><?php the_field('subtitle') ?></h3>
  </div>
</div>

<!-- Testing DeployHQ -->
