<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cms\ProductBanner;

class ProductBannerController extends Controller
{
    public function index()
    {
    	$banners = ProductBanner::all();
    	return view('cms.banner_productos.banners')->with(compact('banners'));
    }

    public function crearBannerProducto()
    {
    	
    	
    	return view('cms.banner.crear_banner_producto');
    }
}
