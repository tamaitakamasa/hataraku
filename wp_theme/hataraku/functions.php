<?php

/**
 * hataraku functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hataraku
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hataraku_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on hataraku, use a find and replace
		* to change 'hataraku' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('hataraku', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'hataraku'),
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
			'hataraku_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'hataraku_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hataraku_content_width()
{
	$GLOBALS['content_width'] = apply_filters('hataraku_content_width', 640);
}
add_action('after_setup_theme', 'hataraku_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hataraku_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'hataraku'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'hataraku'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'hataraku_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function load_scripts()
{
	// styles
	wp_enqueue_style(
		'swiper-styles',
		'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
		array(),
		false
	);
	wp_enqueue_style(
		'default-styles',
		get_stylesheet_uri(),
		array(),
		date('ymdHi', filemtime(get_theme_file_path('style.css')))
	);
	wp_enqueue_style(
		'main-styles',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		date('ymdHi', filemtime(get_theme_file_path('style.css')))
	);

	// scripts
	wp_register_script('font-awesome-scripts', 'https://kit.fontawesome.com/756f562732.js', array(), null, true);
	wp_enqueue_script('font-awesome-scripts');

	wp_enqueue_script(
		'gsap-scripts',
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js',
		array(),
		false,
		true
	);
	wp_enqueue_script(
		'trigger-scripts',
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js',
		array(),
		false,
		true
	);
	wp_enqueue_script(
		'swiper-scripts',
		'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
		array(),
		false,
		true
	);
	wp_enqueue_script(
		'main-scripts',
		get_template_directory_uri() . '/assets/js/scripts.js',
		array('jquery'),
		false,
		true
	);
}
add_action('wp_enqueue_scripts', 'load_scripts');

// crossorigin="anonymous"属性を追加する関数
function add_crossorigin_attribute($tag, $handle)
{
	// 必要なJavaScriptファイルのハンドル名を追加
	$handles_with_crossorigin = array('font-awesome-scripts');

	if (in_array($handle, $handles_with_crossorigin, true)) {
		return str_replace(' src', ' crossorigin="anonymous" src', $tag);
	}
	return $tag;
}
add_filter('script_loader_tag', 'add_crossorigin_attribute', 10, 2);

// Snow Monkey BlocksのFont Awesomeを無効化
function dequeue_snow_monkey_blocks_font_awesome()
{
	// Snow Monkey BlocksのFont Awesome CSSを無効化
	// wp_dequeue_style( 'fontawesome6' );

	// Snow Monkey BlocksのFont Awesome JavaScriptを無効化（もしあれば）
	wp_dequeue_script('fontawesome6');
	// wp_dequeue_script( 'snow-monkey-fontawesome' );
}
add_action('wp_enqueue_scripts', 'dequeue_snow_monkey_blocks_font_awesome', 100);

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * ACFのオプションページを有効化
 */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
			'page_title' => '商品管理',
			'menu_title' => '商品管理',
			'menu_slug' => 'product-options',
			'capability' => 'edit_posts',
			'redirect' => false
	));
}
