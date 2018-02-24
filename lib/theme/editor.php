<?php

// Editor Styles

add_editor_style( array( 'assets/theme/css/editor.css' ) );

// Custom Editor Classes & Settings

function wpb_mce_buttons_2($buttons) {
  array_unshift($buttons, 'styleselect');
  return $buttons;
}

add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) {  

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
      'title' => 'Vierte Überschrift',
      'selector' => 'p,h1,h2,h3,h5,h6',
      'classes' => 'uk-h4',
    ),
    array(
      'title' => 'Fünfte Überschrift',
      'selector' => 'p,h1,h2,h3,h4,h6',
      'classes' => 'uk-h5',
    ),
    array(
      'title' => 'Sechste Überschrift',
      'selector' => 'p,h1,h2,h3,h4,h5',
      'classes' => 'uk-h6',
    ),
    array(
      'title' => 'Button',
      'inline' => 'a',
      'classes' => 'uk-button',
      'selector' => 'a',
    ),
    array(
      'title' => 'Outline-Button',
      'inline' => 'a',
      'classes' => 'uk-button fn-button-line',
      'selector' => 'a',
    ),
  );  
  
  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats'] = json_encode( $style_formats );  
  return $init_array;  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 
