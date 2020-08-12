@extends('home.main')
@section('title')
	Productos
@endsection

@section('content')
	{{-- <header class="productos_header">
		<h2>Productos</h2>
	</header> --}}
	<header class="productos_header">
		<div class="productos_header_body">
			<h2 class="productos_header_title">{{$producto->product}}</h2>
		</div>
	</header>

	<div class="productos_section_title">
		<h1>{{$producto->product}}</h1>
	</div>
	@foreach($banners as $banner)
	<section class="productos_paginas">
		<div class="productos_paginas_content">
			<h2 class="producto_paginas_title">{{$banner->title}}</h2>
			<p class="producto_paginas_subtitle">
				{{$banner->subtitle}}
			</p>
		</div>
	</section>
	@endforeach
	<div class="productos_section_title">
		<h1>Producto</h1>
	</div>
	<section class="productos_proyectos">
		<div class="productos_proyectos_content">
			<h2 class="producto_proyectos_title">caracteristica 1</h2>
			<p class="producto_proyectos_subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</section>

	<section class="productos_proyectos proyect-2">
		<div class="productos_proyectos_content proyect-2">
			<h2 class="producto_proyectos_title">caracteristica 2</h2>
			<p class="producto_proyectos_subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</section>

	<section class="productos_proyectos proyect-3">
		<div class="productos_proyectos_content">
			<h2 class="producto_proyectos_title">caracteristica 3</h2>
			<p class="producto_proyectos_subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</section>

	<section class="productos_contactanos">
		<h2>Trabaja con nosotros</h2>
		<a href="#">Contactanos</a>
	</section>
	<!-- Float Bottom -->
	@include('home.float_button')
@endsection