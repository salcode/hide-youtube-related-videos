<?php

use Brain\Monkey;
use Brain\Monkey\Functions;


class Hide_YouTube_Relative_Vidoes_TestCase extends PHPUnit_Framework_TestCase {

	protected function setUp() {
		parent::setUp();
		Monkey::setUpWP();
		Functions::when('register_activation_hook')->justReturn(true);

		// Load the plugin.
		require constant( 'HYRV_PLUGIN_ROOT_DIR' ) . 'hide-youtube-related-videos.php';
	}

	protected function tearDown() {
		Monkey::tearDownWP();
		parent::tearDown();
	}

	function test_dummy() {
		$a = true;
		$this->assertTrue( $a );
	}

}
