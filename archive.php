<?php get_header();

?><main class="uk-margin-large-bottom fn-blog"><?php
  if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<div class="uk-padding-small uk-background-muted uk-margin-large-bottom"><div class="uk-container"><div class="uk-breadcrumb">','</div></div></div>' );
  }
  ?><div class="uk-container">
    <h1 class="uk-text-center uk-margin-medium-bottom"><?php
      $title = get_the_archive_title();
      $title = explode(': ', $title)[1];
      echo $title;
    ?></h1>
    <div uk-grid class="fn-blog-posts">
      <div class="uk-width-4-5@m"> <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article>
            <div uk-grid>
              <?php if ( has_post_thumbnail() || get_field('fn_blog_std_img', 'option') ) : ?>
                <div class="uk-width-1-3@s">
                  <a class="fn-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <img alt="<?php the_title_attribute(); ?>" src="<?php
                      if ( has_post_thumbnail() ) :
                        the_post_thumbnail_url('medium_large');
                      elseif ( get_field('fn_blog_std_img', 'option') ) :
                        echo wp_get_attachment_image_src( get_field('fn_blog_std_img', 'option'), 'medium' )[0];
                      endif;
                    ?>"/>
                  </a>
                </div>
                <div class="article-content uk-width-1-1 uk-width-2-3@s"><?php
              else : ?>
                <div class="article-content uk-width-1-1"><?php
              endif; ?>
                <h3 class="article-title uk-margin-remove">
                  <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="article-meta uk-margin-bottom uk-text-small">
                  <div class="uk-grid-small uk-child-width-auto" uk-grid>
                    <div class=""><i class="fal fa-clock"></i> <?php the_time('d. F Y'); ?></div>
                    <div class=""><i class="fal fa-tags"></i> <?php the_category( ', ' ); ?></div>
                  </div>
                </div>
                <div class="article-text"><?php
                if(!empty(get_the_excerpt())){
                  $excerpt = strip_shortcodes(get_the_excerpt());
                  $excerpt = preg_replace('#\[[^\]]+\]#', '', $excerpt);
                  echo wp_trim_words($excerpt, 30);
                }else{
                  $content = apply_filters( 'the_content', get_the_content() );
                  $content = preg_replace('#\[[^\]]+\]#', '', $content);
                  echo wp_trim_words($content, 30);
                }
                ?></div>
                <a class="uk-button uk-button-text uk-margin-top" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo _e('Mehr erfahren', 'fn-theme'); ?></a>
              </div>
            </div>
          </article><?php

        endwhile; else :?>
          <p><?php _e( 'Leider gibt es hier keine Beiträge.' ); ?></p><?php
        endif;
        the_posts_pagination( array(
          'mid_size'  => 2,
          'prev_text' => __( '<i class="fal fa-angle-left"></i>' ),
          'next_text' => __( '<i class="fal fa-angle-right"></i>' ),
          'type' => 'list',
        ) ); ?>
      </div>
      <div class="uk-width-1-5@m sidebar"><?php get_sidebar(); ?></div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
