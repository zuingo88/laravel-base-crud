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

Route::get('home', 'ospitiController@home')->name('home');

Route::get('/ospite{id}', 'ospitiController@ospite')->name('ospite');

Route::get('/createOspite', 'ospitiController@createOspite')->name('createOspite');

Route::post('/storeOspite', 'ospitiController@storeOspite')->name('storeOspite');