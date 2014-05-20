<?php

/**
 * The Single Post Meta Manager Admin defines all functionality for the dashboard
 * of the plugin
 *
 * @package SPMM
 */

/**
 * The Single Post Meta Manager Admin defines all functionality for the dashboard
 * of the plugin.
 *
 * This class defines the meta box used to display the post meta data and registers
 * the style sheet responsible for styling the content of the meta box.
 *
 * @since    1.0.0
 */
class Single_Post_Meta_Manager_Admin {

	/**
	 * A reference to the version of the plugin that is passed to this class from the caller.
	 *
	 * @access private
	 * @var    string    $version    The current version of the plugin.
	 */
	private $version;

	/**
	 * Initializes this class and stores the current version of this plugin.
	 *
	 * @param    string    $version    The current version of this plugin.
	 */
	public function __construct( $version ) {
		$this->version = $version;
	}

	/**
	 * Enqueues the style sheet responsible for styling the contents of this
	 * meta box.
	 */
	public function enqueue_styles() {

		wp_enqueue_style(
			'single-post-meta-manager-admin',
			plugin_dir_url( __FILE__ ) . 'css/single-post-meta-manager-admin.css',
			array(),
			$this->version,
			FALSE
		);

	}

	/**
	 * Registers the meta box that will be used to display all of the post meta data
	 * associated with the current post.
	 */
	public function add_meta_box() {

		add_meta_box(
			'single-post-meta-manager-admin',
			'Single Post Meta Manager',
			array( $this, 'render_meta_box' ),
			'post',
			'normal',
			'core'
		);

	}

	/**
	 * Requires the file that is used to display the user interface of the post meta box.
	 */
	public function render_meta_box() {
		require_once plugin_dir_path( __FILE__ ) . 'partials/single-post-meta-manager.php';
	}

}
