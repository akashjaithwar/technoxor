<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package enjoylife
 */

get_header(); ?>

	<div id="primary" class="content-area clear">

		<div class="breadcrumbs clear">
			<span class="breadcrumbs-nav">
				<a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('Home', 'enjoylife'); ?></a>
				<span class="post-category"><?php echo wp_kses_post( get_the_archive_title('') ); ?></span>
			</span>				
			<h1>
				<?php echo wp_kses_post( get_the_archive_title('') ); ?>					
			</h1>	
		</div><!-- .breadcrumbs -->
				
		<main id="main" class="site-main clear">

			<div id="recent-content" class="content-loop">

				<?php

				if ( have_posts() ) :	
				
				$i = 1;		
					
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part('template-parts/content', 'loop');

					if ( $i == 2 ) {
						dynamic_sidebar('archive-ad-1');
					}

					if ( $i == 8 ) {
						dynamic_sidebar('archive-ad-2');
					}

					$i++;

				endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; 

				?>

			</div><!-- #recent-content -->

		</main><!-- .site-main -->

		<?php get_template_part( 'template-parts/pagination', '' ); ?>

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

