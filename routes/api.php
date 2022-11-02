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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/wallpapers', 'App\Http\Controllers\ApiController@getAllWallpapers');
Route::get('/wallpaper/{id}', 'App\Http\Controllers\ApiController@getWallpaper');
Route::post('/wallpaper', 'App\Http\Controllers\ApiController@createWallpaper');
Route::put('/wallpaper/{id}', 'App\Http\Controllers\ApiController@updateWallpaper');
Route::delete('/wallpaper/{id}', 'App\Http\Controllers\ApiController@deleteWallpaper');