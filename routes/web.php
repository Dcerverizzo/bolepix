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

use App\Http\Controllers\BoletoController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/gerar-boleto', 'BoletoController@index');
$router->get('/gerar-boleto1', 'BoletoController@gerarBoleto');
