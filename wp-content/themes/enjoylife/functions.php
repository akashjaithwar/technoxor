<?php
/**
 * enjoylife functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package enjoylife
 */

if ( ! function_exists( 'enjoylife_setup' ) ) :

function enjoylife_setup() {

	load_theme_textdomain( 'enjoylife', get_template_directory() . '/languages' );

	add_theme_support( "wp-block-styles" );
	add_theme_support( "responsive-embeds" );
	add_theme_support( "align-wide" );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Add theme support for Custom Logo.
	// Custom logo.
	$logo_width  = 300;
	$logo_height = 60;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	$args = array(
		'height'      => $logo_height,
		'width'       => $logo_width,
		'flex-height' => true,
		'flex-width'  => true,
	);

	add_theme_support('custom-logo', $args);

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'   => esc_html__( 'Primary Menu', 'enjoylife' ),
		'secondary' => esc_html__( 'Secondary Menu', 'enjoylife' ),		
		'footer'    => esc_html__( 'Footer Menu', 'enjoylife' ),	
		'mobile'    => esc_html__( 'Mobile Menu', 'enjoylife' ),					
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'enjoylife_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	$editor_stylesheet_path = './assets/css/editor-style.css';

	// Enqueue editor styles.
	add_editor_style( $editor_stylesheet_path );  
}
endif;
add_action( 'after_setup_theme', 'enjoylife_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function enjoylife_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'enjoylife_content_width', 760 );
}
add_action( 'after_setup_theme', 'enjoylife_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function enjoylife_sidebar_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'enjoylife' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'enjoylife' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Columns', 'enjoylife' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'enjoylife' ),
		'before_widget' => '<div id="%1$s" class="widget footer-column ht_grid_1_4 ht_grid_mo_1_1 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Ad', 'enjoylife' ),
		'id'            => 'header-ad',
		'description'   => esc_html__( 'Add the "Image" and "Custom HTML" widget here.', 'enjoylife' ),
		'before_widget' => '<div id="%1$s" class="header-ad %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Featured Slider Ad', 'enjoylife' ),
		'id'            => 'featured-ad',
		'description'   => esc_html__( 'Add Image / Custom HTML widgets here.', 'enjoylife' ),
		'before_widget' => '<div id="%1$s" class="widget custom-ad featured-ad %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Archive Ad 1', 'enjoylife' ),
		'id'            => 'archive-ad-1',
		'description'   => esc_html__( 'Add Image / Custom HTML widgets here.', 'enjoylife' ),
		'before_widget' => '<div id="%1$s" class="widget custom-ad archive-ad hentry %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Archive Ad 2', 'enjoylife' ),
		'id'            => 'archive-ad-2',
		'description'   => esc_html__( 'Add Image / Custom HTML widgets here.', 'enjoylife' ),
		'before_widget' => '<div id="%1$s" class="custom-ad post-ad archive-ad hentry %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Post Top Ad', 'enjoylife' ),
		'id'            => 'post-top-ad',
		'description'   => esc_html__( 'Add Image / Custom HTML widgets here.', 'enjoylife' ),
		'before_widget' => '<div id="%1$s" class="custom-ad post-ad post-top-ad %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Post Bottom Ad', 'enjoylife' ),
		'id'            => 'post-bottom-ad',
		'description'   => esc_html__( 'Add Image / Custom HTML widgets here.', 'enjoylife' ),
		'before_widget' => '<div id="%1$s" class="custom-ad post-ad post-bottom-ad %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );		

}
add_action( 'widgets_init', 'enjoylife_sidebar_init' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load about page.
 */
require get_template_directory() . '/inc/about.php';

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

/**
 * SVG Icons.
 */
require get_template_directory() . '/inc/classes/class-enjoylife-svg-icons.php';

/**
 * Menu Walker.
 */
require get_template_directory() . '/inc/classes/class-enjoylife-walker-page.php';

/**
 * Enqueues scripts and styles.
 */
function enjoylife_scripts() {

    // load jquery if it isn't
    wp_enqueue_script('jquery');

	//  Enqueues Javascripts
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/assets/js/superfish.js', array(), '', true );
	wp_enqueue_script( 'html5', get_template_directory_uri() . '/assets/js/html5.js', array(), '', true );

	wp_enqueue_script( 'enjoylife-bxslider', get_template_directory_uri() . '/assets/js/jquery.bxslider.js', array(), '', true ); 
	wp_enqueue_script( 'enjoylife-sticky-sidebar', get_template_directory_uri() . '/assets/js/theia-sticky-sidebar.js', array(), '', true );	
    wp_enqueue_script( 'enjoylife-index', get_template_directory_uri() . '/assets/js/index.js', array(), '20210601', true );                                       	  
	wp_enqueue_script( 'enjoylife-custom', get_template_directory_uri() . '/assets/js/jquery.custom.js', array(), '20210601', true );

    // Enqueues CSS styles
    wp_enqueue_style( 'enjoylife-googlefonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), null );
    wp_enqueue_style( 'enjoylife-style', get_stylesheet_uri(), array(), '20210617' );
    wp_enqueue_style( 'genericons-style',   get_template_directory_uri() . '/genericons/genericons.css' );
    wp_enqueue_style( 'enjoylife-responsive-style',   get_template_directory_uri() . '/responsive.css', array(), '20210617' ); 
	
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }    
}
add_action( 'wp_enqueue_scripts', 'enjoylife_scripts' );

/**
 * Post Thumbnails.
 */
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 300, 300, true ); // default Post Thumbnail dimensions (cropped)
    add_image_size( 'enjoylife_featured_thumb', 740, 360, true );      
}

/**
 * Registers custom widgets.
 */
function enjoylife_widgets_init() {

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-popular.php';
	register_widget( 'EnjoyLife_Most_Commented_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-recent.php';
	register_widget( 'EnjoyLife_Recent_Widget' );
}
add_action( 'widgets_init', 'enjoylife_widgets_init' );

// Disable WordPress 5.5+ Lazy Load
add_filter( 'wp_lazy_loading_enabled', '__return_false' );