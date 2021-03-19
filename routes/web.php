<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', 'App\Http\Controllers\CalculadoraController@menu');

Route::get('/soma', 'App\Http\Controllers\CalculadoraController@soma');
Route::get('/subtracao', 'App\Http\Controllers\CalculadoraController@sub');
Route::get('/multiplicacao', 'App\Http\Controllers\CalculadoraController@mult');
Route::get('/divisao', 'App\Http\Controllers\CalculadoraController@div');

Route::post('/calcular-soma','App\Http\Controllers\CalculadoraController@somar')->name('somar');
Route::post('/calcular-subtração', 'App\Http\Controllers\CalculadoraController@subtrair')->name('subtrair');
Route::post('/calcular-multipicação', 'App\Http\Controllers\CalculadoraController@multiplicar')->name('multiplicar');
Route::post('/calcular-divisão', 'App\Http\Controllers\CalculadoraController@dividir')->name('dividir');
