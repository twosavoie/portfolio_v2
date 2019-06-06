<?php
/**
 * The template for displaying the footer in the child theme
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<p><?php bloginfo('description'); ?></p>
					<p>&copy; <?php bloginfo('title'); ?>, LLC</p>
					<p>Thanks to Domenico Loia for the beautiful photograph found on Unsplash!<br><a href="https://unsplash.com/@domenicoloia/portfolio"<span>Domenico's Instagram</span></p>
				</div>

				<nav class="social-media-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'menu_class' => 'social-media-menu' ) ); ?>
				</nav>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
