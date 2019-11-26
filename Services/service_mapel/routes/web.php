<?php

/*
|--------------------------------------------------------------------------
| routerlication Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an routerlication.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {     
    //Mapel route     
    $router->get('mapel', 'MapelController@index');     
    $router->get('mapel/{id}', 'MapelController@show');     
    $router->post('mapel', 'MapelController@store');     
    $router->put('mapel/{id}', 'MapelController@update');     
    $router->delete('mapel/{id}', 'MapelController@delete');      
});