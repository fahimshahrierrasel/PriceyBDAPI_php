<?php
/**
 * Created by PhpStorm.
 * User: fahim
 * Date: 8/23/16
 * Time: 11:38 AM
 */
require 'vendor/autoload.php';
require 'plugins/NotORM.php';

\Slim\Slim::registerAutoloader();

$application = new \Slim\Slim();

$application->get('/', function (){

    echo "<h1>Welcome to pricybd api</h1>";

});
$application->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$application->run();