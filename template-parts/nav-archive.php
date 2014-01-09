<?php
/**
 *  Archive navigation template part
 *
 * @package Draft
 * @since 1.0
 */

$previous_posts_link = get_previous_posts_link();
$next_posts_link = get_next_posts_link();

if( !empty( $previous_posts_link ) || !empty( $next_posts_link ) ) {
	echo '<div class="archive-navigation">';
	if( !empty( $previous_posts_link ) ) {
		echo '<span class="previous-posts">';
		previous_posts_link( 'Previous' );
		echo '</span>';
	}

	if( !empty( $next_posts_link ) ) {
		echo '<span class="next-posts">';
		next_posts_link( 'Next' );
		echo '</span>';
	}
	echo '</div>';
}
