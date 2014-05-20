<?php
/**
 * The file responsible for starting the Single Post Meta Manager plugin
 *
 * The Single Post Meta Manager is a plugin that displays the post meta data
 * associated with a given post. This particular file is responsible for
 * including the necessary dependencies and starting the plugin.
 *
 * @package SPMM
 *
 * @wordpress-plugin
 * Plugin Name:       Single Post Meta Manager
 * Plugin URI:        http://github.com/tommcfarlin/post-meta-manager
 * Description:       Single Post Meta Manager displays the post meta data associated with a given post.
 * Version:           1.0.0
 * Author:            Tom McFarlin
 * Author URI:        http://tommcfarlin.com
 * Text Domain:       single-post-meta-manager-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

// If this file is called directly, then about execution.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Include the core class responsible for loading all necessary components of the plugin.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-single-post-meta-manager.php';

/**
 * Instantiates the Single Post Meta Manager class and then
 * calls its run method officially starting up the plugin.
 */
function run_single_post_meta_manager() {

	$spmm = new Single_Post_Meta_Manager();
	$spmm->run();

}

// Call the above function to begin execution of the plugin.
run_single_post_meta_manager();
