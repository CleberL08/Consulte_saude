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

Route::get('/', 'PopularSelectController@index');
Route::get('load_cidades', 'PopularSelectController@loadCidades')->name('load_cidades');
Route::post('load_api', 'ConsumindoApiController@loadApi')->name('load_api');
Route::get ('paises_infectados', 'ExtrairDadosController@index')->name('paises_infectados');


Route::get('/consumindo', 'ConsumindoApiController@estados');





