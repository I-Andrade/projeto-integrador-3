<?php

use App\Http\Controllers\InstagramApiController;
use Illuminate\Support\Facades\Http;
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
   $fotos = (new InstagramApiController())->getMedia();

   return view('welcome')->with(['fotos' => $fotos]);
});

Route::get('blog', function () {
    return view('/site/blog');
});
Route::get('contato', function () {
    return view('/site/contato');
});
Route::get('portfolio', function () {
    return view('/site/portifolio/categorias');
});
Route::get('portEmbalagens', function () {
    return view('/site/portifolio/embalagens');
});
Route::get('portCampanhas', function () {
    return view('/site/portifolio/campanhas');
});
Route::get('portIdentidadeVisual', function () {
    return view('/site/portifolio/identidadevisual');
});
Route::get('portMidias', function () {
    return view('/site/portifolio/midias');
});
Route::get('portSites', function () {
    return view('/site/portifolio/sites');
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
Route::get('admin-api', function () {
    return view('/site/admin/admin-api');
});

// API INSTAGRAM
Route::get('insta-new-code', [InstagramApiController::class, 'getNewCode']);
Route::get('insta-new-token', [InstagramApiController::class, 'getNewToken']);
//Route::get('admin-instagram', function () {
//    return view('/site/admin/admin-instagram');
//});