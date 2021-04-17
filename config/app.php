<?php

use Innocode\WPConfig\Env;

define( 'WP_HOME', Env::get( 'WP_HOME' ) ); // It is preferable not to set this value dynamically due to file inclusion vulnerabilities
define( 'WP_SITEURL', Env::get( 'WP_SITEURL', WP_HOME . '/wp' ) );

define( 'AUTOSAVE_INTERVAL', 180 );
define( 'WP_POST_REVISIONS', 15 );

define( 'ENVIRONMENT', Env::get( 'ENVIRONMENT', 'production' ) );

define( 'WP_CONTENT_DIR', dirname( __DIR__ ) . '/public/wp-content' );
define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );

define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );

define( 'AUTOMATIC_UPDATER_DISABLED', true );

//define( 'WP_DEFAULT_THEME', '' ); @TODO: set project theme name or remove
