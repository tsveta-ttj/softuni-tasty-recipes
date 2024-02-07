<?php 


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
    wp_enqueue_script('slick.min.js', TASTY_RECIPES_ASSETS_URL . '/js/slick.min.js', array('jquery'), TASTY_RECIPES_ASSETS_VERSION );
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
            'primary_menu'      => __('Primary Menu', 'softuni'),
            
        )
    );
}
add_action('after_setup_theme', 'project_register_nav_menus');