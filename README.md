
# Wordpress Test Library

This is a library that provides a ready to use instance of PHPUNIT for unit testing in a wordpress
environment. It uses [Yoast/PHPUnit-Polyfills](https://github.com/Yoast/PHPUnit-Polyfills)  which allows it to run on any PHP version.   

## Requirements
- Working install of **Wordpress**.
- An empty database for testing.
- **PHPUNIT** must be installed on your system. 
- **Composer** must be installed on your system.  

## Getting Started

- Copy **```wp-test-lib```** to wherever you'd like.
- Open **```wp-test-lib```** in a terminal and run **```composer update```**. This will install all of the dependencies.
- Copy **```/tests```** to wherever you'd like your unit tests to reside.
- Modify **```/tests/wp-tests-config.php```** to setup your test DB credentials. Keep in mind, this should be an empty database. **Any data in this database will be destroyed every time the tests conclude**. **Do not use a production database.**
- Modify **```/tests/boot.php```** and setup any global options. You will also need to modify this file to point to the **```wp-test-lib/bootstrap.php```** file in whatever location you put it. 
- Modify **```/tests/phpunit.xml```** to add your test suites.
- Look at **```/tests/test-suite-1/test-1.php```** for an example on how to create unit tests

## Running Tests
To run your tests, open your **```/tests/```** directory in a command line and run **```phpunit```**
