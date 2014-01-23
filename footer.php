<?php
/**
 *  Footer template
 *
 * @package Draft
 * @since 1.0
 */
?>

			</div><!--.wrap-->
		</div><!--#main-->

		<?php tha_footer_before(); ?>
			<div id="footer" class="site-footer" role="contentinfo">
				<div class="wrap">
					<?php tha_footer_top(); ?>

					<?php echo apply_filters( 'site_credits', '<p class="site-credits">&copy;  <a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo('name') . '</a></p>' ); ?>

					<?php tha_footer_bottom(); ?>
				</div><!--.wrap-->
			</div><!--#footer-->
		<?php tha_footer_after(); ?>

	</div><!--#page-->

	<?php wp_footer(); ?>

</body>
</html>