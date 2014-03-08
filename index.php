<?php
/**
 *  Index template
 *
 * @package Solum
 * @since 1.0
 */
?>

<?php get_header(); ?>

<div id="primary">
	<?php tha_content_before(); ?>

	<div id="content" role="main">
		<?php tha_content_top(); ?>

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h2>
					
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!--.entry-content-->
				</div>

			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/404' ); ?>
		<?php endif; ?>

		<?php get_template_part( 'template-parts/nav', 'archive' ); ?>

		<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	
	<?php tha_content_after(); ?>
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>