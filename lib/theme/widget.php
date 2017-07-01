<?php

// Widgets

function fn_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Unterer Headerbereich', 'fn' ),
    'id'            => 'fn-header-bottom',
    'description'   => __( 'Widget-Bereich unter der Navigation', 'fn' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title">',
    'after_title'   => '</div>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Oberer Footerbereich', 'fn' ),
    'id'            => 'fn-footer-top',
    'description'   => __( 'Widget-Bereich über der Fußzeile', 'fn' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title">',
    'after_title'   => '</div>',
  ) );
}
add_action( 'widgets_init', 'fn_widgets_init' );
