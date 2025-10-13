<?php
/**
 * Plugin Name: WP Plugin Template
 * Plugin URI: https://github.com/devdav-id/WP-Plugin-Template-w-Updater
 * Description: Basic WordPress Plugin Empty Template with Update Checker
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://github.com/devdav-id
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-plugin-template
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Define plugin constants
define( 'WP_PLUGIN_TEMPLATE_VERSION', '1.0.0' );
define( 'WP_PLUGIN_TEMPLATE_PATH', plugin_dir_path( __FILE__ ) );
define( 'WP_PLUGIN_TEMPLATE_URL', plugin_dir_url( __FILE__ ) );

// Include the functions file
require_once WP_PLUGIN_TEMPLATE_PATH . 'includes/functions.php';

// Register activation and deactivation hooks
register_activation_hook( __FILE__, 'wp_plugin_template_activate' );
register_deactivation_hook( __FILE__, 'wp_plugin_template_deactivate' );

// Enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'wp_plugin_template_enqueue_assets' );

/**
 * Enqueue plugin assets (CSS and JavaScript)
 */
function wp_plugin_template_enqueue_assets() {
    // Enqueue CSS
    wp_enqueue_style(
        'wp-plugin-template-style',
        WP_PLUGIN_TEMPLATE_URL . 'assets/style.css',
        array(),
        WP_PLUGIN_TEMPLATE_VERSION,
        'all'
    );

    // Enqueue JavaScript
    wp_enqueue_script(
        'wp-plugin-template-script',
        WP_PLUGIN_TEMPLATE_URL . 'assets/script.js',
        array( 'jquery' ),
        WP_PLUGIN_TEMPLATE_VERSION,
        true
    );
}
