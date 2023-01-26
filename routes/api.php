<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Rotas para o teste*/

Route::post('/clienteCadastro', 'App\Http\Controllers\ApiController@getAll');
Route::get('/cliente/{id}', 'App\Http\Controllers\ApiController@getClient');
Route::put('/cliente/{id}', 'App\Http\Controllers\ApiController@updateClient');
Route::delete('/cliente/{id}','App\Http\Controllers\ApiController@deleteClient');
Route::get('/consulta/final-placa/{numero}', 'App\Http\Controllers\ApiController@getPlacas');

