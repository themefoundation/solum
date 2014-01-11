<?php
/**
 *  Sidebar template
 *
 * @package Draft
 * @since 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

	<?php tha_sidebars_before(); ?>
	<div id="secondary" class="sidebar" role="complementary">
		<?php tha_sidebar_top(); ?>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>

		<?php tha_sidebar_bottom(); ?>
	</div><!-- #sidebar-->
	<?php tha_sidebars_after(); ?>

<?php } ?>

<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>

	<?php tha_sidebars_before(); ?>
	<div id="tertiary" class="sidebar" role="complementary">
		<?php tha_sidebar_top(); ?>

		<?php dynamic_sidebar( 'sidebar-2' ); ?>

		<?php tha_sidebar_bottom(); ?>
	</div><!-- #sidebar-->
	<?php tha_sidebars_after(); ?>

<?php }
