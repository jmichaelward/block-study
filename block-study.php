<?php
/**
 * Plugin Name: Block Study
 * Description: A plugin to study editor block registration in WordPress 5+.
 * Author: Jeremy Ward <jeremy@jmichaelward.com>
 * Author URI: https://jmichaelward.com
 * Version: 0.0.0
 */

$plugin_dir = plugin_dir_path( __FILE__ );
$autoload   = "{$plugin_dir}/vendor/autoload.php";

if ( is_readable( $autoload ) ) {
	require_once $autoload;
}

