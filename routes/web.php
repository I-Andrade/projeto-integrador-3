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

// Route::get('blog', function () {
//     return view('/site/blog/blog');
// });
Route::get('detalhesblog', function () {
    return view('/site/blog/paginadetalhe');
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
Route::get('listaportfolio', function () {
    return view('/site/admin/listaportifolio');
});
Route::get('listablog', function () {
    return view('/site/admin/listablog');
});
Route::get('admin-blog', 'App\Http\Controllers\CategoriaController@getCategoriasByType',function () {
    return view('/site/admin/admin-blog');
});
Route::get('admin-cadCategoria', function () {
    return view('\site\admin\admin-cadCategoria');
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

Route::get('/portifolios', 'App\Http\Controllers\PortifolioController@getAllPortifolios');
Route::get('/portifolio/{id}', 'App\Http\Controllers\PortifolioController@getPortifolio');
Route::get('/portifolios/{categoria}', 'App\Http\Controllers\PortifolioController@getPortifolioBYCategoria');
Route::post('/portifolio', 'App\Http\Controllers\PortifolioController@createPortifolio');
Route::put('/portifolio/{id}', 'App\Http\Controllers\PortifolioController@updatePortifolio');
Route::delete('/portifolio/{id}', 'App\Http\Controllers\PortifolioController@deletePortifolio');
