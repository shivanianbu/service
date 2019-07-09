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

Route::get('/owner/add', 'OwnerController@add');
Route::post('/owner/add', 'OwnerController@save');
Route::post('/owner/add', 'OwnerController@store');
Route::get('/owner', 'OwnerController@show');
Route::get('/owner/{id}/view', 'OwnerController@view');
Route::get('/owner/{id}/edit', 'OwnerController@edit');

Route::post('/owner/{id}/edit', 'OwnerController@update');
Route::get('/owner/{id}/delete', 'OwnerController@delete');


