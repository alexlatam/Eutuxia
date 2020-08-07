<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cms\Product;

class ProductController extends Controller
{

	public function index(){
		$products = Product::all();
	    return view('cms.productos.productos')->with(compact('products'));
	}

	public function crearProducto()
	{
		return view('cms.productos.crear_producto');
	}

	public function editarProducto()
	{
		return view('cms.productos.editar_producto');
	}
}
