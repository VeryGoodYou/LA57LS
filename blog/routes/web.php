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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','IndexController@home')->name('home');
Route::get('home','IndexController@home')->name('name');
Route::get('gl','IndexController@gl')->name('gl');
Route::get('zl','IndexController@zl')->name('zl');
Route::get('gr','IndexController@gr')->name('gr');
Route::post('dl','IndexController@dl')->name('dl');
Route::post('zc','IndexController@zc')->name('zc');