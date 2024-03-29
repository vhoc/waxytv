<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get( '/test', 'MediaController@test' );

$router->post( '/play', 'MediaController@play' );

$router->get( '/plclear', 'MediaController@playlistClear' );

$router->get( '/stop', 'MediaController@stop' );

$router->get( '/initPlayer', 'MediaController@initPlayer' );

$router->get( 'kill', 'MediaController@kill' );
