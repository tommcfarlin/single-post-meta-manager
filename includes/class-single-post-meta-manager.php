<?php

class Single_Post_Meta_Manager {

	protected $loader;

	protected $plugin_slug;

	protected $version;

	public function __construct() {

		$this->plugin_slug = 'single-post-meta-manager-slug';
		$this->version = '0.1.0';

	}

	private function load_dependencies() {

	}

	private function define_admin_hooks() {

	}

	public function run() {
		$this->loader->run();
	}

	public function get_version() {
		return $this->version;
	}

}
