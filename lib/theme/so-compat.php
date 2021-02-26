<?php

add_filter('run_wptexturize', '__return_false');

// Custom Widgets
function fn_widgets_collection($folders){
  $folders[] = get_template_directory() . '/fn-so-widgets/'; // important: Slash on end string is required
  return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'fn_widgets_collection');

function fn_image_standard_fields(){
  $standardFields = array(
    'fn-section-image' => array(
      'type' => 'section',
      'label' => __( 'Bild' , 'fn-theme' ),
      'hide' => false,
      'fields' => array(
        'fn-image' => array(
          'type' => 'media',
          'library' => 'image',
          'label' => __('Bild auswählen', 'fn-theme' ),
        ),
        'fn-image-alt' => array(
          'type' => 'text',
          'label' => __('Alt', 'fn-theme'),
        ),
        'fn-image-size' => array(
          'type' => 'select',
          'label' => __( 'Bildgröße', 'fn-theme' ),
          'default' => 'full',
          'options' => array(
              'full' => __( 'Voll', 'fn-theme' ),
              'medium_large' => __( 'Medium', 'fn-theme' ),
              'fn-large-16-9' => __( '16:9 Large', 'fn-theme' ),
              'fn-medium-16-9' => __( '16:9 Medium', 'fn-theme' ),
              'fn-small-16-9' => __( '16:9 Small', 'fn-theme' ),
              'fn-large-1-1' => __( '1:1 Large', 'fn-theme' ),
              'fn-medium-1-1' => __( '1:1 Medium', 'fn-theme' ),
              'fn-small-1-1' => __( '1:1 Small', 'fn-theme' ),
          )
        ),
        'fn-image-title' => array(
          'type' => 'text',
          'label' => __('Title', 'fn-theme'),
        )
      )
    )
  );
  return $standardFields;
}

function fn_get_standard_image($imageArray){

  $image_id = $imageArray['fn-image'];
  $image_size = empty( $imageArray['fn-image-size'] ) ? 'full' : $imageArray['fn-image-size'];
  $image_src = wp_get_attachment_image_src( $image_id, $image_size )[0];

  $image_alt = (!empty($imageArray['fn-image-alt'])) ? $imageArray['fn-image-alt'] : get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
  $image_title = (!empty($imageArray['fn-image-title'])) ? $imageArray['fn-image-title'] : get_the_title($image_id);

  /* title='{$image_title}' */

  return "<img src='{$image_src}' alt='{$image_alt}' />";

}

function fn_link_standard_fields(){
  $standardFields = array(
    'fn-section-link' => array(
      'type' => 'section',
      'label' => __( 'Link' , 'fn-theme' ),
      'hide' => false,
      'fields' => array(
        'fn-url' => array(
          'type' => 'link',
          'label' => __('Link eintragen oder auswählen', 'fn-theme'),
          'default' => ''
        )
      )
    )
  );
  return $standardFields;
}
function fn_get_standard_link($linkArray){

  $url = $linkArray['fn-url'];
  if(strpos($url, 'post: ') === 0){
    $url = get_permalink(intVal(str_replace('post: ', '', $url)));
  }
  return $url;
}
