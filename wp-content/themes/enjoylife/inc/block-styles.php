<?php
/**
 * Block Styles
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 */
	function enjoylife_register_block_styles() {
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'enjoylife-border',
				'label' => esc_html__( 'Borders', 'enjoylife' ),
			)
		);
	}
	add_action( 'init', 'enjoylife_register_block_styles' );
}
