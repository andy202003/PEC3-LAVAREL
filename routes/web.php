<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Resources\Noticias as NoticiasResource;
use App\Http\Resources\CategoriasCollection as CategoriasResource;
use App\Models\Noticias;
use App\Models\Categorias;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('news', NewsController::class);
Route::get('news/{id}', [ 'as'=>'news', 'uses'=>'NewsController@show']);

Route::get('noticiasAPI', function () {
    return new NoticiasResource(Noticias::all());
});


Route::get('api/noticia', function () {
    return Noticias::paginate(10);
});

Route::get('api/noticia/{id}', function($id) {
    return Noticias::find($id);
});

Route::get('api/categoria/{id}', [NewsController::class, 'getCategoria']);
Route::get('api/autor/{id}', [NewsController::class, 'getAutor']);
