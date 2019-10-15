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


//1, add
Route::get('/kontak/create', 'KontakController@createPage')->name("createPage");
Route::post('/kontak/create', 'KontakController@create')->name("create");

//2, 
Route::get('/kontak/{id}/edit', 'KontakController@editPage')->name("editPage");
Route::post('/kontak/{id}/edit', 'KontakController@edit')->name("edit");

//3
Route::get('/kontak', 'KontakController@index')->name("index");

//delete
Route::get('/kontak/{id}/delete', 'KontakController@delete')->name("delete");