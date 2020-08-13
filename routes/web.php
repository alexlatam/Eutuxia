<?php

use Illuminate\Support\Facades\Route;
use App\Cms\Product;
use App\Cms\Service;
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

Route::get('/test', function () {
	return view('home.home_plantilla');
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


	//-------------- PROYECTOS ----------------

	Route::get('/proyectos', 'Cms\ProjectController@index')->name('project.home');
	Route::get('/proyectos/create', 'Cms\ProjectController@crearProyecto')->name('project.create');
	Route::get('/proyectos/editar/{id}', 'Cms\ProjectController@editarProyecto')->name('project.show');
		//metodos posts

	Route::post('/proyectos/guardar', 'Cms\ProjectController@guardarProyecto')->name('project.store');
	Route::post('/proyectos/actualizar/{id}', 'Cms\ProjectController@actualizarProyecto')->name('project.update');
	Route::post('/proyectos/eliminar/{id}', 'Cms\ProjectController@eliminarProyecto')->name('project.delete');



	//-------------- SECCIONES ----------------
	Route::get('/secciones', 'Cms\SectionController@index')->name('section.home');

	Route::get('/seccion/obtener/{id}', 'Cms\SectionController@obtenerSeccion');

		//métodos post
	Route::post('/crear/seccion', 'Cms\SectionController@guardarSeccion')->name('seccion.crear');

	Route::post('/actualizar/section/{id}', 'Cms\SectionController@actualizarSeccion');
	
	Route::post('/eliminar/section/{id}', 'Cms\SectionController@eliminarSeccion')->name('seccion.eliminar');


	//-------------- PRODUCTS BANNERS ----------------
	Route::get('/banners/product/{id}', 'Cms\ProductBannerController@index')->name('banners.product');
	Route::get('/banner/product/create/{id}', 'Cms\ProductBannerController@crearBannerProducto')->name('banners.product.create');
	Route::get('/banner/product/{product}/edit/{id}', 'Cms\ProductBannerController@editarBannerProducto')->name('banner.product.show');

		//metodos posts
	Route::post('/banner/product/guardar', 'Cms\ProductBannerController@guardarBannerProducto')->name('banners.product.store');
	Route::post('/banner/product/update/{id}', 'Cms\ProductBannerController@actualizarBannerProducto')->name('banner.product.update');
	Route::post('/banner/producto/eliminar/{id}', 'Cms\ProductBannerController@eliminarBannerProducto')->name('banner.product.destroy');

	//-------------- SERVICES BANNERS ----------------
	Route::get('/banners/service/{id}', 'Cms\ServiceBannerController@index')->name('banners.service');
	Route::get('/banners/service/create/{id}', 'Cms\ServiceBannerController@crearBannerServicio')->name('banner.service.create');
	Route::get('/banner/service/{service}/edit/{id}', 'Cms\ServiceBannerController@editarBannerServicio')->name('banner.service.show');

		//metodos posts
	Route::post('/banners/service/guardar', 'Cms\ServiceBannerController@guardarBannerServicio')->name('banner.service.store');
	Route::post('/banner/service/update/{id}', 'Cms\ServiceBannerController@actualizarBannerServicio')->name('banner.service.update');
	Route::post('/banner/service/delete/{id}', 'Cms\ServiceBannerController@eliminarBannersServicio')->name('banner.servicio.destroy');


	//-------------- PROJECTS BANNERS ----------------
	Route::get('/banners/project/{id}', 'Cms\ProjectBannerController@index')->name('banners.project');
	Route::get('/banners/project/create/{id}', 'Cms\ProjectBannerController@crearBannerProyecto')->name('banner.project.create');
	Route::get('/banner/project/{proyecto}/edit/{id}', 'Cms\ProjectBannerController@editarBannerProyecto')->name('banner.project.show');

		//metodos posts
	Route::post('/banners/project/guardar', 'Cms\ProjectBannerController@guardarBannerProyecto')->name('banner.project.store');
	Route::post('/banners/project/update/{id}', 'Cms\ProjectBannerController@actualizarBannerProyecto')->name('banner.project.update');
	Route::post('/banners/project/delete/{id}', 'Cms\ProjectBannerController@eliminarBannersProject')->name('banner.project.destroy');

});



Route::get('/', 'HomeController@home');



Route::get('/productos/{id}', 'HomeController@productos')->name('product.option');

Route::get('/servicios/{id}', 'HomeController@servicios')->name('service.option');

Route::get('/proyectos/{id}', 'HomeController@proyectos')->name('project.option');

Route::get('/nosotros', function () {
	$productos = Product::all();
	$servicios = Service::all();
    return view('nosotros.index')->with(compact('productos', 'servicios'));
});

Route::get('/contactanos', function () {
	$productos = Product::all();
	$servicios = Service::all();
    return view('contactanos.index')->with(compact('productos', 'servicios'));
});