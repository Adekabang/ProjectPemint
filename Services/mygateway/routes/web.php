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

//SMK by Raska
$router->get('/smk', 'SmkController@smkGet');
$router->post('/smk', 'SmkController@smkPost');
$router->put('/smk/{id}', 'SmkController@smkPut');
$router->delete('/smk/{id}', 'SmkController@smkDelete');

//Mapel by Fikri
$router->get('/mapel', 'MapelController@mapelGet');
$router->post('/mapel', 'MapelController@mapelPost');
$router->put('/mapel/{id}', 'MapelController@mapelPut');
$router->delete('/mapel/{id}', 'MapelController@mapelDelete');


//user by Kevin
$router->get('/users', 'UserController@userGet');
$router->post('/users', 'UserController@userPost');
$router->put('/users/{id}', 'UserController@userPut');
$router->delete('/users/{id}', 'UserController@userDelete');