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

$application->run();