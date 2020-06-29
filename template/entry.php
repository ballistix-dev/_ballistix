<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php
		
		if (is_archive() || is_search() || is_home()) {
			echo '<a class="thumbnail" href="' . get_the_permalink() .'" title="' . the_title_attribute(array( 'before' => 'Permalink to: ', 'after' => '', 'echo' => false )) .'" rel="bookmark">';
	    	if ( has_post_thumbnail() ) { the_post_thumbnail('large'); }
	    echo '</a>';
		};
	?>
	<header class="post-header">

	<?php
	if ( is_singular() ) {
		
		echo '<h1 class="post-title">' . get_the_title() . '</h1>';
		
	} else {
	  echo '<h4 class="post-title"><a href="' . get_the_permalink() .'" title="' . the_title_attribute(array( 'before' => 'Permalink to: ', 'after' => '', 'echo' => false )) .'" rel="bookmark">' . get_the_title() . '</a></h4>';
	  ?>
	
	  <div class="post-meta">
	
	    <span class="cat-links"><?php _e( 'Categories: ', '_ballistix' ); ?><?php the_category( ', ' ); ?></span>
	
	    <span class="tag-links"><?php the_tags(); ?></span>
	
	  </div>
	
	<?php } ?>
	
	</header>

	<?php get_template_part( 'template/entry', ( is_archive() || is_search() || is_home() ? 'summary' : 'content' ) ); ?>

</article>
