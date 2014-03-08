<?php
/**
 *  Single post template
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
					<h1 class="entry-title">
						<?php the_title(); ?>
					</h1>

					<div class="entry-meta">
						<?php get_template_part( 'template-parts/entry', 'meta' ); ?>
					</div>
					
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!--.entry-content-->

					 <?php comments_template(); ?> 
				</div>

			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/404' ); ?>
		<?php endif; ?>

		<?php get_template_part( 'template-parts/nav', 'single' ); ?>

		<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	
	<?php tha_content_after(); ?>
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>