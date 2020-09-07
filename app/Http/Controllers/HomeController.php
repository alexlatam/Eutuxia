<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cms\Product;
use App\Cms\Service;
use App\Cms\Project;


use App\Blog\BlogArticle;
use App\Blog\BlogCategory;

class HomeController extends Controller
{
    public function home()
    {	
    	$servicios = Service::all();
    	$proyectos = Project::all();
    	$productos = Product::all();
    	return view('home')->with(compact('productos', 'servicios', 'proyectos'));
    }


    public function contactanos()
    {
        $servicios = Service::all();
        $proyectos = Project::all();
        $productos = Product::all();
        return view('contacto')->with(compact('productos', 'servicios', 'proyectos'));
    }

    public function blog()
    {
        $servicios = Service::all();
        $proyectos = Project::all();
        $productos = Product::all();

        $categorias = BlogCategory::all();
        $articulos = BlogArticle::all();
        return view('blog.index')->with(compact('productos', 'servicios', 'proyectos', 'categorias', 'articulos'));
    }

    public function blogDetail($id)
    {
        $servicios = Service::all();
        $proyectos = Project::all();
        $productos = Product::all();
        return view('blog.blog_detail')->with(compact('productos', 'servicios', 'proyectos'));
    }

    public function productos($id){

    	$productos = Product::all();
    	$servicios = Service::all();
    	$proyectos = Project::all();
    	$producto = Product::find($id);
    	$banners = $producto->banners;

    	return view('productos.index')->with(compact('productos', 'producto', 'banners', 'servicios', 'proyectos'));
    }


    public function servicios($id){

    	$productos = Product::all();
    	$servicios = Service::all();
    	$proyectos = Project::all();
    	$servicio = Service::find($id);
    	$banners = $servicio->banners;

    	return view('servicios.index')->with(compact('servicios', 'servicio', 'banners', 'productos', 'proyectos'));
    }

    public function proyectos($id)
    {
    	$productos = Product::all();
    	$servicios = Service::all();
    	$proyectos = Project::all();
    	$proyecto = Project::find($id);

    	$banners = $proyecto->banners;
    	return view('proyectos.index')->with(compact('servicios', 'proyectos', 'proyecto', 'banners', 'productos'));
    }
}
