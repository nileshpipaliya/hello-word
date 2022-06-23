<?php
/**
 * dr_tan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dr_tan
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'dr_tan_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dr_tan_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dr_tan, use a find and replace
		 * to change 'dr_tan' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dr_tan', get_template_directory() . '/languages' );

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
				'Main_Menu' => esc_html__( 'Primary', 'dr_tan' ),
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
				'dr_tan_custom_background_args',
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
add_action( 'after_setup_theme', 'dr_tan_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dr_tan_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dr_tan_content_width', 640 );
}
add_action( 'after_setup_theme', 'dr_tan_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dr_tan_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dr_tan' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dr_tan' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dr_tan_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dr_tan_scripts() {
	wp_enqueue_style( 'dr_tans-style', get_stylesheet_uri().'?'.time(), array(), time() );
	wp_style_add_data( 'dr_tan-style', 'rtl', 'replace' );


	wp_enqueue_style( 'dr_tan-font', get_template_directory_uri() . '/scss/fonts/fonts.css');
	wp_enqueue_style( 'dr_tan-slick', get_template_directory_uri() . '/scss/slick.css');
	wp_enqueue_style( 'dr_tan-metismenu', get_template_directory_uri() . '/scss/metismenu.css');
	wp_enqueue_style( 'dr_tan-bootstrap', get_template_directory_uri() . '/scss/bootstrap.min.css');
	wp_enqueue_style( 'dr_tan-scss1-style', get_template_directory_uri() . '/scss/style.css?'.time(), array(), time());


	wp_enqueue_script( 'dr_tan-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'dr_tan-popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array(), '', true );
	wp_enqueue_script( 'dr_tan-boostrap-js', get_template_directory_uri() . '/js/boostrap.min.js', array(), '', true );
	wp_enqueue_script( 'dr_tan-slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), '', true );
	wp_enqueue_script( 'dr_tan-euilizer-js', get_template_directory_uri() . '/js/euilizer.js', array(), '', true );
	wp_enqueue_script( 'dr_tan-metismenu-js', get_template_directory_uri() . '/js/metismenu.js', array(), '', true );
	wp_enqueue_script( 'dr_tan-custom-js', get_template_directory_uri() . '/js/custom.js?'.time(), array(), time(), true );

}
add_action( 'wp_enqueue_scripts', 'dr_tan_scripts' );

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

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	 
}

function my_plugin_body_class($classes) {
	if( is_home() || is_page_template('template/template-home.php') ) { $classes[] = 'home_page'; }
	if( is_page_template('template/template-about.php') ) { $classes[] = 'about_page'; }
	if( is_page_template('template/template-service.php') ) { $classes[] = 'service_page'; }
	if( is_page_template('template/template-press.php') ) { $classes[] = 'press_page'; }
	if( is_page_template('template/template-blog.php') ) { $classes[] = 'blogmain_page'; }
	if( is_singular('press')) { $classes[] = 'pressinner_page'; }
	if( is_singular('post')) { $classes[] = 'bloginner_page'; }
    return $classes;
}

add_filter('body_class', 'my_plugin_body_class');

function press_init() {
  	$args_sp = array(	
		'label' => 'certificates',
		'public' => true,
		'show_ui' => true,	
		'capability_type' => 'post',	
		'hierarchical' => false,	
		'rewrite' => array('slug' => 'certificates'),	
		'query_var' => true,	
		'menu_icon' => 'dashicons-video-alt',	
		'supports' => array( 'title','editor','thumbnail','page-attributes')	
	); 
	
	register_post_type( 'press', $args_sp );
	
}
add_action( 'init', 'press_init' );

function remove_css_js_version( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );


function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'bhasa-custom-menu' => __( 'Bhasa Custom Menu' ),
		'footer-bhasa-custom-menu' => __( 'Footer Bhasa Custom Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page( 824 ) ) {
        $classes[] = 'service_page';
    }
    return $classes;
}
