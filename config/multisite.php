<?php

use Innocode\WPConfig\Env;

define( 'WP_ALLOW_MULTISITE', true );

if ( Env::get( 'MULTISITE' ) ) {
    define( 'MULTISITE', true );
    define( 'SUBDOMAIN_INSTALL', false );
    define( 'DOMAIN_CURRENT_SITE', Env::get( 'DOMAIN_CURRENT_SITE' ) );
    define( 'PATH_CURRENT_SITE', '/' );
    define( 'SITE_ID_CURRENT_SITE', 1 );
    define( 'BLOG_ID_CURRENT_SITE', 1 );

    if ( Env::get( 'NOBLOGREDIRECT' ) ) {
        define( 'NOBLOGREDIRECT', Env::get( 'NOBLOGREDIRECT' ) );
    }
}
