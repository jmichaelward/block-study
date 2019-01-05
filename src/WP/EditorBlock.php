<?php
/**
 * Defines a contract for registering new editor blocks.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\BlockStudy\WP
 * @since   2019-01-04
 */

namespace JMichaelWard\BlockStudy\WP;

use WebDevStudios\OopsWP\Utility\Registerable;
use WebDevStudios\OopsWP\Utility\RootPathDependent;

/**
 * Class EditorBlock
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\BlockStudy\WP
 * @since   2019-01-04
 */
abstract class EditorBlock implements Registerable {
	use RootPathDependent;

	/**
	 * Register the block with WordPress.
	 *
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-01-04
	 * @return void
	 */
	public function register() {
		$this->register_script();
		$this->register_type();
	}

	/**
	 * Register the JavaScript assets that power the block.
	 *
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-01-04
	 */
	abstract public function register_script();

	/**
	 * Register the block type information.
	 *
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-01-04
	 */
	abstract public function register_type();
}
