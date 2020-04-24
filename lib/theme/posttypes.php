<?php

// Custom Post Types

// Example Post Type

function example_post_type() {

  $labels = array(
    'name'                  => _x( 'Example', 'Post Type General Name', 'fn-theme' ),
    'singular_name'         => _x( 'Example', 'Post Type Singular Name', 'fn-theme' ),
  );
  $args = array(
    'label'                 => __( 'Example', 'fn-theme' ),
    'description'           => __( 'Example', 'fn-theme' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor','thumbnail' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 25,
    'menu_icon'             => 'dashicons-megaphone',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'example',
    'capability_type'       => 'page',
  );
  register_post_type( 'example', $args );

}
//add_action( 'init', 'example_post_type', 0 );
