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

Route::get('/wallpapers', 'App\Http\Controllers\BlogController@getAllWallpapers');
Route::get('/wallpaper/{id}', 'App\Http\Controllers\BlogController@getWallpaper');
Route::post('/wallpaper', 'App\Http\Controllers\BlogController@createWallpaper');
Route::put('/wallpaper/{id}', 'App\Http\Controllers\BlogController@updateWallpaper');
Route::delete('/wallpaper/{id}', 'App\Http\Controllers\BlogController@deleteWallpaper');