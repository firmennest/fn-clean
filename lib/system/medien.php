<?php

// Define Media Types

function fn_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'fn_mime_types');

// Custom Image Sizes

function fn_add_custom_sizes() {
  add_image_size( 'intro', 1920, 600, array('center','center'));
}
add_action('after_setup_theme','fn_add_custom_sizes');
