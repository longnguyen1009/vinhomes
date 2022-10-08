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
	add_theme_support('post-thumbnails');
	

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	// add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/

	// This theme uses wp_nav_menu() in one location.
	

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
}
add_action( 'after_setup_theme', 'test_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function test_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'test_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'test_content_width', 0 );


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


// add Js file
function vinhomes_scripts() {
	wp_enqueue_script( 'vinhomes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'vinhomes-jquery', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'vinhomes-font-awesome', get_template_directory_uri() . '/js/font-awesome.js', array(), _S_VERSION, true );
	wp_enqueue_script('vinhomes-menu_hover', get_template_directory_uri() . '/js/avia-snippet-megamenu.js', array(), _S_VERSION, true);

	
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
add_post_type_support( 'du_an', 'thumbnail' );
add_post_type_support( 'du_an', 'excerpt' );
function cw_post_type_du_an() {
	$supports = array(
	'title', // post title
	'editor', // post content
	'thumbnail', // featured images
	'excerpt', // post excerpt
	'custom-fields', // custom fields
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
add_post_type_support( 'tin_tuc', 'thumbnail' );
add_post_type_support( 'tin_tuc', 'excerpt' );
function cw_post_type_tin_tuc() {
	$supports = array(
	'title', // post title
	'editor', // post content
	'thumbnail', // featured images
	'excerpt', // post excerpt
	'custom-fields', // custom fields
	'post-formats', // post formats
	);
	$labels = array(
	'name' => _x('Tin Tức', 'plural'),
	'singular_name' => _x('Tin Tức', 'singular'),
	'menu_name' => _x('Tin Tức', 'admin menu'),
	'name_admin_bar' => _x('Tin Tức', 'admin bar'),
	'add_new' => _x('Thêm Tin Tức', 'add new'),
	'add_new_item' => __('Thêm Tin Tức Mới'),
	'new_item' => __('Tin Tức mới'),
	'edit_item' => __('Chỉnh sửa Tin Tức'),
	'view_item' => __('Xem Tin Tức'),
	'all_items' => __('Tất cả Tin Tức'),
	'search_items' => __('Tìm kiếm Tin Tức'),
	'not_found' => __('Không tìm thấy Tin Tức.'),
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





	function cw_post_type_toa_nha() {
		$supports = array(
		'title', // post title
		'editor', // post content
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'revisions', // post revisions
		'post-formats', // post formats
		);
		$labels = array(
		'name' => _x('Toà Nhà', 'plural'),
		'singular_name' => _x('Toà Nhà', 'singular'),
		'menu_name' => _x('Toà Nhà', 'admin menu'),
		'name_admin_bar' => _x('Toà Nhà', 'admin bar'),
		'add_new' => _x('Thêm Toà Nhà', 'add new'),
		'add_new_item' => __('Thêm Toà Nhà Mới'),
		'new_item' => __('Toà Nhà mới'),
		'edit_item' => __('Chỉnh sửa Toà Nhà'),
		'view_item' => __('Xem Toà Nhà'),
		'all_items' => __('Tất cả Toà Nhà'),
		'search_items' => __('Tìm kiếm Toà Nhà'),
		'not_found' => __('Không tìm thấy Toà Nhà.'),
		);
		$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'toa-nha'),
		'has_archive' => true,
		'hierarchical' => false,
		);
		register_post_type('toa_nha', $args);
		}
		add_action('init', 'cw_post_type_toa_nha');
	

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
		'singular_name' => _x( 'khu vực', 'taxonomy singular name' ),
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
		'hierarchical' => true, // This will allow URL's like "/locations/boston/cambridge/"
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

  function add_phan_khu_taxonomies() {
	// Add new "Locations" taxonomy to Posts
	register_taxonomy('phan_khu', array('du_an', 'toa_nha'), array(
	  // Hierarchical taxonomy (like categories)
	  'hierarchical' => true,
	  // This array of options controls the labels displayed in the WordPress Admin UI
	  'labels' => array(
		'name' => _x( 'Các phân khu', 'taxonomy general name' ),
		'singular_name' => _x( 'phân khu', 'taxonomy singular name' ),
		'search_items' =>  __( 'Tìm kiếm phân khu' ),
		'all_items' => __( 'Tất cả các phân khu' ),
		'parent_item' => __( 'Parent Location' ),
		'parent_item_colon' => __( 'Parent Location:' ),
		'edit_item' => __( 'Chỉnh sửa phân khu' ),
		'update_item' => __( 'Cập nhật phân khu' ),
		'add_new_item' => __( 'Thêm phân khu mới' ),
		'new_item_name' => __( 'Tên phân khu mới' ),
		'menu_name' => __( 'Các phân khu' ),
	  ),
	  // Control the slugs used for this taxonomy
	  'rewrite' => array(
		'slug' => 'phan-khu', // This controls the base slug that will display before each term
		'with_front' => false, // Don't display the category base before "/locations/"
		'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	  ),
	));
  }
  add_action( 'init', 'add_phan_khu_taxonomies', 0 );


  function add_loai_toa_taxonomies() {
	// Add new "Locations" taxonomy to Posts
	register_taxonomy('loai_toa', array('du_an','toa_nha'), array(
	  // Hierarchical taxonomy (like categories)
	  'hierarchical' => true,
	  // This array of options controls the labels displayed in the WordPress Admin UI
	  'labels' => array(
		'name' => _x( 'Các loại toà', 'taxonomy general name' ),
		'singular_name' => _x( 'loại toà', 'taxonomy singular name' ),
		'search_items' =>  __( 'Tìm kiếm loại toà' ),
		'all_items' => __( 'Tất cả cá loại toà' ),
		'parent_item' => __( 'Phân khu' ),
		'parent_item_colon' => __( 'phan_khu' ),
		'edit_item' => __( 'Chỉnh sửa loại toà' ),
		'update_item' => __( 'Cập nhật loại toà' ),
		'add_new_item' => __( 'Thêm loại toà mới' ),
		'new_item_name' => __( 'Tên loại toà mới' ),
		'menu_name' => __( 'Các loại toà' ),
	  ),
	  // Control the slugs used for this taxonomy
	  'rewrite' => array(
		'slug' => 'loai_toa', // This controls the base slug that will display before each term
		'with_front' => false, // Don't display the category base before "/locations/"
		'hierarchical' => true, // This will allow URL's like "/locations/boston/cambridge/"
	  ),
	));
  }
  add_action( 'init', 'add_loai_toa_taxonomies', 0 );

/**
 * Use radio inputs instead of checkboxes for term checklists in specified taxonomies.
 *
 * @param   array   $args
 * @return  array
 */
function wpse_139269_term_radio_checklist( $args ) {
    if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'khu_vuc' || ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'thoi_gian' /* <== Change to your required taxonomy */ ) {
        if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { // Don't override 3rd party walkers.
            if ( ! class_exists( 'WPSE_139269_Walker_Category_Radio_Checklist' ) ) {
                /**
                 * Custom walker for switching checkbox inputs to radio.
                 *
                 * @see Walker_Category_Checklist
                 */
                class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
                    function walk( $elements, $max_depth, ...$args ) {
                        $output = parent::walk( $elements, $max_depth, ...$args );
                        $output = str_replace(
                            array( 'type="checkbox"', "type='checkbox'" ),
                            array( 'type="radio"', "type='radio'" ),
                            $output
                        );

                        return $output;
                    }
                }
            }

            $args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
        }
    }

    return $args;
}

add_filter( 'wp_terms_checklist_args', 'wpse_139269_term_radio_checklist' );