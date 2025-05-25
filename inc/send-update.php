<?php
namespace florianziegler\websub;

/**
 * Send POST request to the hub.
 */
function send_update() {
	$kirby = \Kirby::instance();
	$hub_url = $kirby->option( 'florianziegler.websub.hubUrl' );
	$feed_url = $kirby->option( 'florianziegler.websub.feedUrl' );
	if( ! empty( $hub_url ) && ! empty( $feed_url ) ) {
		$url = rtrim( $hub_url, '/' ) . '/' . '?hub.mode=publish&hub.url=' . $feed_url;
		$response = \Remote::request(
			$url, [
			'method' => 'POST',
		]);
	}
}