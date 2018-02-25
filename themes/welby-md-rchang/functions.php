<?php
function loadProfileImageWithFallback($size, $type) {
  $sizesArray = array(
    'small' => '150x200',
    'medium' => '250x350'
  );
  if (get_the_post_thumbnail()) {
    the_post_thumbnail($size . '-profile', array('class' => 'profile__image profile__image--' . $type));
  } else { ?>
    <img src="<?php echo get_theme_file_uri('images/blank-profile-' . $sizesArray[$size] . '.png') ?>" alt="<?php the_title()?>" class="profile__image profile__image--<?php echo $type ?>">
  <?php }
}

function link_styles_and_scripts() {
  wp_enqueue_style('mainStyles', get_theme_file_uri('./style.css'));
  wp_enqueue_script('webpackManifest', get_theme_file_uri('./scripts/manifest.js'), array(), '1.0', true);
  wp_enqueue_script('modernizr', get_theme_file_uri('./scripts/modernizr.js'), array(), '1.0', true);
  wp_enqueue_script('mainScript', get_theme_file_uri('./scripts/bundle.js'), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'link_styles_and_scripts');


function theme_features() {
  register_nav_menu('header_nav', 'Header Navigation Menu');
  register_nav_menu('footer_explore_nav', 'Footer Explore Menu');
  register_nav_menu('footer_learn_nav', 'Footer Learn Menu');
  add_theme_support('title_tag');
  add_theme_support('post-thumbnails');
  add_image_size('small-profile', 150, 200, TRUE);
  add_image_size('medium-profile', 250, 350, TRUE);
  add_image_size('page-banner', 1500, 350, TRUE);
}

add_action('after_setup_theme', 'theme_features');
?>
