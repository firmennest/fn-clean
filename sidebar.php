<div id="sidebar">
  <h3>Kategorien</h3>
  <ul class="uk-list uk-list-divider"><?php
    wp_list_categories(array(
      'title_li' => '',
      'show_count' => true,
    )); ?>
  </ul>
  <h3>Archiv</h3>
  <ul class="uk-list uk-list-divider"><?php
    wp_get_archives(array(
      'show_post_count' => true,
    ));
  ?></ul>
</div>
