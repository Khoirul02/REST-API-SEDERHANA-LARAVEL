<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('pegawai', 'apicontroller@get_all_pegawai');
Route::post('pegawai/insert', 'apicontroller@insert_data_pegawai');
Route::put('pegawai/update/{id}', 'apicontroller@update_data_pegawai');
Route::delete('pegawai/delete/{id}', 'apicontroller@delete_data_pegawai');
