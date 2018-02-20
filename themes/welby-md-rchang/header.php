<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
  <header class="row container navbar">
      <div class="navbar__brand col--md-3">
        <a href="<?php echo site_url('/') ?>">
          <span class="navbar__brand--green">Wel</span><span class="navbar__brand--blue">by</span><span class="navbar__brand--bold navbar__brand--black">MD</span>
        </a>
        <div class="navbar__menu-icon">
          <div class="navbar__menu-icon__middle"></div>
        </div>
      </div>
    <div class="col--md-9 navbar__container">
      <!-- <?php wp_nav_menu(array('theme_location' => 'header_nav')) ?> -->
      <ul class="menu">
        <a href="<?php echo site_url('/') ?>">
          <li class="menu-item <?php if (is_page('home')) {echo 'current_page_item';} ?>">Home</li>
        </a>
        <a href="<?php echo site_url('/services') ?>">
          <li class="menu-item <?php if (is_page('services') or wp_get_post_parent_id(0) == 35) {echo 'current_page_item';} ?>">Services</li>
        </a>
        <a href="<?php echo site_url('/our-team') ?>">
          <li class="menu-item <?php if (is_page('our-team') or wp_get_post_parent_id(0) == 18 or get_post_type() == 'doctor') {echo 'current_page_item';} ?>">Our Team</li>
        </a>
        <a href="<?php echo site_url('/about') ?>">
          <li class="menu-item <?php if (is_page('about') or wp_get_post_parent_id(0) == 12) {echo 'current_page_item';} ?>">About</li>
        </a>
        <a href="<?php echo site_url('/contact') ?>">
          <li class="menu-item <?php if (is_page('contact') or wp_get_post_parent_id(0) == 9) {echo 'current_page_item';} ?>">Contact</li>
        </a>
      </ul>
    </div>
  </header>
  <article class="main-content container">
