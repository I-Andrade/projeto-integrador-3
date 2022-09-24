<?php

use Illuminate\Support\Facades\Route;

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

Route::get('blog', function () {
    return view('/site/blog');
});
Route::get('contato', function () {
    return view('/site/contato');
});
Route::get('portfolio', function () {
    return view('/site/portifolio/portfolio');
});
Route::get('portEmbalagens', function () {
    return view('/site/portifolio/embalagens');
});
Route::get('paginadetalhe', function () {
    return view('/site/portifolio/paginadetalhe');
});
Route::get('privacy-policy', function () {
    return view('/site/privacy-policy');
});
Route::get('terms-conditions', function () {
    return view('/site/terms-conditions');
});
Route::get('login', function () {
    return view('/site/admin/login');
});
Route::get('admin-portfolio', function () {
    return view('/site/admin/admin-portfolio');
});
Route::get('admin-blog', function () {
    return view('/site/admin/admin-blog');
});
