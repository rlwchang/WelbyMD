<?php
function link_styles_and_scripts() {
  wp_enqueue_style('mainStyles', get_theme_file_uri('./style.css'));
  wp_enqueue_script('webpackManifest', get_theme_file_uri('./scripts/manifest.js'), array(), '1.0', true);
  wp_enqueue_script('modernizr', get_theme_file_uri('./scripts/modernizr.js'), array(), '1.0', true);
  wp_enqueue_script('mainScript', get_theme_file_uri('./scripts/bundle.js'), array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'link_styles_and_scripts');


function register_navigation() {
  register_nav_menu('header_nav', 'Header Navigation Menu');
}

add_action('after_setup_theme', 'register_navigation');


 ?>
