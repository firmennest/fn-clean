<?php get_header();

?><main>
  <div class="uk-container fn-content"><?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        the_content();
      }
    }
  ?></div>
</main><?php

get_footer();
