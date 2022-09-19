<?php
/**
 * test functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package test
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function test_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on test, use a find and replace
		* to change 'test' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'test', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'test' ),
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
			'gallery',
			'style',
		)
	);


	// Add theme support for selective refresh for widgets.

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
add_action( 'after_setup_theme', 'test_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function test_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'test_content_width', 640 );
}
add_action( 'after_setup_theme', 'test_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function test_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'test' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'test' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'test_widgets_init' );
/**
 * Enqueue scripts and styles.
 * 
 */

function vinhomes_css() {
	wp_enqueue_style( 'vinhomes-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'vinhomes-style', 'rtl', 'replace' );

	wp_enqueue_style( 'vinhomes-main-css', get_template_directory_uri() . '/custom/main.css');
}
add_action( 'wp_enqueue_scripts', 'vinhomes_css' );

function vinhomes_scripts() {
	wp_enqueue_script( 'vinhomes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vinhomes_scripts' );

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



// Create post type
function cw_post_type_du_an() {
	$supports = array(
	'title', // post title
	'editor', // post content
	'author', // post author
	'thumbnail', // featured images
	'excerpt', // post excerpt
	'custom-fields', // custom fields
	'revisions', // post revisions
	'post-formats', // post formats
	);
	$labels = array(
	'name' => _x('DỰ ÁN', 'plural'),
	'singular_name' => _x('DỰ ÁN', 'singular'),
	'menu_name' => _x('Dự án', 'admin menu'),
	'name_admin_bar' => _x('Dự án', 'admin bar'),
	'add_new' => _x('Thêm dự án', 'add new'),
	'add_new_item' => __('Thêm Dự Án Mới'),
	'new_item' => __('Dự án mới'),
	'edit_item' => __('Chỉnh sửa dự án'),
	'view_item' => __('Xem dự án'),
	'all_items' => __('Tất cả dự án'),
	'search_items' => __('Tìm kiếm dự án'),
	'not_found' => __('Không tìm thấy dự án.'),
	);
	$args = array(
	'supports' => $supports,
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'du-an'),
	'has_archive' => true,
	'hierarchical' => false,
	);
	register_post_type('du_an', $args);
	}
	add_action('init', 'cw_post_type_du_an');
	/*Custom Post type end*/


	// Create post type
function cw_post_type_tin_tuc() {
	$supports = array(
	'title', // post title
	'editor', // post content
	'author', // post author
	'thumbnail', // featured images
	'excerpt', // post excerpt
	'custom-fields', // custom fields
	'revisions', // post revisions
	'post-formats', // post formats
	);
	$labels = array(
	'name' => _x('TIN TỨC', 'plural'),
	'singular_name' => _x('TIN TỨC', 'singular'),
	'menu_name' => _x('Tin Tức', 'admin menu'),
	'name_admin_bar' => _x('Tin tức', 'admin bar'),
	'add_new' => _x('Thêm tin tức', 'add new'),
	'add_new_item' => __('Thêm tin tức Mới'),
	'new_item' => __('Tin tức mới'),
	'edit_item' => __('Chỉnh sửa tin tức'),
	'view_item' => __('Xem tin tức'),
	'all_items' => __('Tất cả tin tức'),
	'search_items' => __('Tìm kiếm tin tức'),
	'not_found' => __('Không tìm thấy tin tức.'),
	);
	$args = array(
	'supports' => $supports,
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'tin-tuc'),
	'has_archive' => true,
	'hierarchical' => false,
	);
	register_post_type('tin_tuc', $args);
	}
	add_action('init', 'cw_post_type_tin_tuc');
	/*Custom Post type end*/
	


	

/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_khu_vuc_taxonomies() {
	// Add new "Locations" taxonomy to Posts
	register_taxonomy('khu_vuc', 'du_an', array(
	  // Hierarchical taxonomy (like categories)
	  'hierarchical' => true,
	  // This array of options controls the labels displayed in the WordPress Admin UI
	  'labels' => array(
		'name' => _x( 'Các khu vực', 'taxonomy general name' ),
		'singular_name' => _x( 'Khu vực', 'taxonomy singular name' ),
		'search_items' =>  __( 'Tìm kiếm khu vực' ),
		'all_items' => __( 'Tất cả các khu vực' ),
		'parent_item' => __( 'Parent Location' ),
		'parent_item_colon' => __( 'Parent Location:' ),
		'edit_item' => __( 'Chỉnh sửa khu vực' ),
		'update_item' => __( 'Cập nhật khu vực' ),
		'add_new_item' => __( 'Thêm khu vực mới' ),
		'new_item_name' => __( 'Tên khu vực mới' ),
		'menu_name' => __( 'Các khu vực' ),
	  ),
	  // Control the slugs used for this taxonomy
	  'rewrite' => array(
		'slug' => 'khu-vuc', // This controls the base slug that will display before each term
		'with_front' => false, // Don't display the category base before "/locations/"
		'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	  ),
	));
  }
  add_action( 'init', 'add_khu_vuc_taxonomies', 0 );


function add_thoi_gian_taxonomies() {
	// Add new "Locations" taxonomy to Posts
	register_taxonomy('thoi_gian', 'du_an', array(
	  // Hierarchical taxonomy (like categories)
	  'hierarchical' => true,
	  // This array of options controls the labels displayed in the WordPress Admin UI
	  'labels' => array(
		'name' => _x( 'Các khoảng thời gian', 'taxonomy general name' ),
		'singular_name' => _x( 'Khoảng thời gian', 'taxonomy singular name' ),
		'search_items' =>  __( 'Tìm kiếm khoảng thời gian' ),
		'all_items' => __( 'Tất cả các khoảng thời gian' ),
		'parent_item' => __( 'Parent Location' ),
		'parent_item_colon' => __( 'Parent Location:' ),
		'edit_item' => __( 'Chỉnh sửa khoảng thời gian' ),
		'update_item' => __( 'Cập nhật khoảng thời gian' ),
		'add_new_item' => __( 'Thêm khoảng thời gian mới' ),
		'new_item_name' => __( 'Tên khoảng thời gian mới' ),
		'menu_name' => __( 'Các khoảng thời gian' ),
	  ),
	  // Control the slugs used for this taxonomy
	  'rewrite' => array(
		'slug' => 'thoi-gian', // This controls the base slug that will display before each term
		'with_front' => false, // Don't display the category base before "/locations/"
		'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	  ),
	));
  }
  add_action( 'init', 'add_thoi_gian_taxonomies', 0 );

