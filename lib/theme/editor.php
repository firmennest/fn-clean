<?php

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
      'inline' => 'span',  
      'classes' => 'uk-h1',
      'wrapper' => true,
    ),array(  
      'title' => 'Zweite Überschrift',
      'inline' => 'span',  
      'classes' => 'uk-h2',
      'wrapper' => true,

    ),array(  
      'title' => 'Dritte Überschrift',  
      'inline' => 'span',  
      'classes' => 'uk-h3',
      'wrapper' => true,

    ),array(  
      'title' => 'Vierte Überschrift',  
      'inline' => 'span',  
      'classes' => 'uk-h4',
      'wrapper' => true,

    ),array(  
      'title' => 'Fünfte Überschrift',  
      'inline' => 'span',  
      'classes' => 'uk-h5',
      'wrapper' => true,

    ),array(  
      'title' => 'Sechste Überschrift',  
      'inline' => 'span',  
      'classes' => 'uk-h6',
      'wrapper' => true,

    ),array(  
      'title' => 'Button',
      'inline' => 'a',
      'classes' => 'uk-button',
      'selector' => 'a',
    ),
    array(  
      'title' => 'Button',
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