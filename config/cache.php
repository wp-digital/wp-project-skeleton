<?php

use Innocode\WPConfig\Env;

/**
 * Connection Parameters
 * @link https://github.com/rhubarbgroup/redis-cache/wiki/Connection-Parameters
 */

define( 'WP_REDIS_HOST', Env::get( 'WP_REDIS_HOST', '127.0.0.1' ) );
define( 'WP_REDIS_PORT', Env::get( 'WP_REDIS_PORT', 6379 ) );
define( 'WP_REDIS_DATABASE', Env::get( 'WP_REDIS_DATABASE', 0 ) );

if ( Env::get( 'WP_REDIS_PASSWORD' ) ) {
    define( 'WP_REDIS_PASSWORD', Env::get( 'WP_REDIS_PASSWORD' ) );
}

define( 'WP_REDIS_TIMEOUT', Env::get( 'WP_REDIS_TIMEOUT', 1 ) );
define( 'WP_REDIS_READ_TIMEOUT', Env::get( 'WP_REDIS_READ_TIMEOUT', 1 ) );

if ( false !== Env::get( 'WP_REDIS_RETRY_INTERVAL' ) ) {
    define( 'WP_REDIS_RETRY_INTERVAL', Env::get( 'WP_REDIS_RETRY_INTERVAL' ) );
}

/**
 * Configuration Options
 * @link https://github.com/rhubarbgroup/redis-cache/wiki/Configuration-Options
 */

define( 'WP_REDIS_CLIENT', Env::get( 'WP_REDIS_CLIENT', 'phpredis' ) );
define( 'WP_REDIS_PREFIX', Env::get( 'WP_REDIS_PREFIX', 'wp' ) );
define( 'WP_REDIS_SELECTIVE_FLUSH', true );

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

/**
 * Replication & Clustering
 * @link https://github.com/rhubarbgroup/redis-cache/wiki/Replication-&-Clustering
 */

if ( Env::get( 'WP_REDIS_SERVERS' ) ) {
    define( 'WP_REDIS_SERVERS', explode( ',', Env::get( 'WP_REDIS_SERVERS' ) ) );
}

if ( Env::get( 'WP_REDIS_SENTINEL' ) ) {
    define( 'WP_REDIS_SENTINEL', Env::get( 'WP_REDIS_SENTINEL' ) );
}

if ( Env::get( 'WP_REDIS_SHARDS' ) ) {
    define( 'WP_REDIS_SHARDS', explode( ',', Env::get( 'WP_REDIS_SHARDS' ) ) );
}

if ( Env::get( 'WP_REDIS_CLUSTER' ) ) {
    define( 'WP_REDIS_CLUSTER', explode( ',', Env::get( 'WP_REDIS_CLUSTER' ) ) );
}
