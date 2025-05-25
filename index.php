<?php
require_once __DIR__ . '/inc/send-update.php';

Kirby::plugin( 'florianziegler/websub', [
	'hooks' => [
		'page.changeStatus:after' => function ( $newPage ) {
			if ( $newPage->isPublished() ) {
				\florianziegler\websub\send_update();
			}
		},

		'page.update:after' => function ( $newPage ) {
			if ( $newPage->isPublished() ) {
				\florianziegler\websub\send_update();
			}
		},
	],
] );