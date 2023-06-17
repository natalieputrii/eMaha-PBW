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

Route::middleware('auth:api')->get('/task', function (Request $request) {
    return $request->task();
});

//api untuk tampil data
Route::get('/task/read', 'TaskAPIController@read');

//api untuk tambah data
Route::post('/task/create', 'TaskAPIController@create');

//api untuk mengubah data
Route::post('/task/update/{id}', 'TaskAPIController@update');

//api untuk menghapus data
Route::delete('/task/delete/{id}', 'TaskAPIController@delete');