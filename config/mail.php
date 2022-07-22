<?php

use Innocode\WPConfig\Env;
use Innocode\WPConfig\Helpers;

if ( Helpers::is_mailgun_enabled() ) {
	define( 'MAILGUN_APIKEY', Env::get( 'MAILGUN_APIKEY' ) );
	define( 'MAILGUN_REGION', Env::get( 'MAILGUN_REGION', 'eu' ) );
	define( 'MAILGUN_USEAPI', Env::get( 'MAILGUN_USEAPI', '1' ) );
	define( 'MAILGUN_DOMAIN', Env::get( 'MAILGUN_DOMAIN' ) );
	define( 'MAILGUN_FROM_ADDRESS', Env::get( 'MAILGUN_FROM_ADDRESS' ) );
	define( 'MAIL_FROM_ADDRESS', Env::get( 'MAIL_FROM_ADDRESS', MAILGUN_FROM_ADDRESS ) );
} elseif ( Env::get( 'MAIL_FROM_ADDRESS' ) ) {
	define( 'MAIL_FROM_ADDRESS', Env::get( 'MAIL_FROM_ADDRESS' ) );
}

if ( Env::get( 'MAIL_FROM_NAME' ) ) {
	define( 'MAIL_FROM_NAME', Env::get( 'MAIL_FROM_NAME' ) );
}

if ( Env::get( 'MAILGUN_API_KEY' ) ) {
	define( 'MAILGUN_API_KEY', Env::get( 'MAILGUN_API_KEY' ) );
}
