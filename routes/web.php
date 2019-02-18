<?php

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

Route::get('/h5ai/{url}', ['as' => 'myh5ai', 'uses' => 'myh5aiController@test'])->where('url', '(.*)');

Route::get('/', ['as' => 'home', 'uses' => 'myh5aiController@home']);

Route::get('/text/{file}', ['as' => 'text', 'uses' => 'myh5aiController@read'])->where('file', '(.*)');
