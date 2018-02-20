<?php
function add_post_types() {
  register_post_type('doctor', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Doctors',
      'add_new_item' => 'Add New Doctor',
      'edit_item' => 'Edit Doctor Profile',
      'all_items' => 'All Doctors',
      'singular_name' => 'Doctor'
    ),
    'rewrite' => array('slug' => 'doctors'),
    'menu_icon' => 'dashicons-businessman',
    'has_archive' => TRUE
    )
  );
}

add_action('after_setup_theme', 'add_post_types');
 ?>
