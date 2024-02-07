<?php
/*
* Plugin Name: Recipes Plugin
* Plugin URI: https://softuni.bg
* Description: Plugin for Recipes CPT  
* Version: 1.0.0
* Requires at least: 5.0
* Requires PHP: 8.0
* Author: Softuni
* Author URI: https://softuni.bg/
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Update URI: https://example.com/myplugin/
* Text Domain: softuni
* Domain Path: /languages
*/

if ( ! defined( 'RECIPES_PlUGIN_DIR_INCLUDE' ) ) {
    define( 'RECIPES_PlUGIN_DIR_INCLUDE', plugin_dir_path( __FILE__ ) . 'includes' );
 }

require RECIPES_PlUGIN_DIR_INCLUDE . '/class-recipe.php';
require RECIPES_PlUGIN_DIR_INCLUDE . '/functions.php';
