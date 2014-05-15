<?php
/*
 * Plugin Name:       Single Post Meta Manager
 * Plugin URI:        http://github.com/tommcfarlin/post-meta-manager
 * Description:       Single Post Meta Manager displays the post meta data associated with a given post.
 * Version:           0.2.0
 * Author:            Tom McFarlin
 * Author URI:        http://tommcfarlin.com
 * Text Domain:       single-post-meta-manager-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-single-post-meta-manager.php';

function run_single_post_meta_manager() {

	$spmm = new Single_Post_Meta_Manager();
	$spmm->run();

}

run_single_post_meta_manager();
