<?php
/**
 * Service to initialize our custom blocks with WordPress.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\BlockStudy\Service
 * @since   2019-01-04
 */

namespace JMichaelWard\BlockStudy\Service;

use JMichaelWard\WPBlock as Block;
use WebDevStudios\OopsWP\Structure\Editor\EditorBlock;
use WebDevStudios\OopsWP\Structure\Service;

/**
 * Class NativeBlockService
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\BlockStudy\Service
 * @since   2019-01-04
 */
class NativeBlockService extends Service {
	/**
	 * Blocks with which to register to WordPress.
	 *
	 * @var array
	 * @since 2019-01-04
	 */
	protected $blocks = [
		Block\HelloGutenberg::class,
		Block\HelloGutenbergEditable::class,
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
