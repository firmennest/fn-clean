<?php

// Define Media Types

function fn_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'fn_mime_types');

// Custom Image Sizes

function fn_add_custom_sizes() {
  add_image_size( 'intro', 1920, 600, array('center','center'));  add_image_size( 'fn-large-16-9', 960, 540, array('center','center'));
  add_image_size( 'fn-medium-16-9', 768, 432, array('center','center'));
  add_image_size( 'fn-small-16-9', 480, 270, array('center','center'));
  add_image_size( 'fn-large-1-1', 960, 960, array('center','center'));
  add_image_size( 'fn-medium-1-1', 768, 768, array('center','center'));
  add_image_size( 'fn-small-1-1', 480, 480, array('center','center'));
}
add_action('after_setup_theme','fn_add_custom_sizes');
