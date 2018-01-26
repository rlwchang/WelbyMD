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
      <span class="navbar__brand--green">Wel</span><span class="navbar__brand--blue">by</span><span class="navbar__brand--bold navbar__brand--black">MD</span>
    </div>
    <div class="col--md-9">
      <?php wp_nav_menu('header_nav') ?>
    </div>
  </header>
  <article class="main-content container">
