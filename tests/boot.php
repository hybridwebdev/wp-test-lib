<?php
/**
        phpunit.xml should point to this file for the bootstrap parameter. 
        First, define setup parameters for the test library. 
        Then require the boostrap file of the test library.
*/
$dir = dirname( __FILE__ );

define('WP_TESTS_CONFIG_FILE_PATH', "{$dir}/wp-tests-config.php" );
/**
        $bootstrapFile should point to wherever wp-test-lib is.
        This example would point to /plugins/wp-test-lib/bootstrap.php
*/
$bootstrapFile = "{$dir}/../../wp-test-lib/bootstrap.php";

$GLOBALS[ 'wp_tests_options' ] = [
        'active_plugins' => [
                'my-plugin/my-plugin-file.php'
        ],
];

require($bootstrapFile);