<?php

use Innocode\WPConfig\Env;
use Innocode\WPConfig\Helpers;

if ( Helpers::is_debug_enabled() ) {
	define( 'WP_DEBUG', true );
	define( 'SCRIPT_DEBUG', true );
	define( 'SAVEQUERIES', true );
	define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
} else {
	define( 'WP_DEBUG', Env::get( 'WP_DEBUG', false ) );
	define( 'SCRIPT_DEBUG', Env::get( 'SCRIPT_DEBUG', false ) );
	define( 'SAVEQUERIES', Env::get( 'SAVEQUERIES', false ) );
	define( 'WP_DISABLE_FATAL_ERROR_HANDLER', Env::get( 'WP_DISABLE_FATAL_ERROR_HANDLER', false ) );
	define( 'WP_DEBUG_LOG', Env::get( 'WP_DEBUG_LOG', false ) );
	define( 'WP_DEBUG_DISPLAY', Env::get( 'WP_DEBUG_DISPLAY', false ) );
}
