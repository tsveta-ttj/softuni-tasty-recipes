<?php 
// adding featured image support in a WordPress theme
add_theme_support( 'post-thumbnails' );

if ( ! defined( 'TASTY_RECIPES_ASSETS_VERSION' ) ) {
    define( 'TASTY_RECIPES_ASSETS_VERSION', '0.1' );
}

if ( ! defined( 'TASTY_RECIPES_ASSETS_URL' ) ) {
    define( 'TASTY_RECIPES_ASSETS_URL', get_template_directory_uri() . '/assets' );
}


/**
 * Function that enqueue all of assets
 *
 * @return void
 */
function project_enqueue_assets(  ){
    $args = array(
        'in_footer' => true,
        'strategy' => 'defer'
    );

    wp_enqueue_style('bootstrap.min-css', TASTY_RECIPES_ASSETS_URL . '/css/bootstrap.css', false, TASTY_RECIPES_ASSETS_VERSION);
    wp_enqueue_style('font-awesome', TASTY_RECIPES_ASSETS_URL . '/css/font-awesome.min.css', false, TASTY_RECIPES_ASSETS_VERSION);
    wp_enqueue_style('responsive.css', TASTY_RECIPES_ASSETS_URL . 'responsive.css', false, TASTY_RECIPES_ASSETS_VERSION);
    wp_enqueue_style('slick-theme', TASTY_RECIPES_ASSETS_URL . '/css/slick-theme.css', false, TASTY_RECIPES_ASSETS_VERSION);
    wp_enqueue_style('slick.css', TASTY_RECIPES_ASSETS_URL . '/css/slick.css', false, TASTY_RECIPES_ASSETS_VERSION);
    wp_enqueue_style('style.css.map', TASTY_RECIPES_ASSETS_URL . '/css/style.css.map', false, TASTY_RECIPES_ASSETS_VERSION);
    wp_enqueue_style('style.css', TASTY_RECIPES_ASSETS_URL . '/css/style.css', false, TASTY_RECIPES_ASSETS_VERSION);

    wp_enqueue_script('bootstrap.js', TASTY_RECIPES_ASSETS_URL . '/js/bootstrap.js', array(), TASTY_RECIPES_ASSETS_VERSION, $args);
    wp_enqueue_script('custom.js', TASTY_RECIPES_ASSETS_URL . '/js/custom.js', array('jquery'), TASTY_RECIPES_ASSETS_VERSION);
    wp_enqueue_script('slick.min.js', TASTY_RECIPES_ASSETS_URL . '/js/slick.min.js', array('jquery'), TASTY_RECIPES_ASSETS_VERSION, $args);
}

add_action('wp_enqueue_scripts', 'project_enqueue_assets');

/**
 * Register our navigation menus
 *
 * @return void
 */
function project_register_nav_menus() {
    register_nav_menus(
        array(
            'primary_menu' => __('Primary Menu', 'softuni'),
        )
    );
}
add_action('after_setup_theme', 'project_register_nav_menus');


/**
 * Register our sidebar menus
 *
 * @return void
 */
function project_register_sidebars(){
    register_sidebar( array(
        'name'          => __( 'Social Media Links Widget', 'softuni' ),
		'id'            => 'sidebar-1',
        'description'   => __( 'This is a list of our social media links.' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s social_box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',

	) );

    register_sidebar( array(
        'name'          => __( 'Contact Us Widget', 'softuni' ),
		'id'            => 'sidebar-2',
        'description'   => __( 'This is a section in footer with Contact Us info. We use Contact Information Widget plugin to display contact info as Widget.' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
        
	) );
}
add_action( 'widgets_init', 'project_register_sidebars' );

