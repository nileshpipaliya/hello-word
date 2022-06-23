<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              #
 * @since             1.0.0
 * @package           Wp_Posts_Bulk_Actions
 *
 * @wordpress-plugin
 * Plugin Name:       WP posts bulk actions
 * Plugin URI:        #
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Nilesh Pipaliya
 * Author URI:        #
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-posts-bulk-actions
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WP_POSTS_BULK_ACTIONS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-posts-bulk-actions-activator.php
 */
function activate_wp_posts_bulk_actions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-posts-bulk-actions-activator.php';
	Wp_Posts_Bulk_Actions_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-posts-bulk-actions-deactivator.php
 */
function deactivate_wp_posts_bulk_actions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-posts-bulk-actions-deactivator.php';
	Wp_Posts_Bulk_Actions_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_posts_bulk_actions' );
register_deactivation_hook( __FILE__, 'deactivate_wp_posts_bulk_actions' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-posts-bulk-actions.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_posts_bulk_actions() {

	$plugin = new Wp_Posts_Bulk_Actions();
	$plugin->run();

}
run_wp_posts_bulk_actions();
