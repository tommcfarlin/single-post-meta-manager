<?php

class Single_Post_Meta_Manager_Loader {

	protected $actions;

	protected $filters;

	public function __construct() {

		$this->actions = array();
		$this->filters = array();

	}

	public function add_action( $hook, $component, $callback ) {
		$this->actions = $this->add( $this->actions, $hook, $component, $callback );
	}

	public function add_filter( $hook, $component, $callback ) {
		$this->filters = $this->add( $this->filters, $hook, $component, $callback );
	}

	private function add( $hooks, $hook, $component, $callback ) {

		$hooks[] = array(
			'hook'      => $hook,
			'component' => $component,
			'callback'  => $callback
		);

		return $hooks;

	}

	public function run() {

		 foreach ( $this->filters as $hook ) {
			 add_filter( $hook['hook'], array( $hook['component'], $hook['callback'] ) );
		 }

		 foreach ( $this->actions as $hook ) {
			 add_action( $hook['hook'], array( $hook['component'], $hook['callback'] ) );
		 }

	}

}