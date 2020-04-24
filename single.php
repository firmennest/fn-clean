<?php

get_header();

?><main class="uk-margin-large-bottom fn-blog"><?php
  if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<div class="uk-padding-small uk-background-muted uk-margin-large-bottom"><div class="uk-container"><div class="uk-breadcrumb">','</div></div></div>' );
  }
  ?><div class="uk-container">
    <div uk-grid class="">
      <div class="uk-width-4-5@m posts">
        <article><?php
          if ( have_posts() ) {
            while ( have_posts() ) {

              the_post();

               ?><div class="article-content">
                <h3 class="article-title uk-margin-remove">
                  <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php
                    the_title(); ?>
                  </a>
                </h3>
                <div class="article-meta uk-margin-bottom uk-text-small">
                  <div class="uk-grid-small uk-child-width-auto" uk-grid>
                    <div class=""><i class="fal fa-clock"></i> <?php the_time('d. F Y'); ?></div>
                    <div class="">
                      <i class="fal fa-tags"></i><?php
                      the_category( ', ' );
                    ?></div>
                  </div>
                </div><?php

                if ( has_post_thumbnail() || get_field('fn_blog_std_img', 'option') ) : ?>
                  <div class="image-container uk-margin-bottom">
                    <img alt="<?php the_title_attribute(); ?>" src="<?php
                      if ( has_post_thumbnail() ) :
                        the_post_thumbnail_url('large');
                      elseif ( get_field('fn_blog_std_img', 'option') ) :
                        echo wp_get_attachment_image_src( get_field('fn_blog_std_img', 'option'), 'large' )[0];
                      endif;
                    ?>"/>
                  </div><?php
                endif;

                ?><div class="article-text"><?php
                  the_content();
                ?></div>
              </div><?php
            }
          }
        ?></article>
      </div>
      <div class="uk-width-1-5@m sidebar"><?php get_sidebar(); ?></div>
    </div>
  </div>
</main><?php

get_footer();

?>
