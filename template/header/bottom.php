<?php if ( is_active_sidebar( 'fn-header-bottom' ) ) : ?>
	<div id="fn-header-bottom">
		<?php dynamic_sidebar( 'fn-header-bottom' ); ?>
	</div>
<?php endif; ?>

<?php if ( has_post_thumbnail() ) { ?>
  <div class="intro-image uk-margin-large-bottom" style="background-image: url('<?php echo the_post_thumbnail_url('intro'); ?>'); background-size: cover; background-position: center;"></div>
<?php } ?>
