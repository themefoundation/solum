<?php
/**
 *  Single post/page navigation template part
 *
 * @package Draft
 * @since 1.0
 */

$args = array(
	'before' => '<div class="single-navigation">',
	'after' => '</div>'
);

wp_link_pages( $args );
