<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\InstagramApiController;
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


// Home
Route::get('/', function () {
   $fotos = (new InstagramApiController())->getMedia();
   return view('welcome')->with(['fotos' => $fotos]);
})->name('dashboard');

//Portifólio
Route::get('/portifolios', 'App\Http\Controllers\PortifolioController@getAllPortifolios');
Route::get('/portifolio/{id}', 'App\Http\Controllers\PortifolioController@getPortifolio');
Route::get('/portifolios/{categoria}', 'App\Http\Controllers\PortifolioController@getPortifolioBYCategoria');

//Contato
Route::get('contato', function () { return view('/site/contato'); });

//Blog
Route::get('/blogs', 'App\Http\Controllers\BlogController@getAllBlogs');
Route::get('/blog/categoria/{idCategoria}', 'App\Http\Controllers\BlogController@getBlogByCategoria');
Route::get('/blog/{id}', 'App\Http\Controllers\BlogController@getBlog');
Route::get('detalhesblog', function () { return view('/site/blog/paginadetalhe');});


//Categorias
Route::get('/categorias', 'App\Http\Controllers\CategoriaController@getAllCategorias');
Route::get('/categoria/{id}', 'App\Http\Controllers\CategoriaController@getCategoria');
Route::get('/categorias/{type}', 'App\Http\Controllers\CategoriaController@getCategoriasByType');

//Wallpapers
Route::post('/wallpaper', 'App\Http\Controllers\ApiController@createWallpaper');
Route::put('/wallpaper/{id}', 'App\Http\Controllers\ApiController@updateWallpaper');
Route::delete('/wallpaper/{id}', 'App\Http\Controllers\ApiController@deleteWallpaper');

//Outros
Route::get('politica-privacidade', function () { return view('/site/politica-privacidade'); });
Route::get('terms-conditions', function () { return view('/site/terms-conditions'); });

Route::get('souFernanda', function () { return view('/site/admin/login'); })->name('login')->middleware('guest');

/*
    Rotas Protegidas
*/

Route::middleware('auth')->group(function () {
    /*
        ADMIN
    */
    
    //Portifolio
    Route::get('listaportfolio', 'App\Http\Controllers\PortifolioController@getAdminAllPortifolios');
    Route::get('admin-portfolio', function () { return view('/site/admin/admin-portfolio'); });
    Route::post('/portifolio', 'App\Http\Controllers\PortifolioController@createPortifolio');
    Route::put('/portifolio/{id}', 'App\Http\Controllers\PortifolioController@updatePortifolio');
    Route::delete('/portifolio/{id}', 'App\Http\Controllers\PortifolioController@deletePortifolio');
    
    //Blog
    Route::get('listablog', 'App\Http\Controllers\BlogController@getAdminAllBlogs');
    Route::get('admin-blog', 'App\Http\Controllers\CategoriaController@getCategoriasBlog');
    Route::post('/blog', 'App\Http\Controllers\BlogController@createBlog');
    Route::put('/blog/{id}', 'App\Http\Controllers\BlogController@updateBlog');
    Route::delete('/blog/{id}', 'App\Http\Controllers\BlogController@deleteBlog');


    //Categorias
    Route::get('admin-cadCategoria', 'App\Http\Controllers\CategoriaController@getAllCategorias');
    Route::post('/categoria', 'App\Http\Controllers\CategoriaController@createCategoria');
    Route::put('/categoria/{id}', 'App\Http\Controllers\CategoriaController@updateCategoria');
    Route::delete('/categoria/{id}', 'App\Http\Controllers\CategoriaController@deleteCategoria');

    //API Wallpapers
    Route::get('admin-wallpaper', 'App\Http\Controllers\CategoriaController@getCategoriasWallpaper');
    
    // API INSTAGRAM
    Route::get('admin-insta', function () { return view('/site/admin/admin-instagram'); });
    Route::get('insta-new-code', [InstagramApiController::class, 'getNewCode']);
    Route::get('insta-new-token', [InstagramApiController::class, 'getNewToken']);
});


require __DIR__.'/auth.php';