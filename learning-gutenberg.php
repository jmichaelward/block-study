<?php
/**
 * Plugin Name: Learning Gutenberg
 * Description: A plugin to learn how to write custom Gutenberg blocks.
 * Author: Jeremy Ward <jeremy@jmichaelward.com>
 * Author URI: https://jmichaelward.com
 * Version: 0.0.0
 */

$plugin_dir = plugin_dir_path( __FILE__ );
$autoload   = "{$plugin_dir}/vendor/autoload.php";

if ( is_readable( $autoload ) ) {
	require_once $autoload;
}

if ( ! function_exists( 'the_gutenberg_project' ) || ! class_exists( 'JMichaelWard\\LearningGutenberg\\Plugin' ) ) {
	add_action( 'admin_notices', function() {
		echo <<<NOTICE
		<div class="notice notice-error">
			<p>This plugin is missing some requirements. Either Gutenberg is not installed and active, or we can't find
			the plugin class files.</p>
		</div>
NOTICE;
	});

	add_action( 'admin_init', function() {
		deactivate_plugins( __FILE__ );
	});
}
