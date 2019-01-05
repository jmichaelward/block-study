<?php
/**
 * Service to initialize our custom blocks with WordPress.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\BlockStudy\Service
 * @since   2019-01-04
 */

namespace JMichaelWard\BlockStudy\Service;

use JMichaelWard\BlockStudy\WP\EditorBlock;
use WebDevStudios\OopsWP\Structure\Service;
use JMichaelWard\BlockStudy\WP\Block;
use WebDevStudios\OopsWP\Utility\RootPathDependent;

/**
 * Class NativeBlockService
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\BlockStudy\Service
 * @since   2019-01-04
 */
class NativeBlockService extends Service {
	use RootPathDependent;

	/**
	 * Blocks with which to register to WordPress.
	 *
	 * @var array
	 * @since 2019-01-04
	 */
	protected $blocks = [
		Block\HelloWorld::class,
	];

	/**
	 * Initialize our editor blocks with WordPress.
	 *
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-01-04
	 */
	public function initialize_blocks() {
		/** @var $block EditorBlock Instance of an EditorBlock */
		foreach ( $this->blocks as $block_class ) {
			$block = new $block_class();
			$block->set_root_path( $this->root_path );
			$block->register();
		}
	}

	/**
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-01-04
	 * @return void
	 */
	public function register_hooks() {
		add_action( 'init', [ $this, 'initialize_blocks'] );
	}
}
