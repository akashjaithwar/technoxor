<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package MoreNews
 */

get_header(); ?>
    <div class="section-block-upper">
    <section id="primary" class="content-area">
        <main id="main" class="site-main">

			<?php
			if ( have_posts() ) : ?>

                <header class="header-title-wrapper">
                    <h1 class="page-title"><?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'morenews' ), '<span>' . get_search_query() . '</span>' );
						?></h1>
                </header><!-- .header-title-wrapper -->


				<?php
                $count = 1;
                $set_full_first = morenews_get_option('archive_layout_first_post_full');
                //div wrap start
				do_action( 'morenews_archive_layout_before_loop' );
				while ( have_posts() ) : the_post();
                    if (($count == 1) && ($set_full_first == true)) : ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class('aft-first-post-full latest-posts-full col-1 float-l pad'); ?> >
                            <?php morenews_get_block('full', 'archive'); ?>
                        </article>
                    <?php

                    else:
                        /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */

                        get_template_part('template-parts/content', get_post_format());
                    endif;


                    $count++;
				endwhile;
				//div wrap end
				do_action( 'morenews_archive_layout_after_loop' );
				?>

			<?php
			else : ?>
				<?php

				get_template_part( 'template-parts/content', 'none' ); ?>
			<?php

			endif; ?>
            <div class="col col-ten">
                <div class="morenews-pagination">
                    <?php morenews_numeric_pagination(); ?>
                </div>
            </div>
        </main><!-- #main -->

    </section><!-- #primary -->

<?php
get_sidebar();
?>
    </div>
<?php
get_footer();
