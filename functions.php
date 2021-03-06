<?php
/**
 * Digital Colby V2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Digital_Colby_V2
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'dcv2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dcv2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Digital Colby V2, use a find and replace
		 * to change 'dcv2' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dcv2', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'dcv2' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'dcv2_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'dcv2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dcv2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dcv2_content_width', 640 );
}
add_action( 'after_setup_theme', 'dcv2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dcv2_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dcv2' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dcv2' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dcv2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dcv2_scripts() {
	// STYLES 
	// fontawesome
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/assets/vendor/font-awesome-5/css/fontawesome-all.min.css', array(), _S_VERSION );

	// bootstrap
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), _S_VERSION );

	// custom theme styles
	wp_enqueue_style( 'dcv2-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dcv2-style', 'rtl', 'replace' );



	// SCRIPTS
	// bootstrap bundle w/jQuery
	wp_enqueue_script( 'dcv2-jquery-easing-js', get_template_directory_uri() . '/assets/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true );

	// custom theme scripts
	wp_enqueue_script( 'dcv2-scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), _S_VERSION, true );

	// wp core stuff
	wp_enqueue_style( 'dcv2-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dcv2-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dcv2_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}





/**
 * CUSTOM FUNCTIONS START BELOW
 * below are some optional additions to theme functionality
 * feel free to edit or delete to suit your needs
 */


/**
 * Include custom navwalker
 */
require_once get_template_directory() . '/inc/bs4navwalker.php';


/*
 * Load the theme options page.
 */
require get_template_directory() . '/inc/theme-options/theme-options.php';



/**
 * CUSTOM LOGIN SCREEN
 * overrides default WP logo, background image/color, and form styles
 */
// function dcv2_login_stylesheet() {
// 	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/assets/css/login-style.css' );
// }
// add_action( 'login_enqueue_scripts', 'dcv2_login_stylesheet' );

/**
 * CUSTOM LOGIN SCREEN LOGO LINK
 * Redirect custom login logo link to homepage
 */
// function dcv2_login_logo_url() {
//     return home_url();
// }
// add_filter( 'login_headerurl', 'dcv2_login_logo_url' );

/**
 * CUSTOM LOGIN SCREEN LOGO TITLE
 * Update custom login logo page title
 */
// function dcv2_login_logo_url_title( $title ) {
// 	return esc_attr( get_bloginfo( 'title' ) );
// }
// add_filter( 'login_headertitle', 'dcv2_login_logo_url_title' );





/**
 * FAVICONS
 * Add custom favicons to admin dashboard and front end of site
 */
function dcv2_admin_favicon() {
	$admin_favicon_url = get_stylesheet_directory_uri() . '/assets/favicons';
	echo '<link rel="shortcut icon" href="' . $admin_favicon_url . '/admin-favicon.ico" />';
}
add_action('login_head', 'dcv2_admin_favicon');
add_action('admin_head', 'dcv2_admin_favicon');

function dcv2_main_favicon() {
	$main_favicon_url = get_stylesheet_directory_uri() . '/assets/favicons';
	echo '
    <link rel="shortcut icon" href="' . $main_favicon_url . '/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="' . $main_favicon_url . '/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="' . $main_favicon_url . '/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="' . $main_favicon_url . '/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="' . $main_favicon_url . '/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="' . $main_favicon_url . '/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="' . $main_favicon_url . '/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="' . $main_favicon_url . '/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="' . $main_favicon_url . '/apple-touch-icon-152x152.png" />
	';
}
add_action('wp_head', 'dcv2_main_favicon');



