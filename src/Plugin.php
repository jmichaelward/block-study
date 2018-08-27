<?php
namespace JMichaelWard\LearningGutenberg;

/**
 * Class Plugin
 *
 * @package JMichaelWard\LearningGutenberg
 */
class Plugin {
	/**
	 * Run the plugin.
	 */
	public function run() {
		$this->register_hooks();
	}

	/**
	 * Register any custom hooks required by this plugin.
	 */
	public function register_hooks() {
		// @TODO Gotta add some hooks, aye?
	}
}
