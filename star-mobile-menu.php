<?php
/**
 * Plugin Name: Star Mobile Menu
 * Description: Convert your theme's mobile menu to an excellent and more flexible menu.
 * Version: 1.0.0
 * Author: MhrTheme
 * Author URI: https://mhrtheme.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: star-mobile-menu
 * Domain Path: /languages
 */

/**
 * Include Assets
 */
add_action('wp_enqueue_scripts', 'star_mobile_menu_scripts');

function star_mobile_menu_scripts() {
	wp_register_style( 'star-mobile-menu-meanmenu-style', plugins_url('/assets/css/meanmenu.min.css', __FILE__ ) );
    wp_enqueue_style( 'star-mobile-menu-meanmenu-style' );

    wp_register_style( 'star-mobile-menu-style', plugins_url('/assets/css/star-mobile-menu.css', __FILE__ ) );
    wp_enqueue_style( 'star-mobile-menu-style' );

    wp_enqueue_script( 'star-mobile-menu-meanmenu-script', plugins_url('/assets/js/meanmenu.min.js', __FILE__ ), array( 'jquery' ) );

    wp_enqueue_script( 'star-mobile-menu-script', plugins_url('/assets/js/star-mobile-menu.js', __FILE__ ), array( 'jquery' ) );
}
