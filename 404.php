<?php

get_header();

?><main>
  <div class="fn-content error uk-background-primary uk-padding-large uk-text-center uk-light">
    <div class="uk-container">
      <div class="uk-flex uk-flex-middle" uk-height-viewport="expand: true">
        <div class="uk-width-1-1">
          <div class="uk-h1" style="font-size: 72px;">404</div>
          <?php echo the_field('fn_404_content', 'option'); ?>
          <a class="uk-button uk-button-primary uk-margin-large-top" href="<?php echo home_url(); ?>"><?php _e('Zur Startseite'); ?></a>
        </div>
      </div>
    </div>
  </div>
</main><?php

get_footer();

?>
