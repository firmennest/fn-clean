<?php get_header() ?>

<div class="uk-width-1-1">
  <div class="uk-container uk-container-center fn-content">
      <?php 
   if ( have_posts() ) {
   	while ( have_posts() ) 
        
    {
   		the_post(); 
        
        $post_thumbnail_id = get_post_thumbnail_id();
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
        
   		//
   		the_content();
       
   		//
   	} // end while
   } // end if
   ?>
  </div>
</div>

<?php get_footer() ?>