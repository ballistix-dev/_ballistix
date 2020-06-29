<?php
/**
* Template Name: Sidebar
*
* @package _ballistix
*/ ?>

<?php get_header(); ?>

<div class="has-sidebar">

	<section id="content-main" role="main">

	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	    <?php get_template_part('template/entry'); ?>

	    <?php endwhile; endif; ?>

	</section>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
