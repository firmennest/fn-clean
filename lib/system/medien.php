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
  add_image_size( 'fn-imgsize-big', 960, 1080, array('center','center'));
}
add_action('after_setup_theme','add_custom_sizes');
