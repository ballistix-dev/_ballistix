<?php
/**
* Single Template
*
* @package _ballistix
*/ ?>

<?php get_header(); ?>

<section id="content-main" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php

      _ballistix_breadcrumbs();

      get_template_part( 'template/entry' ); ?>

    <?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>
