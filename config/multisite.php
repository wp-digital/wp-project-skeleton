<?php

use Innocode\WPConfig\Env;
use Innocode\WPConfig\Helpers;

define( 'WP_ALLOW_MULTISITE', true );

if ( Helpers::is_multisite() ) {
	define( 'MULTISITE', true );
	define( 'SUBDOMAIN_INSTALL', true );
	define( 'DOMAIN_CURRENT_SITE', Env::get( 'DOMAIN_CURRENT_SITE' ) );
	define( 'PATH_CURRENT_SITE', '/' );
	define( 'SITE_ID_CURRENT_SITE', 1 );
	define( 'BLOG_ID_CURRENT_SITE', 1 );

	if ( Env::get( 'NOBLOGREDIRECT' ) ) {
		define( 'NOBLOGREDIRECT', Env::get( 'NOBLOGREDIRECT' ) );
	}

	define( 'WP_NR_IS_NETWORK_ACTIVE', true );
}
