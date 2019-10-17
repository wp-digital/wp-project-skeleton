<?php

use Innocode\WPConfig\Env;

define( 'AUTH_KEY', Env::get( 'AUTH_KEY' ) );
define( 'SECURE_AUTH_KEY', Env::get( 'SECURE_AUTH_KEY' ) );
define( 'LOGGED_IN_KEY', Env::get( 'LOGGED_IN_KEY' ) );
define( 'NONCE_KEY', Env::get( 'NONCE_KEY' ) );
define( 'AUTH_SALT', Env::get( 'AUTH_SALT' ) );
define( 'SECURE_AUTH_SALT', Env::get( 'SECURE_AUTH_SALT' ) );
define( 'LOGGED_IN_SALT', Env::get( 'LOGGED_IN_SALT' ) );
define( 'NONCE_SALT', Env::get( 'NONCE_SALT' ) );
