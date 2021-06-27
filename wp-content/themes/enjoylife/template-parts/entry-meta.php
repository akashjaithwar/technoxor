<div class="entry-meta clear">

	<span class="entry-author"><?php the_author_posts_link(); ?> &#8212; </span> 
	<span class="entry-date"><?php echo get_the_date(); ?></span>
	<span class="entry-category"> <?php esc_html_e('in', 'enjoylife'); ?> <?php enjoylife_first_category(); ?></span>

	<?php
	if ( is_single() ) : 
		echo "<span class='sep'>&bull;</span> <span class='entry-comment'>";
		comments_popup_link( __('0 Comment','enjoylife'), __('1 Comment', 'enjoylife'), '% Comments', 'comments-link', __('Comments off', 'enjoylife'));
	endif;
	?>

</div><!-- .entry-meta -->