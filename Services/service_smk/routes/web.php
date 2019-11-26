<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {     
    //Smk route     
    $router->get('smk', 'SmkController@index');     
    $router->get('smk/{id}', 'SmkController@show');     
    $router->post('smk', 'SmkController@store');     
    $router->put('smk/{id}', 'SmkController@update');     
    $router->delete('smk/{id}', 'SmkController@delete');      
});
