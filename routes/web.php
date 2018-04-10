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

//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});


$router->get('/', function() use ($router) {
    return "Lumen RESTful API";
});

$router->group(['prefix' => 'api/v1'], function($router)
{
    $router->get('book','BookController@index');

    $router->get('book/{id}','BookController@getbook');

    $router->post('book','BookController@createBook');

    $router->put('book/{id}','BookController@updateBook');

    $router->delete('book/{id}','BookController@deleteBook');
});