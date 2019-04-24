<?php
/*
Plugin Name: WP MVC
Plugin URI: http://wordpress.org/extend/plugins/wp-mvc/
Description: Sets up an MVC framework inside of WordPress.
Author: Tom Benner
Modifications: Robert Peake, AR-General, Jonathan Gruber, Linda Furstenberger, Jordan Enev, Alastair, Chris Snyder, Fred Isaacs, Ceelo, Dangerous Dan, Eric Maziade, Fantasy1125, Glade, Derrick Hammer, Sam Wilson, Damiano Porta, Juuso Leinonen, David Eugene Pratt, David Lundgren, Victor Albert, Simon vom Eyser, Alvin Bunk, Jeffrey Fisher, Sergio Guzman, aleextra, Michał Krawczyk, mikehike123, polcodemichalkrawczyk, ptrkcsk, felipeelia, dlundgren
Version: 1.3.18
Text Domain: wpmvc
Domain Path: /core/languages
Author URI: https://github.com/tombenner
*/

if (!defined('MVC_PLUGIN_PATH')) {
    define('MVC_PLUGIN_PATH', dirname(__FILE__).'/');
}

// Load public functionality
require_once MVC_PLUGIN_PATH.'core/loaders/mvc_public_loader.php';
$public_loader = new MvcPublicLoader();

if (is_admin()) {

    // Load admin functionality
    require_once MVC_PLUGIN_PATH.'core/loaders/mvc_admin_loader.php';
    $admin_loader = new MvcAdminLoader();
    
    add_action('wp_loaded', array($public_loader,'load_rewrite_rules'));
    add_action('admin_init', array($admin_loader, 'admin_init'));
    add_action('admin_menu', array($admin_loader, 'add_menu_pages'));
    add_action('admin_menu', array($admin_loader, 'add_settings_pages'));
    add_action('plugins_loaded', array($admin_loader, 'add_admin_ajax_routes'));
    wp_mvc_load_global_functionality($admin_loader);

}  else {

    // filters for public urls
    add_filter('rewrite_rules_array', array($public_loader, 'add_rewrite_rules'));
    add_filter('query_vars', array($public_loader, 'add_query_vars'));
    add_action('template_redirect', array($public_loader, 'template_redirect'));
    wp_mvc_load_global_functionality($public_loader);
}

// Load global functionality
function wp_mvc_load_global_functionality(&$loader) { //public or admin, depending on context
    add_action('init', array($loader, 'init'));
    add_action('widgets_init', array($loader, 'register_widgets'));
    add_filter('post_type_link', array($loader, 'filter_post_link'), 10, 2);
    add_action('plugins_loaded', 'wpmvc_load_plugin_textdomain' );
}

function wpmvc_load_plugin_textdomain() {
    load_plugin_textdomain( 'wpmvc', FALSE, basename( dirname( __FILE__ ) ) . '/' . 'core/languages' );
}
