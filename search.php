<?php
/**
* Search Template
*
* @package _ballistix
*/ ?>

<?php get_header(); ?>

<section id="content-main" role="main">

    <?php if ( have_posts() ) : ?>

        <header class="post-header">

            <h2 class="post-title">

                <?php printf( __( 'Search Results for: %s', '_ballistix' ), get_search_query() ); ?>

            </h2>

        </header>

        <div class="post-loop">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php get_template_part( 'template/entry' ); ?>

          <?php endwhile; endif; ?>

        </div>

        <?php _ballistix_pagination(); ?>

        <div class="clearfix">&nbsp;</div>

    <?php else : ?>

    <article id="post-0" class="post no-results not-found">

        <header class="post-header">

            <h2 class="post-title">

                <?php _e( 'Nothing Found', '_ballistix' ); ?>

            </h2>

        </header>

        <section class="post-content">

            <p><?php _e( 'Sorry, nothing matched your search. Please try again.', '_ballistix' ); ?></p>

            <?php get_search_form(); ?>

        </section>

    </article>

    <?php endif; ?>

</section>

<?php get_footer(); ?>
