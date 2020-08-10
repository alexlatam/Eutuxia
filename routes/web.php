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

	//-------------- SERvICIOS ----------------
	Route::get('/servicios', 'Cms\ServicioController@index')->name('service.home');
	Route::get('/crear/servicio', 'Cms\ServicioController@crearServicio')->name('service.create');
	Route::get('/editar/servicio/{id}', 'Cms\ServicioController@editarServicio')->name('service.show');


		//metodos posts

	Route::post('/guardar/servicio', 'Cms\ServicioController@guardarServicio')->name('service.store');
	Route::post('/actualizar/servicio/{id}', 'Cms\ServicioController@actualizarServicio')->name('service.update');
	Route::post('/eliminar/servicio/{id}', 'Cms\ServicioController@eliminarServicio')->name('service.destroy');

	//-------------- PRODUCTOS ----------------

	Route::get('/productos', 'Cms\ProductController@index')->name('producto.home');

	Route::get('/crear/producto', 'Cms\ProductController@crearProducto')->name('producto.crear');

	Route::get('/editar/producto/{id}', 'Cms\ProductController@editarProducto')->name('producto.editar');


		//metodo posts
	Route::post('/guardar/product', 'Cms\ProductController@guardarProducto')->name('producto.guardar');

	Route::post('/actualizar/producto/{id}', 'Cms\ProductController@actualizarProducto')->name('producto.actualizar');

	Route::post('/eliminar/producto/{id}', 'Cms\ProductController@eliminarProducto')->name('producto.delete');


	//-------------- SECCIONES ----------------
	Route::get('/secciones', 'Cms\SectionController@index')->name('section.home');

	Route::get('/seccion/obtener/{id}', 'Cms\SectionController@obtenerSeccion');

		//métodos post
	Route::post('/crear/seccion', 'Cms\SectionController@guardarSeccion')->name('seccion.crear');

	Route::post('/actualizar/section/{id}', 'Cms\SectionController@actualizarSeccion');
	
	Route::post('/eliminar/section/{id}', 'Cms\SectionController@eliminarSeccion')->name('seccion.eliminar');


	//-------------- PRODUCTS BANNERS ----------------
	Route::get('/banners/product/{id}', 'Cms\ProductBannerController@index')->name('banners.product');
	Route::get('/banner/product/create', 'Cms\ProductBannerController@crearBannerProducto')->name('banners.product.create');
	Route::get('/banner/product/edit/{id}', 'Cms\ProductBannerController@editarBannerProducto')->name('banner.product.show');

		//metodos posts
	Route::post('/banner/product/guardar', 'Cms\ProductBannerController@guardarBannerProducto')->name('banners.product.store');
	Route::post('/banner/product/update/{id}', 'Cms\ProductBannerController@actualizarBannerProducto')->name('banner.product.update');
	Route::post('/banner/producto/eliminar/{id}', 'Cms\ProductBannerController@eliminarBannerProducto')->name('banner.product.destroy');

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