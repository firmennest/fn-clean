<?php get_header() ?>

<div class="uk-width-1-1">
  <div class="uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom fn-content error">

    <h1><?php _e( 'Hier wurde nichts gefunden.' ); ?></h1>
    <p><?php _e( 'Gründe dafür könnten sein, dass Sie eine falsche oder veraltete URL aufgerufen haben.<br> 
    Unter Umständen wurde die betreffende Seite auch verschoben oder gelöscht.' ); ?></p>

    <p><?php _e( 'Sie können auch gern unsere Suche benutzen:' ); ?></p>
    <?php get_search_form(); ?>

  </div>
</div>

<?php get_footer() ?>