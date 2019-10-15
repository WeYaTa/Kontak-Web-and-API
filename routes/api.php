<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 1. POST /api/kontak -> membuat kontak baru, bodynya kirimkan data kontak dalam bentuk json
// 2. GET /api/kontak -> mengembalikan seluruh data kontak
//     secret bonus: buat pagination, filter data kontak berdasarkan nama
// 3. GET /api/kontak/:id -> mengembalikan data kontak yang sudah ada
// 4. PUT /api/kontak/:id -> mengupdate data kontak
// 5. DELETE /api/kontak/:id -> menghapus data kontak

Route::post('kontak', 'Api\Kontak@create');
Route::get('kontak', 'Api\Kontak@index');
Route::get('kontak/{id}', 'Api\Kontak@get');
Route::put('kontak/{id}', 'Api\Kontak@update');
Route::delete('kontak/{id}', 'Api\Kontak@delete');


