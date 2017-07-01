<?php get_header(); ?>

<div class="uk-container uk-container-center blog single-post">
  <div class="uk-grid uk-margin-large-top uk-margin-large-bottom">
    <div class="uk-width-small-1-1 uk-width-medium-7-10">

      <!-- Single Article START -->
      <article class="post">

        <?php 
       if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
            //
            ?>

        <div class="article-content">
          <!-- Article Title START-->
          <h1 class="article-title lila">
            <?php the_title(); ?>
          </h1>
          <!-- Article Title END-->

          <!-- Article Meta START-->
          <div class="article-meta">
            <span class="date"><?php the_time('d. F Y'); ?></span>
            <span class="author"><?php the_author_posts_link(); ?></span>
            <span class="categories"><?php the_category( ', ' ); ?></span>
          </div>
          <!-- Article Meta END -->

          <!-- Article Images START -->
          <div class="image-container">
            <?php if ( has_post_thumbnail() ) : ?>
              <img alt="<?php the_title_attribute(); ?>" src="<?php the_post_thumbnail_url('blog-large'); ?>"/>
            <?php else : ?>
            <?php
                  $blog = read_option('option_blog');
                  $bloglarge_url = wp_get_attachment_image_src( $blog , 'blog-large' );
                  $bloglarge = $bloglarge_url[0];
                ?>
              <img alt="<?php the_title_attribute(); ?>" src="<?php echo $bloglarge; ?>"/>
              <?php endif; ?>
          </div>
          <!-- Article Images END -->

          <div class="article-text">
            <?php
              the_content();
            ?>
          </div>
          
          <div class="article-footer">
            <?php the_tags( '<span class="tags">',', ', '</span>' ); ?>
          </div>

        </div>
        <?php
            //
        } // end while
       } // end if
      ?>
      </article>
      <!-- Single Article END -->

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
          <p class="uk-h6">Kategorien</p>
          <?php wp_list_categories( array(
            'title_li' => '',
            'show_count' => 1,
          ) ); ?>
        </div>
        <!-- Sidebar-Item END -->

        <!-- Sidebar-Item START -->
        <div class="sidebar-item tags">
          <p class="uk-h6">Tags</p>
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
