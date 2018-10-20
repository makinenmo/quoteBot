<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$baseUrl = '/bots/quotes/';
$token = env('BOT_TOKEN');
$path = $baseUrl.$token;

$app->get($baseUrl.env('BOT_TOKEN'), function() use ($app) {
    return $app->welcome();
});

// $app->get($path, 'QuoteController@processRequest');
$app->post($baseUrl.env('BOT_TOKEN'), 'QuoteController@processRequest');
