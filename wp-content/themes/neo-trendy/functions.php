<?php

/* Set content width value based on the theme's design */
if ( ! isset( $content_width ) )
	$content_width = 650;

if ( ! function_exists( 'neo_trendy_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function neo_trendy_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'neo-trendy', get_template_directory() . '/language' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/* Add theme support for custom backgrounds. */
	add_theme_support('custom-background');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/* Set custom thumbnail dimensions */
	set_post_thumbnail_size( 125, 125, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'neo-trendy-menu-masthead' => __( 'Main Menu', 'neo-trendy' ),
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

	/* Add support for custom menus. */
	add_theme_support( 'menus' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style( 'editor-style.css' );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'neo_trendy_custom_background_args', array(
		'default-color'	=> '00871d',
		'default-attachment' => 'fixed',
		'default-image' => '',
	) ) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
}
endif; // neo_trendy_setup
add_action( 'after_setup_theme', 'neo_trendy_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function neo_trendy_widgets_init() {
	register_sidebar(array(
		'name' => __('Sidebar', 'neo-trendy'),
		'id'   => 'sidebar',
		'description'   => __('This is the widgetized sidebar.', 'neo-trendy'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}
add_action( 'widgets_init', 'neo_trendy_widgets_init' );


function neo_trendy_load_scripts() {
	/* Enqueue custom Javascript here using wp_enqueue_script(). */

	/* Load the comment reply JavaScript. */
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() )
		wp_enqueue_script( 'comment-reply' );
}


/* Dynamic Copyright Date */
if ( ! function_exists( 'neo_trendy_get_copyright_years' ) ) {
  function neo_trendy_get_copyright_years( $earliest_id = null ) {
    $earliest_args = array(
      'post_type'   => array( 'any' ),
      'numberposts' => 1,
      'orderby'     => 'date',
      'order'       => 'ASC'
    );
    $get_post      = $earliest_id
                   ? get_post( $earliest_id )
                   : null;
    if ( ! $get_post ) {
      $get_post = array_shift( get_posts( $earliest_args ) );
    }
    $earliest_date = date( 'Y', strtotime( $get_post->post_date ) );
    $current_date  = date( 'Y' );
    return $earliest_date == $current_date
           ? $current_date
           : $earliest_date . '&ndash;' . $current_date;
  }
}

if ( ! function_exists( 'neo_trendy_copyright_years' ) ) {
  function neo_trendy_copyright_years( $earliest_id = null ) {
    echo neo_trendy_get_copyright_years( $earliest_id );
  }
}


// enable threaded comments
function neo_trendy_enable_threaded_comments(){
if (!is_admin()) {
if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
wp_enqueue_script('comment-reply');
}
}
add_action('wp_enqueue_scripts', 'neo_trendy_enable_threaded_comments');


/**
 * Enqueue scripts and styles
 */
function neo_trendy_scripts() {
	wp_enqueue_style( 'neo-trendy-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'neo_trendy_scripts' );



/**
* Implement Custom neo_trendy Functions
*/
require( get_template_directory() . '/functions/neo-trendy-custom.php' );


/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );


?>