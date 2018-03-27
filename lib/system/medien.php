<?php

// Define Media Types

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Allow Post Thumbnails

add_theme_support( 'post-thumbnails' );


// Custom Image Sizes

function add_custom_sizes() {
  add_image_size( 'schema_company_logo', 151, 151);
  add_image_size( 'schema_company_image', 200, 200, array('center','center'));
  add_image_size( 'intro', 1920, 500, array('center','center'));
}
add_action('after_setup_theme','add_custom_sizes');
