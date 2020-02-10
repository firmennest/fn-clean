<?php get_header(); ?>

<div class="uk-container uk-margin-large-top">
  <div uk-grid class="uk-margin-large-bottom">

    <div class="uk-width-4-5@m posts">
      <article> <?php
        if ( have_posts() ) {
          while ( have_posts() ) {

            the_post(); // ?>

            <div class="article-content">

              <h3 class="article-title uk-margin-remove">
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php
                  the_title(); ?>
                </a>
              </h3>

              <div class="article-meta uk-margin-bottom uk-text-small">
                <div class="uk-grid-small uk-child-width-1-2@m" uk-grid>
                  <div class="uk-text-left@m"><i class="fal fa-clock"></i> <?php the_time('d. F Y'); ?></div>
                  <div class="uk-text-right@m"><i class="fal fa-tags"></i> <?php the_category( ', ' ); ?></div>
                </div>
              </div><?php

              if ( has_post_thumbnail() || get_field('blog_std_img', 'option') ) : ?>
                <div class="image-container uk-margin-bottom">
                  <img alt="<?php the_title_attribute(); ?>" src="<?php
                    if ( has_post_thumbnail() ) :
                      the_post_thumbnail_url('large');
                    elseif ( get_field('blog_std_img', 'option') ) :
                      echo wp_get_attachment_image_src( get_field('blog_std_img', 'option'), 'large' )[0];
                    endif;
                  ?>"/>
                </div><?php
              endif; ?>

              <div class="article-text"><?php
                the_content() ?>
              </div>

            </div> <?php
          }
        } ?>
      </article>
    </div>

    <div class="uk-width-1-5@m sidebar">
      <div class="sidebar-item categories">
        <p class="uk-h5"><?php _e( 'Kategorien' ); ?></p>
        <ul class="uk-list uk-list-divider"><?php
          wp_list_categories(array(
            'title_li' => '',
            'show_count' => 0,
          )); ?>
        </ul>
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>
