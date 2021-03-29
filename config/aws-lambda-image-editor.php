<?php

use Innocode\WPConfig\Env;
use Innocode\WPConfig\Helpers;

if ( Env::get( 'AWS_LAMBDA_IMAGE_BUCKET' ) ) {
    define( 'AWS_LAMBDA_IMAGE_BUCKET', Env::get( 'AWS_LAMBDA_IMAGE_BUCKET' ) );
} elseif ( Helpers::is_s3_uploads_enabled() ) {
    define( 'AWS_LAMBDA_IMAGE_BUCKET', Env::get( 'S3_UPLOADS_BUCKET' ) );
}

define( 'AWS_LAMBDA_IMAGE_KEY', Env::get( 'AWS_LAMBDA_IMAGE_KEY' ) );
define( 'AWS_LAMBDA_IMAGE_SECRET', Env::get( 'AWS_LAMBDA_IMAGE_SECRET' ) );
define( 'AWS_LAMBDA_IMAGE_REGION', Env::get( 'AWS_LAMBDA_IMAGE_REGION' ) );

if ( Env::get( 'AWS_LAMBDA_IMAGE_FUNCTION' ) ) {
    define( 'AWS_LAMBDA_IMAGE_FUNCTION', Env::get( 'AWS_LAMBDA_IMAGE_FUNCTION' ) );
}
