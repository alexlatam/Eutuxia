@extends('home.main_plantilla')

@section('title')
<title>
    Oxas - Desarrollamos negocios digitales
</title>
@endsection

@section('content')
@include('home.plantilla_header')


<div class="container">

  <div class="row" style="margin-top:5rem; margin-bottom: 5rem;">
	  <div class="col-6" style="padding-left:50px;">
	    <h3 style="margin-bottom:2rem;">Landing page</h3>
	    <p class="text_page ">
        Una página única de tu sitio web que busca 
        convertir a un visitante en un lead, esto es, en un usuario que ha 
        facilitado sus datos a una empresa y que por tanto se convierte en un 
        registro de su base de datos, haciendo posible que la empresa siga 
        interactuando con él.
	    </p>
	    <button type="button" class="btn btn-primary btn-rounded">Mas Información</button>
	  </div>
	  <div class="col-6" style="text-align:left;">
	    <div class="">
	      <img src="imagen/tablet_page.png" alt="" width="100%">
	    </div>	
	  </div>
	</div>


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



<div class="component-example bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col p-5">
        <h1>Pasos para <b class="text-primary">COMENZAR ...</b></h1>
      </div>
      <div class="col">
        <div class="owl-carousel visible owl-loaded owl-drag" data-items="[3,2]" data-margin="20">
          
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1934px;"><div class="owl-item active" style="width: 366.667px; margin-right: 20px;"><div class="step">
            <h4 class="step-title">Primer Paso</h4>
            <p>Escribenos por nuestros medios de <a href="/contactanos"><b class="text-primary">CONTACTO.</b></a></p>
          </div></div><div class="owl-item active" style="width: 366.667px; margin-right: 20px;"><div class="step">
            <h4 class="step-title">Segundo Paso</h4>
            <p>Coordinamos una reunión presencial o videollamada.</p>
          </div></div><div class="owl-item active" style="width: 366.667px; margin-right: 20px;"><div class="step">
            <h4 class="step-title">Tercer Paso</h4>
            <p>Escucharemos con atención tus necesidades y requerimientos.</p>
          </div></div><div class="owl-item" style="width: 366.667px; margin-right: 20px;"><div class="step">
            <h4 class="step-title">Cuarto Paso</h4>
            <p>Te enviamos una propuesta junto con la cotización del proyecto.</p>
          </div></div><div class="owl-item" style="width: 366.667px; margin-right: 20px;"><div class="step">
            <h4 class="step-title">Quinto Paso</h4>
            <p>Preparate porque empieza la <a href="/contactanos"><b class="text-primary">AVENTURA</b></a></p>
          </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
      </div>
    </div>
  </div>
</div>

@endsection