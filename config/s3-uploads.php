<?php

use Innocode\WPConfig\Env;

define( 'S3_UPLOADS_BUCKET', Env::get( 'S3_UPLOADS_BUCKET' ) );
define( 'S3_UPLOADS_KEY', Env::get( 'S3_UPLOADS_KEY' ) );
define( 'S3_UPLOADS_SECRET', Env::get( 'S3_UPLOADS_SECRET' ) );
define( 'S3_UPLOADS_REGION', Env::get( 'S3_UPLOADS_REGION' ) );

if ( Env::get( 'S3_UPLOADS_BUCKET_URL' ) ) {
    define( 'S3_UPLOADS_BUCKET_URL', Env::get( 'S3_UPLOADS_BUCKET_URL' ) );
}

define( 'S3_UPLOADS_OBJECT_ACL', Env::get( 'S3_UPLOADS_OBJECT_ACL', 'private' ) );
