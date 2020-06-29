<?php
/**
* Template Name: No Title
*
* @package _ballistix
*/ ?>

<?php get_header(); ?>

<div class="no-title">

  <section id="content-main" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php get_template_part( 'template/entry', 'content' ); ?>

      </article>

    <?php endwhile; endif; ?>

  </section>

</div>

<?php get_footer(); ?>
