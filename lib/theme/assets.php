<?php

// CSS Files
function add_theme_css() {
  if ( !is_admin() ) {
    wp_register_style( 'main-css', get_template_directory_uri() . '/assets/theme/css/main.css', array(), filemtime(get_template_directory() . '/assets/theme/css/main.css'), false);
    wp_enqueue_style( 'main-css');
  }
}
add_action( 'wp_enqueue_styles', 'add_theme_css' );
add_action('init', 'add_theme_css');

// JS Files
function add_theme_js() {
  if ( !is_admin() ) {
    wp_register_script( 'base-js', get_template_directory_uri() . '/assets/theme/js/base-min.js', array(), filemtime(get_template_directory() . '/assets/theme/js/base-min.js'), false);
    wp_enqueue_script( 'base-js');
    wp_register_script( 'theme-js', get_template_directory_uri() . '/assets/theme/js/theme-min.js', array('base-js'), filemtime(get_template_directory() . '/assets/theme/js/theme-min.js'), false);
    wp_enqueue_script( 'theme-js');
  }
}
add_action( 'wp_enqueue_scripts ', 'add_theme_js');
add_action( 'init', 'add_theme_js');
