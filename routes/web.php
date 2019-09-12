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

$router->get('/event/search', function () use ($router) {
    return view('event.index');
});

$router->get('/event', function () use ($router) {
    return view('event.event');
});

$router->get('/', [
    'as' => 'index', 'uses' => 'IndexController@index'
]);

 $router->group(['prefix'=>'api/v1'], function() use($router){
    $router->get('/events', 'EventController@index');
    $router->get('/event/{id}', 'ProductController@show');
    $router->put('/event/{id}', 'ProductController@update');
    $router->delete('/event/{id}', 'ProductController@destroy');
    $router->post('/event', [
        'as' => 'event', 'uses' => 'eventController@create'
    ]);
    $router->get('/events/search/{term}', 'EventController@search');

    
});
