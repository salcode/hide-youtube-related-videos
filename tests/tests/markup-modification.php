<?php

use Brain\Monkey;
use Brain\Monkey\Functions;


class Hide_YouTube_Relative_Vidoes_TestCase extends PHPUnit_Framework_TestCase {

	// Example Video Details.
	const ORIG_VIDEO_URL     = 'https://www.youtube.com/watch?v=cSj-etJL3nI';
	const ORIG_VIDEO_EMBED   = '<iframe width="500" height="281" src="https://www.youtube.com/embed/cSj-etJL3nI?feature=oembed" frameborder="0" allowfullscreen></iframe>';
	const NO_REL_VIDEO_EMBED = '<iframe width="500" height="281" src="https://www.youtube.com/embed/cSj-etJL3nI?wmode=transparent&amp;rel=0&amp;feature=oembed" frameborder="0" allowfullscreen></iframe>';

	// Example Playlist Details.
	const ORIG_PLAYLIST_URL     = 'https://www.youtube.com/playlist?list=PLwJS-G75vM7kFO-yUkyNphxSIdbi_1NKX';
	const ORIG_PLAYLIST_EMBED   = '<iframe width="500" height="281" src="https://www.youtube.com/embed/videoseries?list=PLwJS-G75vM7kFO-yUkyNphxSIdbi_1NKX" frameborder="0" allowfullscreen></iframe>';
	const NO_REL_PLAYLIST_EMBED = '<iframe width="500" height="281" src="https://www.youtube.com/embed/videoseries?wmode=transparent&amp;rel=0&amp;list=PLwJS-G75vM7kFO-yUkyNphxSIdbi_1NKX" frameborder="0" allowfullscreen></iframe>';

	protected function setUp() {
		parent::setUp();
		Monkey::setUpWP();
	}

	protected function tearDown() {
		Monkey::tearDownWP();
		parent::tearDown();
	}

	function test_oembed_video_add_no_rel() {
		$result = hide_youtube_related_videos(
			self::ORIG_VIDEO_EMBED,
			self::ORIG_VIDEO_URL,
			array()
		);
		$this->assertEquals( self::NO_REL_VIDEO_EMBED, $result );
	}

	function test_oembed_playlist_add_no_rel() {
		$result = hide_youtube_related_videos(
			self::ORIG_PLAYLIST_EMBED,
			self::ORIG_PLAYLIST_URL,
			array()
		);
		$this->assertEquals( self::NO_REL_PLAYLIST_EMBED, $result );
	}

}
