<?php get_header(); ?>

<div class="uk-container uk-container-center blog">
  <div class="uk-grid uk-margin-large-top uk-margin-large-bottom">
    <div class="uk-width-small-1-1 uk-width-medium-7-10">
      
      <h1 class="page-title">
        <?php wp_title('')?>
      </h1>
      
      <!-- Start the Loop. -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <!-- Single Article START -->
      <article class="post">
        <div class="uk-grid">

          <!-- Article Images START -->
          <div class="image-container uk-width-small-1-1 uk-width-medium-1-3">
            <?php if ( has_post_thumbnail() ) : ?>

            <!-- Responsive Blog Images: Two different sizes. See system > media.php for custom image sizes. -->
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <img class="uk-visible-small" alt="<?php the_title_attribute(); ?>" src="<?php the_post_thumbnail_url('blog-large'); ?>"/>
              <img class="uk-hidden-small" alt="<?php the_title_attribute(); ?>" src="<?php the_post_thumbnail_url('blog-small'); ?>"/>
            </a>

            <?php else : ?>

            <!-- Custom theme option for an universal intro image, when the single article has no image. -->
            <?php
              $blog = read_option('option-blog');
              $blogsmall_url = wp_get_attachment_image_src( $blog , 'thumbnail' );
              $blogsmall = $blogsmall_url[0];
              $bloglarge_url = wp_get_attachment_image_src( $blog , 'large' );
              $bloglarge = $bloglarge_url[0];
            ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <img class="uk-visible-small" alt="<?php the_title_attribute(); ?>" src="<?php echo $bloglarge; ?>"/>
                <img class="uk-hidden-small" alt="<?php the_title_attribute(); ?>" src="<?php echo $blogsmall; ?>"/>
            </a>
              <?php endif; ?>
          </div>
          <!-- Article Images END -->

          <!-- Article Content START -->
          <div class="article-content uk-width-small-1-1 uk-width-medium-2-3">

            <!-- Article Title START-->
            <h3 class="article-title">
              <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
              </a>
            </h3>
            <!-- Article Title END-->

            <!-- Article Meta START-->
            <div class="article-meta">
              <span class="date">
                <?php the_time('d. F Y'); ?>
              </span>
              <span class="author">
                <?php the_author_posts_link(); ?>
              </span>
              <span class="categories">
                <?php the_category( ', ' ); ?>
              </span>
            </div>
            <!-- Article Meta END -->

            <!-- Article Intro START-->
            <div class="article-intro">
              <?php the_excerpt() ?>
            </div>
            <!-- Article Intro END -->

            <!-- Article Footer START -->
            <div class="article-footer">
              <?php the_tags( '<span class="tags">',', ', '</span>' ); ?>
              <p class="read-more"><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php _e( 'Weiterlesen' ); ?></a></p>
            </div>
            <!-- Article Footer END -->

          </div>
          <!-- Article Content END -->

        </div>
      </article>
      <!-- Single Article END -->

      <!-- Stop The Loop (but note the "else:" - see next line). -->

      <?php endwhile; else : ?>

      <!-- The very first "if" tested to see if there were any Posts to -->
      <!-- display.  This "else" part tells what do if there weren't any. -->
      
      <p>
        <?php _e( 'Leider gibt es hier keine Beiträge.' ); ?>
      </p>


      <!-- REALLY stop The Loop. -->
      <?php endif; ?>

      <!-- Post Pagination START -->
      <?php
         the_posts_pagination( array(
           'mid_size'  => 2,
           'prev_text' => __( '' ),
           'next_text' => __( '' ),
           'type' => 'list',
           ) );
       ?>
        <!-- Post Pagination END -->
    </div>


    <!-- Sidebar START -->
    <div class="uk-width-small-1-1 uk-width-medium-3-10 sidebar-wrapper">
      <div class="sidebar">
        
        <!-- Sidebar-Item START -->
        <div class="sidebar-item search">
          <?php get_search_form(); ?>
        </div>
        <!-- Sidebar-Item END -->

        <!-- Sidebar-Item START -->
        <div class="sidebar-item categories">
          <p class="uk-h6"><?php _e( 'Kategorien' ); ?></p>
          <?php wp_list_categories( array(
            'title_li' => '',
            'show_count' => 1,
          ) ); ?>
        </div>
        <!-- Sidebar-Item END -->

        <!-- Sidebar-Item START -->
        <div class="sidebar-item tags">
          <p class="uk-h6"><?php _e( 'Tags' ); ?></p>
          <?php $tags = get_tags();
            foreach ( $tags as $tag ) {
                $tag_link = get_tag_link( $tag->term_id );
                $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                $html .= "{$tag->name}</a>";
            }
            echo $html; ?>
        </div>
        <!-- Sidebar-Item END -->

      </div>
    </div>
    <!-- Sidebar END -->
  </div>
</div>
<?php get_footer(); ?>
