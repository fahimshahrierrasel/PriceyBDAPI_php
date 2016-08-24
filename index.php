<?php
/**
 * Created by PhpStorm.
 * User: fahim
 * Date: 8/23/16
 * Time: 11:38 AM
 */
require 'vendor/autoload.php';
require 'plugins/NotORM.php';
ini_set('memory_limit', '-1');
set_time_limit(0);

\Slim\Slim::registerAutoloader();

$application = new \Slim\Slim();


$DB_HOST = 'localhost:8889';
$DB_USER = 'root';
$DB_PASSWORD = 'root';
$DB_NAME = 'PRICEYBD';
$DB_method = 'mysql:dbname=';

// Database reference add.
$databaseReference = $DB_method.$DB_NAME;

// Database driver intialize for connecting the database.
$databaseDiverInitialize = new PDO($databaseReference, $DB_USER, $DB_PASSWORD);

// Database Object for doing database operations.
$databaseObject = new NotORM($databaseDiverInitialize);


$application->get('/', function () {

    print ("<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                    <title>Pricybd Api</title>
                    <<style type=\"text/css\">
                    @import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700); * { box-sizing: border-box; } body { font-family: 'Lato', sans-serif; background: #222; } .logo { width: 300px; height: 60px; position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; } .box { width: 60px; height: 60px; border: 1px solid rgba(0,0,0,.5); border-radius: 10px; background: #0074D9; color: #fff; font-size: 26px; font-weight: 700; line-height: 60px; text-align: center; font-style: italic; position: absolute; left: 0%; z-index: 2; animation: test 2s; } .box:after { content: \"\"; display: block; height: 90%; width: 1px; background: #fff; position: absolute; top: 0; right: -10px; bottom: 0; margin: auto; animation: expand 2s; } .text { height: 60px; color: #fff; padding-left: 80px; line-height: 60px; font-size: 30px; font-weight: 100; animation: fade 2.5s; } @keyframes expand { 0% { height: 0; } 40% { height: 0; } 60% { height: 80%; } } @keyframes test { 0% { transform: scale(0); left: 39%; } 40% { transform: scale(1); left: 39%;} 60% { transform: scale(1); left: 39%;} 100% { left: 0%; } } @keyframes fade { 0% { opacity: 0; } 65% { opacity: 0; padding-left: 70px; } 100% { opacity: 1; padding-left: 80px; } }
                    </style>
                </head>
                <body>
                    <div class=\"logo\">
                        <div class=\"box\">PBD</div>
                        <div class=\"text\"><span class=\"first\">PriceyBD</span> <span class=\"second\">API</span>
                    </div>
                </div>
            </body>
            </html>
            ");

});
$application->get('/hello/:name', function ($name) {
    print ("<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                    <title>Pricybd Api</title>
                    <<style type=\"text/css\">
                    @import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700); * { box-sizing: border-box; } body { font-family: 'Lato', sans-serif; background: #222; } .logo { width: 600px; height: 60px; position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; } .box { width: 130px; height: 60px; border: 1px solid rgba(0,0,0,.5); border-radius: 10px; background: #0074D9; color: #fff; font-size: 26px; font-weight: 700; line-height: 60px; text-align: center; font-style: italic; position: absolute; left: 0%; z-index: 2; animation: test 2s; } .box:after { content: \"\"; display: block; height: 90%; width: 1px; background: #fff; position: absolute; top: 0; right: -10px; bottom: 0; margin: auto; animation: expand 2s; } .text { height: 60px; color: #fff; margin-left: 80px; padding-left: 80px; line-height: 60px; font-size: 30px; font-weight: 100; animation: fade 2.5s; } @keyframes expand { 0% { height: 0; } 40% { height: 0; } 60% { height: 80%; } } @keyframes test { 0% { transform: scale(0); left: 39%; } 40% { transform: scale(1); left: 39%;} 60% { transform: scale(1); left: 39%;} 100% { left: 0%; } } @keyframes fade { 0% { opacity: 0; } 65% { opacity: 0; padding-left: 70px; } 100% { opacity: 1; padding-left: 80px; } }
                    </style>
                </head>
                <body>
                    <div class=\"logo\">
                        <div class=\"box\">Hello</div>
                        <div class=\"text\"><span class=\"first\">$name</span>
                    </div>
                </div>
            </body>
            </html>
            ");
});


$application->get('/devices', function() use ($application, $databaseObject){
    $mobiles = array();

    foreach ($databaseObject->MOBILE_FEATURES() as $mobile)
    {
        $mobiles[] = array(

            'MOBILE_ID' => utf8_encode($mobile['MOBILE_ID']),
            'BRAND' => utf8_encode($mobile['BRAND']),
            'MODEL_NAME' => utf8_encode($mobile['MODEL_NAME']),
            'NETWORK' => utf8_encode($mobile['NETWORK']),
            'LAUNCH' => utf8_encode($mobile['LAUNCH']),
            'DISPLAY_SIZE' => utf8_encode($mobile['DISPLAY_SIZE']),
            'DISPLAY_RESOLUTION' => utf8_encode($mobile['DISPLAY_RESOLUTION']),
            'DISPLAY_TYPE' => utf8_encode($mobile['DISPLAY_TYPE']),
            'SIM_TYPE' => utf8_encode($mobile['SIM_TYPE']),
            'WEIGHT' => utf8_encode($mobile['WEIGHT']),
            'OS' => utf8_encode($mobile['OS']),
            'CHIPSET' => utf8_encode($mobile['CHIPSET']),
            'CPU' => utf8_encode($mobile['CPU']),
            'GPU' => utf8_encode($mobile['GPU']),
            'MEMORY_RAM' => utf8_encode($mobile['MEMORY_RAM']),
            'MEMORY_INTERNAL' => utf8_encode($mobile['MEMORY_INTERNAL']),
            'MEMORY_EXTERNAL' => utf8_encode($mobile['MEMORY_EXTERNAL']),
            'PRIMARY_CAMERA' => utf8_encode($mobile['PRIMARY_CAMERA']),
            'SECONDARY_CAMERA' => utf8_encode($mobile['SECONDARY_CAMERA']),
            'CAMERA_FEATURES' => utf8_encode($mobile['CAMERA_FEATURES']),
            'BATTERY_TYPE' => utf8_encode($mobile['BATTERY_TYPE']),
            'BLUETOOTH' => utf8_encode($mobile['BLUETOOTH']),
            'WIFI' => utf8_encode($mobile['WIFI']),
            'NFC' => utf8_encode($mobile['NFC']),
            'OTG' => utf8_encode($mobile['OTG']),
            'RADIO' => utf8_encode($mobile['RADIO']),
            'GPS' => utf8_encode($mobile['GPS']),
            'USB' => utf8_encode($mobile['USB']),
            'SENSORS' => utf8_encode($mobile['SENSORS']),
            'COLORS' => utf8_encode($mobile['COLORS']),
            'DIMENSIONS' => utf8_encode($mobile['DIMENSIONS']),
            'PHOTO'=> utf8_encode($mobile['PHOTO']),
            'THUMBNAIL' => utf8_encode($mobile['THUMBNAIL'])
        );
    }
    $application->response()->header('Content-Type', 'application/json');
    echo json_encode($mobiles);
});

$application->get('/device/:mobile_id', function($mobile_id) use ($application, $databaseObject){

    $application->response()->header('Content-Type', 'application/json');
    $tempMobile = $databaseObject->MOBILE_FEATURES()->where("MOBILE_ID", $mobile_id);
    if ($mobile = $tempMobile->fetch())
    {
        echo json_encode(array(

            'MOBILE_ID' => utf8_encode($mobile['MOBILE_ID']),
            'BRAND' => utf8_encode($mobile['BRAND']),
            'MODEL_NAME' => utf8_encode($mobile['MODEL_NAME']),
            'NETWORK' => utf8_encode($mobile['NETWORK']),
            'LAUNCH' => utf8_encode($mobile['LAUNCH']),
            'DISPLAY_SIZE' => utf8_encode($mobile['DISPLAY_SIZE']),
            'DISPLAY_RESOLUTION' => utf8_encode($mobile['DISPLAY_RESOLUTION']),
            'DISPLAY_TYPE' => utf8_encode($mobile['DISPLAY_TYPE']),
            'SIM_TYPE' => utf8_encode($mobile['SIM_TYPE']),
            'WEIGHT' => utf8_encode($mobile['WEIGHT']),
            'OS' => utf8_encode($mobile['OS']),
            'CHIPSET' => utf8_encode($mobile['CHIPSET']),
            'CPU' => utf8_encode($mobile['CPU']),
            'GPU' => utf8_encode($mobile['GPU']),
            'MEMORY_RAM' => utf8_encode($mobile['MEMORY_RAM']),
            'MEMORY_INTERNAL' => utf8_encode($mobile['MEMORY_INTERNAL']),
            'MEMORY_EXTERNAL' => utf8_encode($mobile['MEMORY_EXTERNAL']),
            'PRIMARY_CAMERA' => utf8_encode($mobile['PRIMARY_CAMERA']),
            'SECONDARY_CAMERA' => utf8_encode($mobile['SECONDARY_CAMERA']),
            'CAMERA_FEATURES' => utf8_encode($mobile['CAMERA_FEATURES']),
            'BATTERY_TYPE' => utf8_encode($mobile['BATTERY_TYPE']),
            'BLUETOOTH' => utf8_encode($mobile['BLUETOOTH']),
            'WIFI' => utf8_encode($mobile['WIFI']),
            'NFC' => utf8_encode($mobile['NFC']),
            'OTG' => utf8_encode($mobile['OTG']),
            'RADIO' => utf8_encode($mobile['RADIO']),
            'GPS' => utf8_encode($mobile['GPS']),
            'USB' => utf8_encode($mobile['USB']),
            'SENSORS' => utf8_encode($mobile['SENSORS']),
            'COLORS' => utf8_encode($mobile['COLORS']),
            'DIMENSIONS' => utf8_encode($mobile['DIMENSIONS']),
            'PHOTO'=> utf8_encode($mobile['PHOTO']),
            'THUMBNAIL' => utf8_encode($mobile['THUMBNAIL'])
        ));
    }
    else
    {
        echo json_encode(array(
            'status' => false,
            'message' => "MOBILE_ID $mobile_id does not exist!"
        ));
    }
});


$application->get('/devicesshortinfo', function() use ($application, $databaseObject){

    $mobiles = array();
    $application->response()->header('Content-Type', 'application/json');

    foreach ($databaseObject->MOBILE_FEATURES() as $mobile)
    {
        $mobiles[] = array(

            'MOBILE_ID' => utf8_encode($mobile['MOBILE_ID']),
            'BRAND' => utf8_encode($mobile['BRAND']),
            'MODEL_NAME' => utf8_encode($mobile['MODEL_NAME']),
            'THUMBNAIL' => utf8_encode($mobile['THUMBNAIL'])
        );
    }
    echo json_encode($mobiles);

});

$application->get('/sortdevices', function() use ($application, $databaseObject){

    $mobiles = array();
    $application->response()->header('Content-Type', 'application/json');
    $sortKey = $application->request->params('sort_key');
    $sortValue = $application->request->params('sort_value');
    $sortedMobiles = $databaseObject->MOBILE_FEATURES()->where($sortKey, $sortValue);
    foreach ($sortedMobiles as $mobile)
    {
        $mobiles[] = array(

            'MOBILE_ID' => utf8_encode($mobile['MOBILE_ID']),
            'BRAND' => utf8_encode($mobile['BRAND']),
            'MODEL_NAME' => utf8_encode($mobile['MODEL_NAME']),
            'THUMBNAIL' => utf8_encode($mobile['THUMBNAIL'])
        );
    }
    echo json_encode($mobiles);
});


$application->run();