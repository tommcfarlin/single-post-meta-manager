<?php

/**
 * The Single Post Meta Manager Loader is a class that is responsible for
 * coordinating all actions and filters used throughout the plugin
 *
 * @package    SPMM
 */

/**
 * The Single Post Meta Manager Loader is a class that is responsible for
 * coordinating all actions and filters used throughout the plugin.
 *
 * This class maintains two internal collections - one for actions, one for
 * hooks - each of which are coordinated through external classes that
 * register the various hooks through this class.
 *
 * @since    1.0.0
 */
class Single_Post_Meta_Manager_Loader {

	/**
	 * A reference to the collection of actions used throughout the plugin.
	 *
	 * @access protected
	 * @var    array    $actions    The array of actions that are defined throughout the plugin.
	 */
	protected $actions;

	/**
	 * A reference to the collection of filters used throughout the plugin.
	 *
	 * @access protected
	 * @var    array    $actions    The array of filters that are defined throughout the plugin.
	 */
	protected $filters;

	/**
	 * Instantiates the plugin by setting up the data structures that will
	 * be used to maintain the actions and the filters.
	 */
	public function __construct() {

		$this->actions = array();
		$this->filters = array();

	}

	/**
	 * Registers the actions with WordPress and the respective objects and
	 * their methods.
	 *
	 * @param  string    $hook        The name of the WordPress hook to which we're registering a callback.
	 * @param  object    $component   The object that contains the method to be called when the hook is fired.
	 * @param  string    $callback    The function that resides on the specified component.
	 */
	public function add_action( $hook, $component, $callback ) {
		$this->actions = $this->add( $this->actions, $hook, $component, $callback );
	}

	/**
	 * Registers the filters with WordPress and the respective objects and
	 * their methods.
	 *
	 * @param  string    $hook        The name of the WordPress hook to which we're registering a callback.
	 * @param  object    $component   The object that contains the method to be called when the hook is fired.
	 * @param  string    $callback    The function that resides on the specified component.
	 */
	public function add_filter( $hook, $component, $callback ) {
		$this->filters = $this->add( $this->filters, $hook, $component, $callback );
	}

	/**
	 * Registers the filters with WordPress and the respective objects and
	 * their methods.
	 *
	 * @access private
	 *
	 * @param  array     $hooks       The collection of existing hooks to add to the collection of hooks.
	 * @param  string    $hook        The name of the WordPress hook to which we're registering a callback.
	 * @param  object    $component   The object that contains the method to be called when the hook is fired.
	 * @param  string    $callback    The function that resides on the specified component.
	 *
	 * @return array                  The collection of hooks that are registered with WordPress via this class.
	 */
	private function add( $hooks, $hook, $component, $callback ) {

		$hooks[] = array(
			'hook'      => $hook,
			'component' => $component,
			'callback'  => $callback
		);

		return $hooks;

	}

	/**
	 * Registers all of the defined filters and actions with WordPress.
	 */
	public function run() {

		 foreach ( $this->filters as $hook ) {
			 add_filter( $hook['hook'], array( $hook['component'], $hook['callback'] ) );
		 }

		 foreach ( $this->actions as $hook ) {
			 add_action( $hook['hook'], array( $hook['component'], $hook['callback'] ) );
		 }

	}

}