<?php
/**
 * Template Name: Sidebar Left Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WalkerMag
 */

get_header();
?>

<div class="walkermag-wraper inner-page-wraper">
	<div class="walkermag-container">
		<div class="walkermag-grid-3 sidebar-block global-sidebar"><?php get_sidebar();?></div>
		<main id="primary" class="site-main walkermag-grid-9 sidebar-left-page">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->


	</div>
</div>
<?php 
get_footer();