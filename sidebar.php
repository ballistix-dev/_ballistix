<?php
/**
* Sidebar Template
*
* @package _ballistix
*/ ?>

<?php if ( is_active_sidebar( 'widget-sidebar' ) ) : ?>

	<aside id="content-sidebar" role="complementary">

        <?php dynamic_sidebar( 'widget-sidebar' ); ?>

	</aside>
	
<?php endif; ?>	