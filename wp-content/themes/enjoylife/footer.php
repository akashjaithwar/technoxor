<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enjoylife
 */

?>
	</div><!-- #content .site-content -->
	
	<footer id="colophon" class="site-footer">

		<div class="container">

		<?php if ( is_active_sidebar( 'footer' ) ) { ?>

			<div class="footer-columns clear">

				<?php dynamic_sidebar( 'footer' ); ?>										

			</div><!-- .footer-columns -->

		</div><!-- .container -->

		<?php } ?>

		<div class="clear"></div>

		<div id="site-bottom" class="container clear">
				
			<?php 
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu', 'menu_class' => 'footer-nav' ) );
				}
			?>	

			<div class="site-info">
				<?php
					$enjoylife_theme = wp_get_theme();
				?>

				&copy; <?php echo esc_html( date("o") ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_html( get_bloginfo('name') ); ?></a> - <?php esc_html_e('Theme by', 'enjoylife'); ?> <a href="<?php echo esc_url( $enjoylife_theme->get( 'AuthorURI' ) ); ?>"><?php esc_html_e('WPEnjoy', 'enjoylife'); ?></a> &middot; <?php esc_html_e('Powered by', 'enjoylife'); ?> <a href="<?php echo esc_url( __( 'https://wordpress.org', 'enjoylife' ) ); ?>" rel="nofollow"><?php esc_html_e('WordPress', 'enjoylife'); ?></a>

			</div><!-- .site-info -->
				
		</div><!-- #site-bottom -->
							
	</footer><!-- #colophon -->

</div><!-- #page -->

<div id="back-top">
	<a href="#top" title="<?php echo esc_html('Back to top', 'enjoylife'); ?>"><span class="genericon genericon-collapse"></span></a>
</div>

<?php wp_footer(); ?>

</body>
</html>
