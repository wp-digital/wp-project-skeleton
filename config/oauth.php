<?php

use Innocode\WPConfig\Env;

define( 'GITHUB_OAUTH_CLIENT_ID', Env::get( 'GITHUB_OAUTH_CLIENT_ID' ) );
define( 'GITHUB_OAUTH_CLIENT_SECRET', Env::get( 'GITHUB_OAUTH_CLIENT_SECRET' ) );
define( 'GITHUB_OAUTH_ORGANIZATION', Env::get( 'GITHUB_OAUTH_ORGANIZATION' ) );

$teams2roles = [];

foreach ( explode(
    ';', trim( Env::get( 'GITHUB_OAUTH_TEAMS2ROLES' ), ';' )
) as $role_teams ) {
    list( $role, $teams ) = explode( '=', $role_teams, 2 );
    $teams2roles[ $role ] = array_map(
        'intval',
        explode( ',', trim( $teams, ',' ) )
    );
}

define( 'GITHUB_OAUTH_TEAMS2ROLES', $teams2roles );
