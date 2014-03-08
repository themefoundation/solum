<?php
/**
 * Functions
 *
 * This file contains functions to extend the functionality of the
 * Solum theme
 *
 * @package Solum
 * @version 1.0
 */

/**
 * Runs initialization routine
 *
 * @since			1.0
 */
function prfx_init() {

	// Includes the theme hooks from the Theme Hook Alliance.
	include_once( 'includes/tha-theme-hooks.php' );

	// Sets content width.
	if ( ! isset( $content_width ) ) $content_width = 900;

	// Adds automatic feed link support.
	add_theme_support( 'automatic-feed-links' );

	// Loads stylesheet for the post editor.
	add_editor_style( 'css/editor-style.css' );

}
add_action( 'init', 'prfx_init' );

/**
 * Ensures that the title tag will never be empty
 *
 * @since			1.0
 */
function prfx_expand_title( $title ) {
	if( empty( $title ) ) {
		return get_bloginfo('name') . ' - ' . get_bloginfo( 'description' );
	} else {
		return $title;
	}
}
add_filter( 'wp_title', 'prfx_expand_title' );

/**
 * Loads the default style.css file
 *
 * @since			1.0
 */
function prfx_enqueue() {
	wp_enqueue_style( 'prfx_stylesheet', get_stylesheet_uri() );

	if ( is_singular() && comments_open() ) {
		wp_enqueue_script( 'prfx_comment_reply', 'comment-reply' );
	}

}
add_filter( 'wp_enqueue_scripts', 'prfx_enqueue' );


/**
 * Registers sidebars
 *
 * @since			1.0
 */
function prfx_register_sidebars() {

	// Registers the sidebar widget area.
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'temp_textdomain' ),
			'id' => 'sidebar-1',
			'description' => __( 'This is the main sidebar.', 'temp_textdomain' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	// Registers the sidebar widget area.
	register_sidebar(
		array(
			'name' => __( 'Additional Sidebar', 'temp_textdomain' ),
			'id' => 'sidebar-2',
			'description' => __( 'This is the secondary sidebar.', 'temp_textdomain' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

}
add_action( 'widgets_init', 'prfx_register_sidebars' );
