<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\WPBlock
 * @since   2019-01-05
 */

namespace JMichaelWard\WPBlock;

use WebDevStudios\OopsWP\Structure\Editor\EditorBlock;

/**
 * Class HelloGutenbergEditable
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\WPBlock
 * @since   2019-01-05
 */
class HelloGutenbergEditable extends EditorBlock {
	/**
	 * Name of the script.
	 *
	 * @var string
	 * @since 2019-01-04
	 */
	protected $block_name = 'hello-gutenberg-editable';

	/**
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-01-05
	 * @return void
	 */
	public function register_script() {
		wp_register_script(
			"{$this->block_name}-js",
			plugins_url( '/assets/block.js', dirname( __FILE__ ) ),
			[ 'wp-blocks', 'wp-i18n', 'wp-element' ]
		);
	}

	/**
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-01-05
	 * @return mixed|void
	 */
	public function register_style() {
		wp_register_style(
			"{$this->block_name}-editor-css",
			plugins_url( '/assets/editor.css', dirname( __FILE__ ) ),
			[ 'wp-edit-blocks' ]
		);

		wp_register_style(
			"{$this->block_name}-style-css",
			plugins_Url( '/assets/style.css', dirname( __FILE__ ) ),
			[ 'wp-edit-blocks' ]
		);	}

	/**
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-01-05
	 * @return void
	 */
	public function register_type() {
		// Block Type must include a namespace, or it will not render!
		register_block_type( "jmichaelward/{$this->block_name}", [
			'editor_script' => "{$this->block_name}-js",
			'editor_style'  => "{$this->block_name}-editor-css", // Editor stylesheet.
			'style'         => "{$this->block_name}-style-css", // Frontend stylesheet.
		] );
	}
}
