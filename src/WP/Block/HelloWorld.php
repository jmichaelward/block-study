<?php
/**
 * A HelloWorld block for the Gutenberg editor.
 *
 * @see     https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/writing-your-first-block-type/
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\BlockStudy\WP
 * @since   2019-01-04
 */

namespace JMichaelWard\BlockStudy\WP\Block;

use JMichaelWard\BlockStudy\WP\EditorBlock;

/**
 * Class HelloWorld
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\BlockStudy\WP\Block
 * @since   2019-01-04
 */
class HelloWorld extends EditorBlock {
	/**
	 * Name of the script.
	 *
	 * @var string
	 * @since 2019-01-04
	 */
	protected $block_name = 'hello-world';

	/**
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-01-04
	 * @return void
	 */
	public function register_script() {
		wp_register_script(
			"{$this->block_name}-js",
			plugins_url( "block-study/assets/wp/{$this->block_name}/block.js" ), // @TODO Add a file path to OOPS-WP.
			[ 'wp-blocks', 'wp-i18n', 'wp-element' ]
		);
	}

	public function register_style() {
		wp_register_style(
			"{$this->block_name}-css",
			plugins_url( "block-study/assets/wp/{$this->block_name}/editor.css" ),
			[ 'wp-edit-blocks' ]
		);
	}

	/**
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-01-04
	 * @return void
	 */
	public function register_type() {
		// Block Type must include a namespace, or it will not render!
		register_block_type( "jmichaelward/{$this->block_name}", [
			'editor_script' => "{$this->block_name}-js",
			'editor_style' => "{$this->block_name}-css",
		] );
	}
}
