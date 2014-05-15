<?php

class Single_Post_Meta_Manager_Admin {

	private $version;

	public function __construct( $version ) {
		$this->version = $version;
	}

	public function enqueue_styles() {

		wp_enqueue_style(
			'single-post-meta-manager-admin',
			plugin_dir_url( __FILE__ ) . 'css/single-post-meta-manager-admin.css',
			array(),
			$this->version,
			FALSE
		);

	}

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

	public function render_meta_box() {
		require_once plugin_dir_path( __FILE__ ) . 'partials/single-post-meta-manager.php';
	}

}
