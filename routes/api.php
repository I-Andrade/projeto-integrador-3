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

Route::get('/blogs', 'App\Http\Controllers\BlogController@getAllBlogs');
Route::get('/blog/{id}', 'App\Http\Controllers\BlogController@getBlog');
Route::post('/blog', 'App\Http\Controllers\BlogController@createBlog');
Route::put('/blog/{id}', 'App\Http\Controllers\BlogController@updateBlog');
Route::delete('/blog/{id}', 'App\Http\Controllers\BlogController@deleteBlog');

Route::get('/categorias', 'App\Http\Controllers\CategoriaController@getAllCategorias');
Route::get('/categoria/{id}', 'App\Http\Controllers\CategoriaController@getCategoria');
Route::post('/categoria', 'App\Http\Controllers\CategoriaController@createCategoria');
Route::put('/categoria/{id}', 'App\Http\Controllers\CategoriaController@updateCategoria');
Route::delete('/categoria/{id}', 'App\Http\Controllers\CategoriaController@deleteCategoria');
Route::get('/categorias/{type}', 'App\Http\Controllers\CategoriaController@getCategoriasByType');