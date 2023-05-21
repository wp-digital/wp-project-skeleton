<?php

use Innocode\WPConfig\Env;

define( 'INNSTATS_PLAN', Env::get( 'INNSTATS_PLAN', 'free' ) );

if ( ENVIRONMENT === 'production' ) {
	if ( Env::get( 'PLAUSIBLE_API_ROOT' ) ) {
		define( 'PLAUSIBLE_API_ROOT', Env::get( 'PLAUSIBLE_API_ROOT' ) );
	}

	if ( Env::get( 'PLAUSIBLE_API_KEY' ) ) {
		define( 'PLAUSIBLE_API_KEY', Env::get( 'PLAUSIBLE_API_KEY' ) );
	}

	if ( Env::get( 'PLAUSIBLE_SITES_API_KEY' ) ) {
		define( 'PLAUSIBLE_SITES_API_KEY', Env::get( 'PLAUSIBLE_SITES_API_KEY' ) );
	}
}
