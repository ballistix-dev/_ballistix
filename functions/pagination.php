<?php
/**
 * Adds Pagination Function
 *
 * @package _ballistix 1.0.0
 */
if ( ! function_exists( '_ballistix_pagination' ) ) :

	function _ballistix_pagination( $query=null ) {

		global $wp_query;
		$query = $query ? $query : $wp_query;
		$big = 999999999;

		$paginate = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'type' => 'array',
			'total' => $query->max_num_pages,
			'format' => '?paged=%#%',
			'mid_size' => 20,
			'current' => max( 1, get_query_var('paged') ),
			'prev_text' => __('&laquo;'),
			'next_text' => __('&raquo;'),
		));

		if ($query->max_num_pages > 1) :
			echo '<ul class="pagination">';
				foreach ( $paginate as $page ) {
					echo '<li>' . $page . '</li>';
				}
			echo '</ul>';
		endif;
	}

endif; //_ballistix_pagination
