<?php

function fn_add_theme_assets() {
  if ( !is_admin() ) {

    // CSS Files
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/theme/css/main.css', array(), filemtime(get_template_directory() . '/assets/theme/css/main.css'), 'all');

    // JS Files
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/theme/js/jquery.min.js', array(), filemtime(get_template_directory() . '/assets/theme/js/jquery.min.js'), false);
    wp_enqueue_script( 'base-js', get_template_directory_uri() . '/assets/theme/js/base-min.js', array(), filemtime(get_template_directory() . '/assets/theme/js/base-min.js'), false);
    wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/theme/js/theme-min.js', array('jquery'), filemtime(get_template_directory() . '/assets/theme/js/theme-min.js'), false);

  }
}
add_action( 'wp_enqueue_scripts', 'fn_add_theme_assets' );

add_action('wp_print_styles', 'fn_dequeue_styles', 100);
function fn_dequeue_styles() {
  if ( !is_admin() ) {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('contact-form-7');
  }
}

function fn_add_footer_styles() {
  if ( !is_admin() ) {
    wp_enqueue_style('wp-block-library');
  }
};
add_action( 'get_footer', 'fn_add_footer_styles' );
