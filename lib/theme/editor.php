<?php

add_action( 'enqueue_block_editor_assets', 'fn_add_gutenberg_assets' );
function fn_add_gutenberg_assets() {
	wp_enqueue_style( 'fn-gutenberg-styles', get_theme_file_uri( '/assets/theme/css/block-editor.css' ), false );
}

// Editor Styles

function fn_theme_add_editor_styles() {
  add_editor_style( get_template_directory_uri() . '/assets/theme/css/editor.css' );
}
add_action( 'admin_init', 'fn_theme_add_editor_styles' );

// Custom Editor Classes & Settings

function fn_mce_buttons_2($buttons) {
  array_unshift($buttons, 'styleselect');
  return $buttons;
}

add_filter('mce_buttons_2', 'fn_mce_buttons_2');

function fn_mce_before_init_insert_formats( $init_array ) {

  // Define the style_formats array

  $style_formats = array(

    // Each array child is a format with it's own settings
    array(
      'title' => 'Erste Überschrift',
      'selector' => 'p,h2,h3,h4,h5,h6',
      'classes' => 'uk-h1',
    ),
    array(
      'title' => 'Zweite Überschrift',
      'selector' => 'p,h1,h3,h4,h5,h6',
      'classes' => 'uk-h2',
    ),
    array(
      'title' => 'Dritte Überschrift',
      'selector' => 'p,h1,h2,h4,h5,h6',
      'classes' => 'uk-h3',
    ),
    array(
      'title' => 'Button',
      'inline' => 'a',
      'classes' => 'uk-button uk-button-primary',
      'selector' => 'a',
    ),
		array(
      'title' => 'Text-Button',
      'inline' => 'a',
      'classes' => 'uk-button uk-button-text',
      'selector' => 'a',
    ),
    array(
      'title' => 'Outline-Button',
      'inline' => 'a',
      'classes' => 'uk-button uk-button-default',
      'selector' => 'a',
    ),
    array(
      'title' => 'Großer Text',
      'selector' => 'p,h1,h2,h3,h4,h5,h6',
      'classes' => 'uk-text-large',
    ),
    array(
      'title' => 'Kleiner Text',
      'selector' => 'p,h1,h2,h3,h4,h5,h6',
      'classes' => 'uk-text-small',
    ),
    array(
      'title' => 'Textfarbe: Grau',
      'selector' => 'p,h1,h2,h3,h4,h5,h6',
      'classes' => 'uk-text-muted',
    ),
    array(
      'title' => 'Textfarbe: Hauptfarbe',
      'selector' => 'p,h1,h2,h3,h4,h5,h6',
      'classes' => 'uk-text-primary',
    ),
  );

  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats'] = json_encode( $style_formats );
  return $init_array;
}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'fn_mce_before_init_insert_formats' );
