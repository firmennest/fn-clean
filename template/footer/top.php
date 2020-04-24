<?php

if ( is_active_sidebar( 'fn-footer-top' ) ) :
	?><div class="fn-footer-top"><?php
		dynamic_sidebar( 'fn-footer-top' );
	?></div><?php
endif;

?><footer>
