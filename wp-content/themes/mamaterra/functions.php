<?php
/**
 * mamaterra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mamaterra
 */

if ( ! function_exists( 'mamaterra_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mamaterra_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mamaterra, use a find and replace
		 * to change 'mamaterra' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mamaterra', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'main' => esc_html__( 'Primary', 'mamaterra' ),
			'social' => esc_html__( 'Social Media', 'mamaterra' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mamaterra_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mamaterra_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mamaterra' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mamaterra' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mamaterra_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mamaterra_scripts() {
	
	/* STYLES */
	wp_enqueue_style( 'styles', get_stylesheet_uri() );
	wp_enqueue_style( 'flexboxgrid', get_template_directory_uri() . '/styles/css/flexboxgrid.css' );
	wp_enqueue_style( 'mamaterra-styles', get_template_directory_uri() . '/styles/css/main.css' );
	
	/* FONT AWESOME 5 */
	wp_enqueue_script( 'font-awesome-brands', get_template_directory_uri() . '/js/fontawesome/packs/brands.min.js', array(), '20151215', false );
	wp_enqueue_script( 'font-awesome-light', get_template_directory_uri() . '/js/fontawesome/packs/light.min.js', array(), '20151215', false );
	wp_enqueue_script( 'font-awesome-regular', get_template_directory_uri() . '/js/fontawesome/packs/regular.min.js', array(), '20151215', false );
	wp_enqueue_script( 'font-awesome-solid', get_template_directory_uri() . '/js/fontawesome/packs/solid.min.js', array(), '20151215', false );
	wp_enqueue_script( 'font-awesome-shims', get_template_directory_uri() . '/js/fontawesome/v4-shims.min.js', array(), '20151215', false );
	wp_enqueue_script( 'font-awesome', get_template_directory_uri() . '/js/fontawesome/fontawesome.min.js', array(), '20151215', false );

	
	/* SCRIPTS */
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/styles/js/min/main.min.js', array(), '20151215', false );
	
	/* GOOGLE MAPS */
	wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB56qVlkV7sZU7VfDls6ZBmX8OX9kadiPs', array(), '20151215', false );

}
add_action( 'wp_enqueue_scripts', 'mamaterra_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Add custom toolbar items.
 */
add_action('admin_bar_menu', 'add_toolbar_items', 100);
function add_toolbar_items($admin_bar){
    $admin_bar->add_menu( array(
        'id'    => 'styleguide',
        'title' => 'Styleguide',
        'href'  => get_template_directory_uri() . '/styles/style-guide/',
        'meta'  => array(
            'title' => __('Style'),            
        ),
    ));
}

/**
 * Add ACF Options section.
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
	
}
/**
 * Add variable favicons
 */
function hook_fav() {
    ?>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
    <?php
}
add_action('wp_head', 'hook_fav');


function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyB56qVlkV7sZU7VfDls6ZBmX8OX9kadiPs');
}

add_action('acf/init', 'my_acf_init');

