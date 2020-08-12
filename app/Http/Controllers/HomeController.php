<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cms\Product;
use App\Cms\Service;


class HomeController extends Controller
{
    public function home()
    {	
    	$servicios = Service::all();
    	$productos = Product::all();
    	return view('welcome')->with(compact('productos', 'servicios'));
    }

    public function productos($id){

    	$productos = Product::all();
    	$servicios = Service::all();
    	$producto = Product::find($id);
    	$banners = $producto->banners;

    	return view('productos.index')->with(compact('productos', 'producto', 'banners', 'servicios'));
    }


    public function servicios($id){

    	$productos = Product::all();
    	$servicios = Service::all();
    	$servicio = Service::find($id);
    	$banners = $servicio->banners;

    	return view('servicios.index')->with(compact('servicios', 'servicio', 'banners', 'productos'));
    }
}
