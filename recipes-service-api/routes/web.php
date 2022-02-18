<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return ["name" => "Recipe Service", "port" => "9171","version" => $router->app->version()];
});

// API route group
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('recipes',            'RecipesServiceController@index');
    $router->get('countries',            'CountriesServiceController@index');

});












