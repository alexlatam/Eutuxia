@extends('home.main')
@section('title')
	Servicios
@endsection


@section('content')
	@php
		$imagen ="https://www.conmasfuturo.com/wp-content/uploads/2014/03/objetivos-paginas-web-antoniosanjuan.jpg";	
	@endphp
	<header class="servicios_header">
		<div class="servicios_header_body">
			<h2 class="servicios_header_title">{{$proyecto->project}}</h2>
		</div>
	</header>

	<h2 class="servicio_seo_title">{{$proyecto->project}}</h2>
	@foreach($banners as $banner)
	<section class="servicio_seo">
		<div class="servicio_seo_body servicio_1">
			<div class="container">
				<h3>{{$banner->title}}</h3>
				<p>{{$banner->subtitle}}</p>
			</div>
			<div class="container_imagen" style="background-image: url('{{asset('storage/'.$banner->imagen)}}');background-repeat: none; background-size: cover"></div>
		</div>
	</section>
	@endforeach
<!-- 	<section class="servicio_seo">
		<div class="servicio_seo_body servicio_2">
			<div class="container_imagen" style="background-image: url('{{$imagen}}')"></div>
			<div class="container">
				<h3>title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</section>
	
	<section class="servicio_seo">
		<div class="servicio_seo_body servicio_3">
			<div class="container">
				<h3>title</h3>
				<p class ="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="container_imagen" style="background-image: url('{{$imagen}}')"></div>
		</div>
	</section> -->
	
	<section class="servicio_juntos">
		<div class="servicio_juntos_body">
			<h2>Trabajemos juntos</h2>
			<a href="#">contactar</a>
		</div>
	</section>
	<!-- Float Bottom -->
	@include('home.float_button')
@endsection