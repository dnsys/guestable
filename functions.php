<?php
/**
 * guestable functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package guestable
 */

if ( ! function_exists( 'guestable_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function guestable_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on guestable, use a find and replace
		 * to change 'guestable' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'guestable', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'main_menu' => esc_html__( 'Primary', 'guestable' ),
		) );

        register_nav_menus( array(
            'blog_tab_menu' => esc_html__( 'Blog tab menu', 'guestable' ),
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
		add_theme_support( 'custom-background', apply_filters( 'guestable_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

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
add_action( 'after_setup_theme', 'guestable_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function guestable_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'guestable_content_width', 640 );
}
add_action( 'after_setup_theme', 'guestable_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function guestable_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'guestable' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'guestable' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'guestable_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function guestable_scripts() {
    wp_enqueue_style( 'guestable-app',get_template_directory_uri() . '/build/css/app.css' );
    wp_enqueue_style( 'guestable-style', get_stylesheet_uri() );

    wp_enqueue_script( 'guestable-app', get_template_directory_uri() . '/build/js/app.js', array('jquery'), '20151215', true );
    wp_enqueue_script( 'guestable-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'guestable-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'guestable_scripts' );

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


class Add_Class_Sub_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }
}

/**
 * WP Posts Ajax
 */
function js_variables( $path = '' ){
    $variables = array (
        'ajax_url' => admin_url('admin-ajax.php'),
        'is_mobile' => wp_is_mobile()
        // Тут обычно какие-то другие переменные
    );

    if ( is_admin() )
        $url = admin_url( 'admin-ajax.php' );
    else
        $url = home_url( 'wp-admin/admin-ajax.php' );
    $url .= ltrim( $path, '/' );

    echo '<script type="text/javascript">var ajaxUrl = "' . $url . '"</script>';
}
add_action('wp_head','js_variables');

function ajax_filter_posts_by_category(){
    $target = $_POST['dataTarget'];

    if($target == 'recent-posts'){
        $args = array(
            'post_type' => 'post',
            'numberposts' => 12,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
    }else if($target == 'popular-posts'){
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 12,
            'meta_key' => 'wpb_post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        );
    }else {
        $args = array(
            'post_type' => 'post',
            'numberposts' => 12,
            'post_status' => 'publish',
            'category_name' => $target,
            'orderby' => 'date',
            'order' => 'DESC'
        );
    }

    $the_query  = new WP_Query($args);

    if ($the_query->have_posts()) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $data = get_template_part('template-parts/content');
        }
    }
    else {
        // Since you're declared the $data variable before then assign the next value also in $data
        // And at the end just echo it.
        $data = __('Didnt find anything', THEME_NAME);
    }
    wp_reset_postdata();


    $data;
    // And must die() the function
    die();
}

add_action('wp_ajax_filter_posts_by_category', 'ajax_filter_posts_by_category');
add_action('wp_ajax_nopriv_filter_posts_by_category', 'ajax_filter_posts_by_category');


/**
 * Popular posts
 */
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);