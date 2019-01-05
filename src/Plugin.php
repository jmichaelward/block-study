<?php
/**
 * Main class to kick off our plugin and its collection of services.
 *
 * @package JMichaelWard\BlockStudy
 */
namespace JMichaelWard\BlockStudy;

use WebDevStudios\OopsWP\Structure\ServiceRegistrar;
use JMichaelWard\BlockStudy\Service;

/**
 * Class Plugin
 *
 * @package JMichaelWard\BlockStudy
 */
class Plugin extends ServiceRegistrar {
	/**
	 * Plugin constructor.
	 *
	 * @param $plugin_path
	 *
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-01-04
	 */
	public function __construct( $plugin_path ) {
		$this->root_path = $plugin_path;
	}

	/**
	 * Collection of services this plugin will run.
	 *
	 * @var array
	 * @since 2019-01-04
	 */
	protected $services = [
		Service\NativeBlockService::class,
	];
}
