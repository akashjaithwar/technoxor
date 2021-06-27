<?php		
	if (!get_query_var('paged')) {	
?>

<?php		
	$args = array( 
	    'posts_per_page' => 3,
	    'ignore_sticky_posts' => 1,
		'meta_query' => array(
	        array(
	        	'key' => 'enjoylife-featured',
	            'value' => 'yes'
	        )
	    )
	);  

	$featured_posts = new WP_Query($args);
	if ( $featured_posts->have_posts() ) {	
?>

	<div id="featured-content">
		<ul class="bxslider">

		<?php
			// The Loop
			while ( $featured_posts->have_posts() ) : $featured_posts->the_post();
		?>	

		<li class="featured-slide hentry">

			<a class="thumbnail-link" href="<?php the_permalink(); ?>">
				
				<div class="thumbnail-wrap">
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('enjoylife_featured_thumb');  
					} else {
						echo '<img src="' . esc_url( get_template_directory_uri() ). '/assets/img/no-featured.png" alt="" />';
					}
					?>
				</div><!-- .thumbnail-wrap -->
				<div class="gradient">
				</div>
			</a>

			<div class="entry-header clear">
				<div class="entry-category">
					<?php enjoylife_first_category(); ?>
				</div>			
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</div><!-- .entry-header -->

		</li><!-- .featured-slide .hentry -->

		<?php
			endwhile;
		?>

		</ul><!-- .bxslider -->
	</div><!-- #featured-content -->

<?php
	}
	wp_reset_postdata();			
?>

<?php		
	$args = array( 
	    'posts_per_page' => 6,
	    'ignore_sticky_posts' => 1,
	    'offset' => '3',
		'meta_query' => array(
                array(
                'key' => 'enjoylife-featured',
                'value' => 'yes'
        )
    )
	);  
	
	$featured_posts = new WP_Query($args);
	if ( $featured_posts->have_posts() ) {	
?>

	<div id="featured-grid" class="clear">

	<?php
		// The Loop
		while ( $featured_posts->have_posts() ) : $featured_posts->the_post();
	?>	

	<div <?php post_class('ht_grid_1_2'); ?>>

		<a class="thumbnail-link" href="<?php the_permalink(); ?>">
			
			<div class="thumbnail-wrap">
				<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();  
				} else {
					echo '<img src="' . esc_url( get_template_directory_uri() ). '/assets/img/no-featured.png" alt="" />';
				}
				?>
			</div><!-- .thumbnail-wrap -->
		</a>

		<div class="entry-header <?php if ( has_post_thumbnail() ) { echo 'has-thumb'; } else { echo 'no-thumb'; } ?>">
			<div class="entry-category">
				<?php enjoylife_first_category(); ?>
			</div>			
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</div><!-- .entry-header -->

	</div><!-- .hentry -->

	<?php
		endwhile;
	?>

	</div><!-- #featured-grid -->

<?php
	}
	wp_reset_postdata();	

	// Featured Ad
	dynamic_sidebar('featured-ad');		
?>

<?php } // End if not paged ?>			