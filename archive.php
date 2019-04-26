<?php get_header(); ?>

<div class="uk-container uk-margin-large-top">
  <div uk-grid class="uk-margin-large-bottom">
    <?php // Page Title ?>
    <div class="uk-width-1-1">
      <h1 class="page-title">
        <?php wp_title(''); ?>
      </h1>
    </div>
    <?php // Article Loop ?>
    <div class="uk-width-4-5@m posts">
      <?php // Loop Start
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php // Article Start ?>
        <article>
          <div uk-grid>
            <?php if ( has_post_thumbnail() || get_field('blog_std_img', 'option') ) : // Article Start with Thumbnail ?>
              <div class="image-container uk-margin-large-bottom uk-width-1-4@m">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <img alt="<?php the_title_attribute(); ?>" src="<?php
                    if ( has_post_thumbnail() ) :
                      the_post_thumbnail_url('thumbnail');
                    elseif ( get_field('blog_std_img', 'option') ) :
                      echo wp_get_attachment_image_src( get_field('blog_std_img', 'option'), 'thumbnail' )[0];
                    endif;
                  ?>"/>
                </a>
              </div>
              <div class="article-content uk-width-1-1 uk-width-3-4@m">
            <?php else :
              // Article Start without Thumbnail ?>
              <div class="article-content uk-width-1-1">
            <?php endif; ?>

                <?php // Article Title ?>
                <h3 class="article-title uk-margin-remove">
                  <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h3>

                <?php // Article Meta ?>
                <div class="article-meta uk-margin-bottom uk-text-small">
                  <span class="uk-margin-small-right">
                    <i class="fal fa-clock"></i> <?php the_time('d. F Y'); ?>
                  </span>
                  <span>
                    <i class="fal fa-tags"></i> <?php the_category( ', ' ); ?>
                  </span>
                </div>

                <?php // Article Intro ?>
                <div class="article-text">
                  <?php the_excerpt() ?>
                </div>

              </div>
            </div>
        </article>
      <?php endwhile; else : // If no posts are available ?>
        <p>
          <?php _e( 'Leider gibt es hier keine Beiträge.' ); ?>
        </p>
      <?php endif; // Loop End ?>

      <?php // Pagination
        the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => __( '' ),
        'next_text' => __( '' ),
        'type' => 'list',
      ) ); ?>
    </div>

    <?php // Sidebar ?>
    <div class="uk-width-1-5@m sidebar">
      <?php // Kategorien ?>
      <div class="sidebar-item categories">
        <p class="uk-h5"><?php _e( 'Kategorien' ); ?></p>
        <ul class="uk-list uk-list-divider">
        <?php wp_list_categories( array(
          'title_li' => '',
          'show_count' => 0,
        ) ); ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
