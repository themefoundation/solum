<?php
/**
 *  Header template
 *
 * @package Draft
 * @since 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php tha_head_top(); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title(); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php tha_header_before(); ?>

	<div id="header" class="site-header">
		<div class="wrap">
			<?php tha_header_top(); ?>

			<div id="branding" role="banner">
				<?php echo apply_filters( 'site_name', '<p class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo('name') . '</a></p>' ); ?>
				<?php echo apply_filters( 'site_description', '<p class="site-description">' . get_bloginfo( 'description' ) . '</p>' ); ?>
			</div><!--#branding-->

			<?php tha_header_bottom(); ?>
		</div><!--.wrap-->
	</div><!--#header-->
	<?php tha_header_after(); ?>

	<div id="main">
		<div class="wrap">
