<?php
/**
 * Plugin Functions
 *
 * @package WP_Plugin_Template
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Example function - Add your custom functions here
 *
 * @return string
 */
function wp_plugin_template_example_function() {
    return 'Hello from WP Plugin Template!';
}

/**
 * Plugin activation hook
 */
function wp_plugin_template_activate() {
    // Code to run on plugin activation
    flush_rewrite_rules();
}

/**
 * Plugin deactivation hook
 */
function wp_plugin_template_deactivate() {
    // Code to run on plugin deactivation
    flush_rewrite_rules();
}
