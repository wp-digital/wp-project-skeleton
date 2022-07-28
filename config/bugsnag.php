<?php

use Innocode\WPConfig\Env;

define( 'BUGSNAG_API_KEY', Env::get( 'BUGSNAG_API_KEY' ) );

if ( Env::get( 'BUGSNAG_FE_API_KEY' ) ) {
	define( 'BUGSNAG_FE_API_KEY', Env::get( 'BUGSNAG_FE_API_KEY' ) );
	define( 'BUGSNAG_FE_VERSION', Env::get( 'BUGSNAG_FE_VERSION', 'v7' ) );
}
