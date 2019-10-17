<?php

use Innocode\WPConfig\Env;

define( 'DB_NAME', Env::get( 'DB_NAME' ) );
define( 'DB_USER', Env::get( 'DB_USER' ) );
define( 'DB_PASSWORD', Env::get( 'DB_PASSWORD' ) );
define( 'DB_HOST', Env::get( 'DB_HOST', 'localhost' ) );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );
