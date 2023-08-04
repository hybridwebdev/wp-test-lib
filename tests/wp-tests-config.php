<?php

/**
    set ABSPATH to point to your wordpress dir
*/
define('ABSPATH', dirname( __FILE__ ) . "/../../../../" );

define( 'WP_DEBUG', false );

$table_prefix = 'wptests_'; 

/**
    WARNING WARNING WARNING!
    tests DROPS ALL TABLES in the database. DO NOT use a production database
*/

define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'WP_TESTS_DOMAIN', 'localhost' );
define( 'WP_TESTS_EMAIL', 'admin@example.org' );
define( 'WP_TESTS_TITLE', 'Test Blog' );

define( 'WP_PHP_BINARY', 'php' );

define( 'WPLANG', '' );