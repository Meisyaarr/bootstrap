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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'datadiri'], function(){

Route::get('index', 'BiodataController@index')->name('datadiri.index');

Route::get('create', 'BiodataController@create')->name('datadiri.create');

Route::post('save','BiodataController@store')->name('datadiri.save');

Route::get('tampil-formEdit/{datadiri}','BiodataController@edit')->name('datadiri.tampil-formEdit');

Route::patch('update/{datadiri}','BiodataController@update')->name('datadiri.update');

});