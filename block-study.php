<?php
/**
 * Plugin Name: Block Study
 * Description: A plugin to study editor block registration in WordPress 5+.
 * Author: Jeremy Ward <jeremy@jmichaelward.com>
 * Author URI: https://jmichaelward.com
 * Version: 0.0.0
 */

use JMichaelWard\BlockStudy\Plugin;

$plugin_path = plugin_dir_path( __FILE__ );
$autoload    = $plugin_path . '/vendor/autoload.php';

if ( is_readable( $autoload ) ) {
	require_once $autoload;
}

if ( ! class_exists( 'JMichaelWard\BlockStudy\Plugin' ) ) {
	// @TODO Throw a notice here.
	return;
}

add_action( 'plugins_loaded', [ new Plugin( $plugin_path ), 'run' ] );
