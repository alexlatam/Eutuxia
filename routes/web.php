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

Route::get('/cms/productos', function() {
	return view('cms.productos.productos');
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