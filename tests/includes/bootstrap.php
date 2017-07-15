<?php

// Require patchwork early so that functions can be monkey patched in Unit tests.
require __DIR__ . '/../../vendor/antecedent/patchwork/Patchwork.php';

define( 'HYRV_PLUGIN_ROOT_DIR', dirname( __FILE__ ) . '/../../' );

// Mock WordPress functions.
function add_action() { return true; }
function add_filter() { return true; }
function register_activation_hook() { return true; }

// Load the plugin.
if ( file_exists( HYRV_PLUGIN_ROOT_DIR . 'hide-youtube-related-videos.php' ) ) {
	require_once  HYRV_PLUGIN_ROOT_DIR . 'hide-youtube-related-videos.php';
}
