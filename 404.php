<?php
/**
* 404 Template
*
* @package _ballistix
*/ ?>

<?php get_header(); ?>

<section id="content-main" role="main">

    <article id="post-0" class="post not-found">

        <header class="post-header">

        	<h1 class="post-title"><?php _e( 'Uh Oh! Page has not found.', '_ballistix' ); ?></h1>

        </header>

        <section class="post-content">

        	<p>
        		<?php _e( 'Unfortunately the content you’re looking for isn’t here. There may be a misspelling in your web address or you may have clicked a link for content that no longer exists. Perhaps you would be interested in our most recent articles.', '_ballistix' ); ?>
        	</p>

            <?php get_search_form(); ?>

        </section>

    </article>

</section>

<?php get_footer(); ?>
