<?php

use Innocode\WPConfig;

require_once dirname( __DIR__ ) . '/vendor/autoload.php';

WPConfig\Helpers::ssl_fix();

$config = new WPConfig\Config( dirname( __DIR__ ) );
$config->init();
$table_prefix = WPConfig\Env::get( 'DB_PREFIX', 'wp_' );
$config->load();

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/wp/' );
}

require_once ABSPATH . 'wp-settings.php';
