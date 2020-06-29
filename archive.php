<?php
/**
* Archive Template
*
* @package _ballistix
*/ ?>

<?php get_header(); ?>

<section id="content-main" role="main">

    <header class="post-header">

        <h1 class="post-title">

        <?php

            if ( is_day() ) {

                printf( __( 'Daily Archives: %s', '_ballistix' ), get_the_time( get_option( 'date_format' ) ) );

            } elseif ( is_month() ) {

                printf( __( 'Monthly Archives: %s', '_ballistix' ), get_the_time( 'F Y' ) );

            } elseif ( is_year() ) {

                printf( __( 'Yearly Archives: %s', '_ballistix' ), get_the_time( 'Y' ) );

            } else {

                _e( 'Archives', '_ballistix' );

            }

        ?>

        </h1>

    </header>

    <div class="post-loop">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template/entry' ); ?>

      <?php endwhile; endif; ?>

    </div>

    <?php _ballistix_pagination(); ?>

</section>

<?php get_footer(); ?>
