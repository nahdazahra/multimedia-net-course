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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/image','ImageController@index')->name('image.index');
Route::post('/image','ImageController@store')->name('image.convert');
Route::post('/image/download','ImageController@download')->name('image.download');

Route::get('/audio','AudioController@index')->name('audio.index');
Route::post('/audio','AudioController@store')->name('audio.convert');
Route::post('/audio/download','AudioController@download')->name('audio.download');

Route::get('/video','VideoController@index')->name('video.index');
Route::post('/video','VideoController@store')->name('video.convert');
Route::post('/video/download','VideoController@download')->name('video.download');