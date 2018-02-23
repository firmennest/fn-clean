<?php get_header() ?>

<div class="uk-width-1-1">
  <div class="uk-container uk-container-center fn-content">
  <?php
    if ( have_posts() ) {
      while ( have_posts() ) {

      the_post();

      //
      the_content();

      //
      } // end while
    } // end if
  ?>
  </div>
</div>

<?php get_footer() ?>
