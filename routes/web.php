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

Route::get('/cms', function () {
	return view('cms.index');
});



Route::prefix('cms')->group(function () {

	Route::get('/productos', 'Cms\ProductController@index')->name('producto.home');
	Route::get('/crear/producto', 'Cms\ProductController@crearProducto')->name('producto.crear');
	Route::get('/editar/producto/{id}', 'Cms\ProductController@editarProducto');

	Route::get('/product/banners', 'Cms\ProductBannerController@index');

});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', function () {
    return view('productos.index');
});

Route::get('/servicios', function () {
    return view('servicios.index');
});

Route::get('/nosotros', function () {
    return view('nosotros.index');
});

Route::get('/contactanos', function () {
    return view('contactanos.index');
});