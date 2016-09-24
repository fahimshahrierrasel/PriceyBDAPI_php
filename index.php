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
header("Access-Control-Allow-Origin: *");

\Slim\Slim::registerAutoloader();

$application = new \Slim\Slim();

// Database Information
$DB_HOsT = 'localhost:8889';
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

// Start Page of the API
// (get) http://localhost/
$application->get('/', function () {

    print ("<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                    <title>Pricybd Api</title>
                    <style type=\"text/css\">
                    @import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700); * { box-sizing: border-box; } body { font-family: 'Lato', sans-serif; background: #222; } .logo { width: 300px; height: 60px; pOsition: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; } .box { width: 60px; height: 60px; border: 1px solid rgba(0,0,0,.5); border-radius: 10px; background: #0074D9; color: #fff; font-size: 26px; font-BodyWeight: 700; line-height: 60px; text-align: center; font-style: italic; pOsition: absolute; left: 0%; z-index: 2; animation: test 2s; } .box:after { content: \"\"; display: block; height: 90%; width: 1px; background: #fff; pOsition: absolute; top: 0; right: -10px; bottom: 0; margin: auto; animation: expand 2s; } .text { height: 60px; color: #fff; padding-left: 80px; line-height: 60px; font-size: 30px; font-BodyWeight: 100; animation: fade 2.5s; } @keyframes expand { 0% { height: 0; } 40% { height: 0; } 60% { height: 80%; } } @keyframes test { 0% { transform: scale(0); left: 39%; } 40% { transform: scale(1); left: 39%;} 60% { transform: scale(1); left: 39%;} 100% { left: 0%; } } @keyframes fade { 0% { opacity: 0; } 65% { opacity: 0; padding-left: 70px; } 100% { opacity: 1; padding-left: 80px; } }
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

// Simple hello to you
// (get) http://localhost/Fahim Shahrier Rasel
$application->get('/hello/:name', function ($name) {
    print ("<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                    <title>Pricybd Api</title>
                    <style type=\"text/css\">
                    @import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700); * { box-sizing: border-box; } body { font-family: 'Lato', sans-serif; background: #222; } .logo { width: 600px; height: 60px; pOsition: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; } .box { width: 130px; height: 60px; border: 1px solid rgba(0,0,0,.5); border-radius: 10px; background: #0074D9; color: #fff; font-size: 26px; font-BodyWeight: 700; line-height: 60px; text-align: center; font-style: italic; pOsition: absolute; left: 0%; z-index: 2; animation: test 2s; } .box:after { content: \"\"; display: block; height: 90%; width: 1px; background: #fff; pOsition: absolute; top: 0; right: -10px; bottom: 0; margin: auto; animation: expand 2s; } .text { height: 60px; color: #fff; margin-left: 80px; padding-left: 80px; line-height: 60px; font-size: 30px; font-BodyWeight: 100; animation: fade 2.5s; } @keyframes expand { 0% { height: 0; } 40% { height: 0; } 60% { height: 80%; } } @keyframes test { 0% { transform: scale(0); left: 39%; } 40% { transform: scale(1); left: 39%;} 60% { transform: scale(1); left: 39%;} 100% { left: 0%; } } @keyframes fade { 0% { opacity: 0; } 65% { opacity: 0; padding-left: 70px; } 100% { opacity: 1; padding-left: 80px; } }
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

// All devices info with their full information
// (get) http://localhost/devices
$application->get('/devices', function() use ($application, $databaseObject){
    $mobiles = array();

    foreach ($databaseObject->MobileFeatures() as $mobile)
    {
        $mobiles[] = array(
            'ModelName' => utf8_encode($mobile['ModelName']),
            'NetTechnology' => utf8_encode($mobile['NetTechnology']),
            '2GBands' => utf8_encode($mobile['2GBands']),
            '3GBands' => utf8_encode($mobile['3GBands']),
            '4GBands' => utf8_encode($mobile['4GBands']),
            'Speed' => utf8_encode($mobile['Speed']),
            'GPRS' => utf8_encode($mobile['GPRS']),
            'EDGE' => utf8_encode($mobile['EDGE']),
            'Announced' => utf8_encode($mobile['Announced']),
            'Status' => utf8_encode($mobile['Status']),
            'BodyDimensions' => utf8_encode($mobile['BodyDimensions']),
            'BodyWeight' => utf8_encode($mobile['BodyWeight']),
            'SimType' => utf8_encode($mobile['SimType']),
            'BodyFeatures' => utf8_encode($mobile['BodyFeatures']),
            'DisplayType' => utf8_encode($mobile['DisplayType']),
            'DisplaySize' => utf8_encode($mobile['DisplaySize']),
            'DisplayResolution' => utf8_encode($mobile['DisplayResolution']),
            'DisplayProtection' => utf8_encode($mobile['DisplayProtection']),
            'DisplayFeatures' => utf8_encode($mobile['DisplayFeatures']),
            'Os' => utf8_encode($mobile['Os']),
            'Chipset' => utf8_encode($mobile['Chipset']),
            'CpuType' => utf8_encode($mobile['CpuType']),
            'Gpu' => utf8_encode($mobile['Gpu']),
            'MemoryRam' => utf8_encode($mobile['MemoryRam']),
            'MemoryOption' => utf8_encode($mobile['MemoryOption']),
            'MemoryExpand' => utf8_encode($mobile['MemoryExpand']),
            'PrimaryCameraFeatures' => utf8_encode($mobile['PrimaryCameraFeatures']),
            'Video' => utf8_encode($mobile['Video']),
            'SecondaryCameraFeatures' => utf8_encode($mobile['SecondaryCameraFeatures']),
            'CameraFeatures' => utf8_encode($mobile['CameraFeatures']),
            'SoundAlertTypes' => utf8_encode($mobile['SoundAlertTypes']),
            'SoundLoudspeaker' => utf8_encode($mobile['SoundLoudspeaker']),
            'SoundJack' => utf8_encode($mobile['SoundJack']),
            'SoundFeatures' => utf8_encode($mobile['SoundFeatures']),
            'Wifi' => utf8_encode($mobile['Wifi']),
            'Bluetooth' => utf8_encode($mobile['Bluetooth']),
            'Gps' => utf8_encode($mobile['Gps']),
            'Nfc' => utf8_encode($mobile['Nfc']),
            'Radio' => utf8_encode($mobile['Radio']),
            'Usb' => utf8_encode($mobile['Usb']),
            'Sensors' => utf8_encode($mobile['Sensors']),
            'Messaging' => utf8_encode($mobile['Messaging']),
            'Browser' => utf8_encode($mobile['Browser']),
            'Java' => utf8_encode($mobile['Java']),
            'OtherFeatures' => utf8_encode($mobile['OtherFeatures']),
            'BatteryType' => utf8_encode($mobile['BatteryType']),
            'BatteryCapacity' => utf8_encode($mobile['BatteryCapacity']),
            'BatteryTalktime' => utf8_encode($mobile['BatteryTalktime']),
            'BatteryMusicplay' => utf8_encode($mobile['BatteryMusicplay']),
            'Colors' => utf8_encode($mobile['Colors']),
            'Performance' => utf8_encode($mobile['Performance'])
        );
    }
    $application->response()->header('Content-Type', 'application/json');
    echo json_encode(array('devices' => $mobiles));
});

// Single device details information
// (get) http://localhost/device/1            1 is the mobile_id
$application->get('/device/:mobile_id', function($mobile_id) use ($application, $databaseObject){

    $application->response()->header('Content-Type', 'application/json');
    $tempMobile = $databaseObject->MobileFeatures()->where("MobileID", $mobile_id);
    if ($mobile = $tempMobile->fetch())
    {
        echo json_encode(array(
            'ModelName' => utf8_encode($mobile['ModelName']),
            'NetTechnology' => utf8_encode($mobile['NetTechnology']),
            '2GBands' => utf8_encode($mobile['2GBands']),
            '3GBands' => utf8_encode($mobile['3GBands']),
            '4GBands' => utf8_encode($mobile['4GBands']),
            'Speed' => utf8_encode($mobile['Speed']),
            'GPRS' => utf8_encode($mobile['GPRS']),
            'EDGE' => utf8_encode($mobile['EDGE']),
            'Announced' => utf8_encode($mobile['Announced']),
            'Status' => utf8_encode($mobile['Status']),
            'BodyDimensions' => utf8_encode($mobile['BodyDimensions']),
            'BodyWeight' => utf8_encode($mobile['BodyWeight']),
            'SimType' => utf8_encode($mobile['SimType']),
            'BodyFeatures' => utf8_encode($mobile['BodyFeatures']),
            'DisplayType' => utf8_encode($mobile['DisplayType']),
            'DisplaySize' => utf8_encode($mobile['DisplaySize']),
            'DisplayResolution' => utf8_encode($mobile['DisplayResolution']),
            'DisplayProtection' => utf8_encode($mobile['DisplayProtection']),
            'DisplayFeatures' => utf8_encode($mobile['DisplayFeatures']),
            'Os' => utf8_encode($mobile['Os']),
            'Chipset' => utf8_encode($mobile['Chipset']),
            'CpuType' => utf8_encode($mobile['CpuType']),
            'Gpu' => utf8_encode($mobile['Gpu']),
            'MemoryRam' => utf8_encode($mobile['MemoryRam']),
            'MemoryOption' => utf8_encode($mobile['MemoryOption']),
            'MemoryExpand' => utf8_encode($mobile['MemoryExpand']),
            'PrimaryCameraFeatures' => utf8_encode($mobile['PrimaryCameraFeatures']),
            'Video' => utf8_encode($mobile['Video']),
            'SecondaryCameraFeatures' => utf8_encode($mobile['SecondaryCameraFeatures']),
            'CameraFeatures' => utf8_encode($mobile['CameraFeatures']),
            'SoundAlertTypes' => utf8_encode($mobile['SoundAlertTypes']),
            'SoundLoudspeaker' => utf8_encode($mobile['SoundLoudspeaker']),
            'SoundJack' => utf8_encode($mobile['SoundJack']),
            'SoundFeatures' => utf8_encode($mobile['SoundFeatures']),
            'Wifi' => utf8_encode($mobile['Wifi']),
            'Bluetooth' => utf8_encode($mobile['Bluetooth']),
            'Gps' => utf8_encode($mobile['Gps']),
            'Nfc' => utf8_encode($mobile['Nfc']),
            'Radio' => utf8_encode($mobile['Radio']),
            'Usb' => utf8_encode($mobile['Usb']),
            'Sensors' => utf8_encode($mobile['Sensors']),
            'Messaging' => utf8_encode($mobile['Messaging']),
            'Browser' => utf8_encode($mobile['Browser']),
            'Java' => utf8_encode($mobile['Java']),
            'OtherFeatures' => utf8_encode($mobile['OtherFeatures']),
            'BatteryType' => utf8_encode($mobile['BatteryType']),
            'BatteryCapacity' => utf8_encode($mobile['BatteryCapacity']),
            'BatteryTalktime' => utf8_encode($mobile['BatteryTalktime']),
            'BatteryMusicplay' => utf8_encode($mobile['BatteryMusicplay']),
            'Colors' => utf8_encode($mobile['Colors']),
            'Performance' => utf8_encode($mobile['Performance'])
        ), JSON_FORCE_OBJECT);
    }
    else
    {
        echo json_encode(array(
            'status' => false,
            'message' => "MobileID $mobile_id does not exist!"
        ));
    }
});


// Single device details information by model name
// (get) http://localhost/device/Device Model
$application->get('/devicebyname/:deviceModel', function($device_model) use ($application, $databaseObject){

    $application->response()->header('Content-Type', 'application/json');
    $tempMobile = $databaseObject->MobileFeatures()->where("ModelName", $device_model);
    if ($mobile = $tempMobile->fetch())
    {
        echo json_encode(array(
            'ModelName' => utf8_encode($mobile['ModelName']),
            'NetTechnology' => utf8_encode($mobile['NetTechnology']),
            '2GBands' => utf8_encode($mobile['2GBands']),
            '3GBands' => utf8_encode($mobile['3GBands']),
            '4GBands' => utf8_encode($mobile['4GBands']),
            'Speed' => utf8_encode($mobile['Speed']),
            'GPRS' => utf8_encode($mobile['GPRS']),
            'EDGE' => utf8_encode($mobile['EDGE']),
            'Announced' => utf8_encode($mobile['Announced']),
            'Status' => utf8_encode($mobile['Status']),
            'BodyDimensions' => utf8_encode($mobile['BodyDimensions']),
            'BodyWeight' => utf8_encode($mobile['BodyWeight']),
            'SimType' => utf8_encode($mobile['SimType']),
            'BodyFeatures' => utf8_encode($mobile['BodyFeatures']),
            'DisplayType' => utf8_encode($mobile['DisplayType']),
            'DisplaySize' => utf8_encode($mobile['DisplaySize']),
            'DisplayResolution' => utf8_encode($mobile['DisplayResolution']),
            'DisplayProtection' => utf8_encode($mobile['DisplayProtection']),
            'DisplayFeatures' => utf8_encode($mobile['DisplayFeatures']),
            'Os' => utf8_encode($mobile['Os']),
            'Chipset' => utf8_encode($mobile['Chipset']),
            'CpuType' => utf8_encode($mobile['CpuType']),
            'Gpu' => utf8_encode($mobile['Gpu']),
            'MemoryRam' => utf8_encode($mobile['MemoryRam']),
            'MemoryOption' => utf8_encode($mobile['MemoryOption']),
            'MemoryExpand' => utf8_encode($mobile['MemoryExpand']),
            'PrimaryCameraFeatures' => utf8_encode($mobile['PrimaryCameraFeatures']),
            'Video' => utf8_encode($mobile['Video']),
            'SecondaryCameraFeatures' => utf8_encode($mobile['SecondaryCameraFeatures']),
            'CameraFeatures' => utf8_encode($mobile['CameraFeatures']),
            'SoundAlertTypes' => utf8_encode($mobile['SoundAlertTypes']),
            'SoundLoudspeaker' => utf8_encode($mobile['SoundLoudspeaker']),
            'SoundJack' => utf8_encode($mobile['SoundJack']),
            'SoundFeatures' => utf8_encode($mobile['SoundFeatures']),
            'Wifi' => utf8_encode($mobile['Wifi']),
            'Bluetooth' => utf8_encode($mobile['Bluetooth']),
            'Gps' => utf8_encode($mobile['Gps']),
            'Nfc' => utf8_encode($mobile['Nfc']),
            'Radio' => utf8_encode($mobile['Radio']),
            'Usb' => utf8_encode($mobile['Usb']),
            'Sensors' => utf8_encode($mobile['Sensors']),
            'Messaging' => utf8_encode($mobile['Messaging']),
            'Browser' => utf8_encode($mobile['Browser']),
            'Java' => utf8_encode($mobile['Java']),
            'OtherFeatures' => utf8_encode($mobile['OtherFeatures']),
            'BatteryType' => utf8_encode($mobile['BatteryType']),
            'BatteryCapacity' => utf8_encode($mobile['BatteryCapacity']),
            'BatteryTalktime' => utf8_encode($mobile['BatteryTalktime']),
            'BatteryMusicplay' => utf8_encode($mobile['BatteryMusicplay']),
            'Colors' => utf8_encode($mobile['Colors']),
            'Performance' => utf8_encode($mobile['Performance'])
        ), JSON_FORCE_OBJECT);
    }
    else
    {
        echo json_encode(array(
            'status' => false,
            'message' => "MobileID $device_model does not exist!"
        ));
    }
});


// All devices short information
// (get) http://localhost/devicesshortinfo
$application->get('/devicesshortinfo', function() use ($application, $databaseObject){

    $mobiles = array();
    $application->response()->header('Content-Type', 'application/json');

    foreach ($databaseObject->MobileFeatures() as $mobile)
    {
        $mobiles[] = array(

            'MobileID' => utf8_encode($mobile['MobileID']),
            'ModelName' => utf8_encode($mobile['ModelName']),
            'Photo' => utf8_encode($mobile['Photo'])
        );
    }
    echo json_encode(array('devices'=>$mobiles));

});

// Get the sorted short information of the devices
// (get) http://localhost/directsortdevices/Brand/Samsung
$application->get('/directsortdevices/:sortKey/:sortValue', function($sortKey, $sortValue) use ($application, $databaseObject){

    $mobiles = array();
    $application->response()->header('Content-Type', 'application/json');
    $sortedMobiles = $databaseObject->MobileFeatures()->where($sortKey, $sortValue);
    foreach ($sortedMobiles as $mobile)
    {
        $mobiles[] = array(
            'MobileID' => utf8_encode($mobile['MobileID']),
            'ModelName' => utf8_encode($mobile['ModelName']),
            'Photo' => utf8_encode($mobile['Photo'])
        );
    }
    echo json_encode(array('devices'=>$mobiles));
});

// Get the sorted short information of the devices
// (get) http://localhost/sortdevices/MemoryRam/1.5
$application->get('/sortdevices/:sortKey/:sortValue', function($sortKey, $sortValue) use ($application, $databaseObject){

    $mobiles = array();
    $application->response()->header('Content-Type', 'application/json');

    $sortedMobiles = null;

    if($sortKey == "MemoryRam")
    {
        $sortedMobiles = $databaseObject->MobileFeatures()->where("MemoryRam >= ?",  $sortValue);
    }
    elseif($sortKey == "MemoryInternal")
    {
        $sortedMobiles = $databaseObject->MobileFeatures()->where("MemoryInternal >= ?",  $sortValue);
    }
    elseif ($sortKey == "Cpu")
    {
        $sortedMobiles = $databaseObject->MobileFeatures()->where("Cpu >= ?",  $sortValue);
    }
    elseif ($sortKey == "BatteryCapacity")
    {
        $sortedMobiles = $databaseObject->MobileFeatures()->where("BatteryCapacity >= ?",  $sortValue);
    }
    elseif ($sortKey == "PrimaryCamera")
    {
        $sortedMobiles = $databaseObject->MobileFeatures()->where("PrimaryCamera >= ?", $sortValue);
    }
    elseif ($sortKey == "SecondaryCamera")
    {
        $sortedMobiles = $databaseObject->MobileFeatures()->where("SecondaryCamera >= ?", $sortValue);
    }
    elseif ($sortKey == "DisplaySize")
    {
        $sortedMobiles = $databaseObject->MobileFeatures()->where("DisplaySize >= ?", $sortValue);
    }

    foreach ($sortedMobiles as $mobile)
    {
        $mobiles[] = array(
            'MobileID' => utf8_encode($mobile['MobileID']),
            'ModelName' => utf8_encode($mobile['ModelName']),
            'Photo' => utf8_encode($mobile['Photo'])
        );
    }
    echo json_encode(array('devices'=>$mobiles));
});


// Get all shops information
// (get) http://localhost/allshops
$application->get('/allshops', function() use ($application, $databaseObject){

    $shops = array();
    $application->response()->header('Content-Type', 'application/json');

    foreach ($databaseObject->ShopTable() as $shop)
    {
        $shops[] = array(
            'ShopID' => utf8_encode($shop['ShopID']),
            'ShopName' => utf8_encode($shop['ShopName']),
            'ShopAddress' => utf8_encode($shop['ShopAddress']),
            'ShopEmail' => utf8_encode($shop['ShopEmail']),
            'ShopMobileNumber' => utf8_encode($shop['ShopMobileNumber']),
            'Latitude' => utf8_encode($shop['Latitude']),
            'Longitude' => utf8_encode($shop['Longitude'])
        );
    }
    echo json_encode(array('shops' => $shops));

});


// Get specific the shop information
// (get) http://localhost/shop/1            1 is the ShopID
$application->get('/shop/:shop_id', function($shopId) use ($application, $databaseObject){

    $application->response()->header('Content-Type', 'application/json');

    $tempShop = $databaseObject->ShopTable()->where('ShopID', $shopId);
    if ($shop = $tempShop->fetch())
    {
        echo json_encode(array(
            'ShopName' => utf8_encode($shop['ShopName']),
            'ShopAddress' => utf8_encode($shop['ShopAddress']),
            'ShopEmail' => utf8_encode($shop['ShopEmail']),
            'ShopMobileNumber' => utf8_encode($shop['ShopMobileNumber']),
            'Latitude' => utf8_encode($shop['Latitude']),
            'Longitude' => utf8_encode($shop['Longitude'])
        ), JSON_FORCE_OBJECT);
    }
    else
    {
        echo json_encode(array(
            'status' => false,
            'message' => "ShopID $shopId does not exist!"
        ));
    }

});

// Get the Price of the device
// (get) http://localhost/devicePrice/1            1 is the mobile_id
$application->get('/deviceprice/:mobile_id', function($mobile_id) use ($application, $databaseObject){

    $prices = array();
    $application->response()->header('Content-Type', 'application/json');

    $mobilePrices = $databaseObject->PriceTable()->order("Price")->where('MobileID', $mobile_id);
    foreach ($mobilePrices as $price)
    {
        $prices[] = array(
            'PriceID' => utf8_encode($price['PriceID']),
            'ShopID' => utf8_encode($price['ShopID']),
            'Price' => utf8_encode($price['Price'])
        );
    }
    echo json_encode(array('prices' => $prices));
});

// Get the Price of the device
// (get) http://localhost/sortbyprice/25000           25000 is the price which is upper bound of the price
$application->get('/sortbyprice/:price', function ($price) use($application, $databaseObject) {

    $application->response()->header('Content-Type', 'application/json');
    $sortedMobiles = array();
    $sortedPrices = $databaseObject->PriceTable()->group('MobileID')->where("Price <= ?", $price);
    foreach ($sortedPrices as $price)
    {
        $mobile = $databaseObject->MobileFeatures()->where('MobileID', $price['MobileID'])->fetch();
        $sortedMobiles[] = array(
            'MobileID' => utf8_encode($mobile['MobileID']),
            'ModelName' => utf8_encode($mobile['ModelName']),
            'Photo' => utf8_encode($mobile['Photo'])
        );
    }
    echo json_encode(array('devices' => $sortedMobiles));
});

// Get all Brands information
// (get) http://localhost/brands
$application->get('/brands', function () use($application, $databaseObject) {

    $application->response()->header('Content-Type', 'application/json');
    $brands = array();
    foreach ($databaseObject->Brand() as $brand)
    {
        $brands[] = array(
            'BrandID' => utf8_encode($brand['BrandID']),
            'BrandName' => utf8_encode($brand['BrandName']),
            'BrandImage' => utf8_encode($brand['BrandImage'])
        );
    }
    echo json_encode(array('brands' => $brands));

});

// Get all Devices name
// (get) http://localhost/alldevicesname
$application->get('/alldevicesname', function () use($application, $databaseObject) {

    $application->response()->header('Content-Type', 'application/json');
    $mobiles = array();
    foreach ($databaseObject->MobileFeatures() as $mobile)
    {
        $mobiles[] = utf8_encode($mobile['ModelName']);
    }
    echo json_encode(array('models' => $mobiles));
});



$application->run();
