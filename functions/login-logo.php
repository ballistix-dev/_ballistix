<?php

function my_login_logo() { ?>
    <style type="text/css">

        .login h1 a {
            background-image: url(<?php echo wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ); ?>)!important;
            padding-bottom: 30px!important;;
            margin: 0!important;;
            background-size: contain!important;;
            width: 100%!important;;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
