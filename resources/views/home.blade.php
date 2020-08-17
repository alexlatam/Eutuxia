@extends('home.main_plantilla')

@section('title')
<title>Home</title>
@endsection

@section('content')
@include('home.plantilla_header')
<div class="container">
	<div class="row mt-4">
	  <div class="col-6" style="text-align:left;">
	    <div class="cont_image">
	      <img src="imagen/fondo.png" alt="" width="100%">
	    </div>
	  </div>
	  <div class="col-6">
	    <h3 style="margin-bottom:2rem;">Páginas Dinámicas</h3>
	    <h6 style="margin-bottom:3rem;">100% Personalizadas</h6>
	    <p class="text_page">Realizamos paginas animadas, y muy atractivas a los usarios. <br>
	      Ten en cuenta que el tiempo que tarda un usario en tu sitio web,
	      incrementa exponencialmente la posibilidad de que el usuario se convierta en cliente.
	    </p>
	    <button type="button" class="btn btn-primary btn-rounded" >¡Quiero mi página!</button>
	  </div>
	</div>


	<div class="row" style="margin-top:5rem; margin-bottom: 5rem;">
	  <div class="col-6" style="padding-left:50px;">
	    <h3 style="margin-bottom:2rem;">Tiendas Virtuales</h3>
	    <p class="text_page ">
	      Te ayudamos a llevar todos tus productos al ambiente digital.<br>
	      Podrás gestionar tu inventario, ventas, compradores, envios y demás procesos que
	      facilitaran la gestion de tu empresa.
	    </p>
	    <button type="button" class="btn btn-primary btn-rounded">Crear mi tienda!</button>
	  </div>
	  <div class="col-6" style="text-align:left;">
	    <div class="">
	      <img src="imagen/tablet_page.png" alt="" width="100%">
	    </div>	
	  </div>
	</div>


	<div class="row mb-5">
	    <div class="col-6" style="text-align:left;">
	      <div class="cont_image">
	        <img src="imagen/laptop_app.png" alt="" width="80%">
	      </div>
	    </div>
	    <div class="col-6">
	      <h3 style="margin-bottom:2rem;">Aplicaciones Web</h3>
	      <h6 style="margin-bottom:3rem;">Visibles desde cualquier dispositivo</h6>
	      <p class="text_page">
	        Nuestro equipo puede ayudarte a crear tu aplicacion web, para tu tienda virtual, sistema administrativo,
	        o cualquier sitio que desees tener. <br>
	      </p>
	      <button type="button" class="btn btn-primary btn-rounded">Empezar</button>
	    </div>
	  </div>
</div>

<section class="bg-white">
  <div class="container">
    <div class="row gutter-1 gutter-md-3 demo-preview">
      <div class="col-6 col-lg-4">
        <article class="card card-minimal">
          <a href="html/app/portal.html"  class="card-img-container">
            <img class="card-img" src="{{asset('demos/portal.jpg')}}" alt="Portal">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center"><a href="#">Portal</a></h5>
          </div>
        </article>
      </div>
      <div class="col-6 col-lg-4">
        <article class="card card-minimal">
          <a href="html/app/profile.html"  class="card-img-container">
            <img class="card-img" src="{{asset('demos/profile.jpg')}}" alt="Profile">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center"><a href="#">Profile</a></h5>
          </div>
        </article>
      </div>
      <div class="col-6 col-lg-4">
        <article class="card card-minimal">
          <a href="html/app/connections.html"  class="card-img-container">
            <img class="card-img" src="{{asset('demos/connections.jpg')}}" alt="Connections">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center"><a href="#" >Connections</a></h5>
          </div>
        </article>
      </div>
      <div class="col-6 col-lg-4">
        <article class="card card-minimal">
          <a href="html/app/groups.html"  class="card-img-container">
            <img class="card-img" src="{{asset('demos/groups.jpg')}}" alt="Groups">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center"><a href="#">Groups</a></h5>
          </div>
        </article>
      </div>
      <div class="col-6 col-lg-4">
        <article class="card card-minimal">
          <a href="html/app/payments.html"  class="card-img-container">
            <img class="card-img" src="{{asset('demos/payments.jpg')}}" alt="Payments">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center"><a href="#">Payments</a></h5>
          </div>
        </article>
      </div>
      <div class="col-6 col-lg-4">
        <article class="card card-minimal">
          <a href="html/app/settings.html"  class="card-img-container">
            <img class="card-img" src="{{asset('demos/settings.jpg')}}" alt="Settings">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center"><a href="#">Settings</a></h5>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

@endsection