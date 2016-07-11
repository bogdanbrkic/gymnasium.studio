<?php
/**
 * Berg functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package Berg
 */

if ( ! function_exists( 'berg_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function berg_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Berg, use a find and replace
	 * to change 'berg' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'berg', get_template_directory() . '/languages' );

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

	if ( function_exists( 'add_image_size') ) add_theme_support( 'post-thumbnails');
	if( function_exists( 'add_image_size') ) {
		add_image_size( 'berg_mili-thumb', 100, 100, true);
		add_image_size( 'berg_mini-thumb', 250, 70, true);
		add_image_size( 'berg_post-thumb', 200, 200, true);
		add_image_size( 'berg_big-thumb', 640, 480, true );
		add_image_size( 'berg_big_wh-thumb', 640, 9999, true );
		add_image_size( 'berg_post_big', 900, 9999, true );
		add_image_size( 'berg_extra_big', 1200, 9999, true );
	}


	/*
	 * Excerpt length
	 */
	function berg_excerpt_length($length) {
		return 20;
	}
	add_filter('excerpt_length', 'berg_excerpt_length');

	/*
	 * Excerpt more
	 */
	function berg_excerpt_more($more) {
		global $post;
		return '...<br><a href="'. esc_url(get_permalink($post->ID)) .'" class="btn btn-default btn_more">'. esc_html__('Read More', 'berg') .'</a>';
	}
	add_filter('excerpt_more', 'berg_excerpt_more');


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'berg' ),
	) );

	/*
	 * HTML in Title
	 */
	
	
	function berg_modified_post_title ($title) {
	  if( $title == '' ){
	    $title = esc_html__( 'Untitled', 'berg' );
	  }
	  return $title;
	}
	add_filter( 'the_title', 'berg_modified_post_title');


	/*
	 * Editor Style
	 */
	add_editor_style(array( 'css/editor-style.css' ));

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


	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'berg_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // berg_setup
add_action( 'after_setup_theme', 'berg_setup' );

	

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( ! isset( $content_width ) ) $content_width = 940;
function berg_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'berg_content_width', 940 );
}
add_action( 'after_setup_theme', 'berg_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function berg_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'berg' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'berg_widgets_init' );




/**
 * Load CSS
 */
function berg_theme_styles()  {  
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.5');
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/css/docs.min.css', array(), '3.3.5');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array());
	wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/fonts/themify-icons.css', array());
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array());
	wp_enqueue_style( 'magnificpopup', get_template_directory_uri() . '/css/magnific-popup.css', array());
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array());
	wp_enqueue_style( 'YTPlayer', get_template_directory_uri() . '/css/jquery.mb.YTPlayer.min.css', array());
	
  if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'woo-commerce', get_template_directory_uri() . '/css/woo-commerce.css', array());
	}
	
  wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/berg_style.css', array());
}
add_action( 'wp_enqueue_scripts', 'berg_theme_styles' );

/**
 * Inline styles.
 */
add_action('wp_head', 'berg_inline_css', 100);

function berg_inline_css()
{
	ob_start();
	require 'template-parts/header_styles.php';
	$custom_css = ob_get_clean();
 	echo "<style>$custom_css</style>";
}

/**
 * Enqueue scripts and styles.
 */
function berg_scripts() {
	wp_enqueue_style( 'berg-style', get_stylesheet_uri() );
	wp_enqueue_script( 'berg-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.7', true );
	wp_enqueue_script( 'berg-wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), '1.0.7', true );
	wp_enqueue_script( 'berg-YTPlayer', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.min.js', array('jquery'), '3.3.5', true );
	wp_enqueue_script( 'berg-prefix-free', get_template_directory_uri() . '/js/prefixfree.min.js', array('jquery'), '1.0.7', true );
	wp_enqueue_script( 'berg-magificpopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'berg-lettering', get_template_directory_uri() . '/js/jquery.lettering.js', array('jquery'), '0.6.1', true );
	wp_enqueue_script( 'berg-JQueryUI', get_template_directory_uri() . '/js/jquery-ui.js', array('jquery'), '1.11.2', true );
	wp_enqueue_script( 'berg-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), '3.3.0', true );
	wp_enqueue_script( 'berg-wow', get_template_directory_uri() . '/js/prefixfree.min.js', array('jquery'), '1.1.2', true );
	wp_enqueue_script( 'berg-twitter', get_template_directory_uri() . '/js/twitterfetcher.min.js', array('jquery'), '1.1', true );
	wp_enqueue_script( 'berg-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
	


	if( function_exists('fw_get_db_settings_option') && !is_admin() ) { 
		wp_enqueue_script( 'fw-form-helpers', fw_get_framework_directory_uri() . '/static/js/fw-form-helpers.js', array(), '2.4.4', true );
		 wp_localize_script('fw-form-helpers', 'fwAjaxUrl', admin_url( 'admin-ajax.php', 'relative' ));
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'berg-main-scripts', get_template_directory_uri() . '/js/berg_script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'berg_scripts' );


/**
 * Themify Icons
 */

require_once get_template_directory() .'/inc/icons.php';


/*
Register Fonts
*/

function berg_studio_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'berg' ) ) {
    	if( function_exists('fw_get_db_settings_option') ) {
	        $font_url = add_query_arg( 'family', urlencode( 'Oswald|'.fw_get_db_settings_option('font_body/family').'|'.fw_get_db_settings_option('font_title/family').':100,200,300,300italic,400,400italic,500,700,700italic,800,800italic,900&subset=latin,latin-ext' ), "http://fonts.googleapis.com/css" );
	    }else{
	    	$font_url = add_query_arg( 'family', urlencode( 'Oswald|Open+Sans:300,300italic,400,400italic,500,700,700italic&subset=latin,latin-ext' ), "http://fonts.googleapis.com/css" );
	    }
    }
    return $font_url;
}

/*
Enqueue scripts and styles.
*/
function berg_studio_scripts() {
    wp_enqueue_style( 'studio-fonts', berg_studio_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'berg_studio_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/*TGM Plugin*/
require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';
 
add_action( 'tgmpa_register', 'berg_require_plugins' );
 
function berg_require_plugins() {
    $dir = get_template_directory() . '/framework-customizations/plugins/';
    $plugins = array(     
          array(
            'name'      => esc_html__( 'Unyson', 'berg' ),
            'slug'      => 'unyson',
            'required'  => true,
          ),
          array(
            'name'                  => esc_html__( 'Berg Theme Extensions', 'berg' ), 
            'slug'                  => 'berg-extensions', 
            'source'                => $dir . 'maskan-custom-posts.zip',
            'required'              => true, 
            'version'               => '1.0',
            'force_activation'      => false,
            'force_deactivation'    => false, 
            'external_url'          => '', 
          ),
          array(
            'name'      => esc_html__( 'MailChimp for WordPress', 'berg' ), 
            'slug'      => 'mailchimp-for-wp',
            'required'  => true,
          )
    );
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'berg' ),
            'menu_title'                      => __( 'Install Plugins', 'berg' ),
            'installing'                      => __( 'Installing Plugin: %s', 'berg' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'berg' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'berg' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'berg' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'berg' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'berg' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'berg'), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'berg' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'berg' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'berg' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'berg' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'berg' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'berg' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'berg' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'berg' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
 
    tgmpa( $plugins, $config );
}
