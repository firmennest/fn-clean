<?php

$logo = read_option('option-logo');
$imageAttachment = wp_get_attachment_image_src( $logo , '' );
$imageSrc = $imageAttachment[0];

?>

<div class="uk-width-1-1" id="header-wrapper">

    <div class="uk-container uk-container-center uk-margin-small-top uk-margin-small-bottom">

        <header class="header-content">

            <div class="uk-grid">

                <div class="uk-width-small-1-2 uk-width-medium-1-4">
                    <a class="logo" href="<?php bloginfo('url'); ?>">
                        <img src="<?php echo $imageSrc; ?>" alt="">
                    </a>
                </div>

                <div class="uk-width-small-1-2 uk-width-medium-3-4 uk-text-right">
                    <nav class="main-nav-wrapper">
                        <ul class="uk-list main-menu uk-margin-bottom-remove uk-hidden-small">
                            <?php wp_nav_menu( array('theme_location' => 'main', 'container' => false , 'items_wrap' => '%3$s', )); ?>
                        </ul>
                        <ul class="uk-list main-menu uk-margin-bottom-remove uk-visible-small">
                            <li>
                               <a href="#menu" id="offcanvaslink" data-uk-offcanvas><i class="uk-icon-bars"></i> Menü</a>
                           </li>
                        </ul>
                    </nav>
                </div>

            </div>

        </header>

    </div>

    <?php // Offcanvas Menu ?>

        <div id="menu" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <nav>
                    <ul class="uk-list main-menu-mobile">
                        <?php wp_nav_menu( array('theme_location' => 'main', 'container' => false , 'items_wrap' => '%3$s', )); ?>
                    </ul>
                </nav>
            </div>
        </div>

</div>
