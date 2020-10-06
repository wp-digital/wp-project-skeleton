<?php

use Innocode\WPConfig\Env;

define( 'WP_REDIS_CLIENT', Env::get( 'WP_REDIS_CLIENT', 'phpredis' ) );

if ( Env::get( 'WP_REDIS_PREFIX' ) ) {
    define( 'WP_REDIS_PREFIX', Env::get( 'WP_REDIS_PREFIX' ) );
    define( 'WP_REDIS_SELECTIVE_FLUSH', true );
}

if ( false !== Env::get( 'WP_REDIS_MAXTTL' ) ) {
    define( 'WP_REDIS_MAXTTL', Env::get( 'WP_REDIS_MAXTTL' ) );
}

if ( false !== Env::get( 'WP_REDIS_METRICS_MAX_TIME' ) ) {
    define( 'WP_REDIS_METRICS_MAX_TIME', Env::get( 'WP_REDIS_METRICS_MAX_TIME' ) );
}

define( 'WP_REDIS_DISABLED', Env::get( 'WP_REDIS_DISABLED', false ) );
define( 'WP_REDIS_GRACEFUL', Env::get( 'WP_REDIS_GRACEFUL', true ) );

if ( class_exists( 'Redis' ) ) {
    switch ( Env::get( 'WP_REDIS_SERIALIZER' ) ) {
        case 'Redis::SERIALIZER_PHP':
            define( 'WP_REDIS_SERIALIZER', Redis::SERIALIZER_PHP );

            break;
        case 'Redis::SERIALIZER_IGBINARY':
            define( 'WP_REDIS_SERIALIZER', Redis::SERIALIZER_IGBINARY );

            break;
    }
}

if ( ! defined( 'WP_REDIS_SERIALIZER' ) ) {
    define( 'WP_REDIS_IGBINARY', Env::get( 'WP_REDIS_IGBINARY', false ) );
}

define( 'WP_REDIS_DISABLE_BANNERS', true );
define( 'WP_REDIS_DISABLE_METRICS', Env::get( 'WP_REDIS_DISABLE_METRICS', false ) );
