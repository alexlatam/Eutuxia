@extends('common.main_plantilla')

@section('title')
<title>
    Oxas - Desarrollamos negocios digitales
</title>
@endsection

@section('content')

<div class="swiper-container swiper-container-carousel">
  <div class="swiper-wrapper">
    <div class="swiper-slide bg-dark">
      <div class="image" style=" background-image:url('{{asset('imagen/oxas/fondo2.jpg')}}');" ></div>
      <div class="image band" ></div>
      <div class="caption" data-swiper-parallax-y="-100%">
        <div class="container">
          <div class="row align-items-end vh-75">
            <div class="col-md-5 text-white">
              <span class="eyebrow mb-2">Diseño web</span>
              <h2>Somos <br><span id="typed"></span></h2>
              <div id="typed-strings">
                  <p>Parte de tu Crecimiento</p>
                  <p>Diseñadores</p>
                  <p>Programadores</p>
                  <p>Tus aliados</p>
                  <p>todo lo que necesitas ...</p>
                  
              </div>
              <a href="" class="btn btn-with-ico btn-primary">Iniciar el crecimiento<i class="icon-arrow-right2 fs-20"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    ...
  </div>
</div>
<style>
  .band{
    background-image:url('{{asset('imagen/oxas/curva_blanca.svg')}}');
    background-position-y: bottom;
    bottom: -3px;
  }

</style>

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


    <!-- cta -->
    <section class="text-white">
      <div class="image image-overlay image-scrolling" style="background-image:url(images/demo/blockchain/blockchain-6.jpg)"
        data--100-bottom-top="transform: translateY(0%);" 
        data-top-bottom="transform: translateY(25%);">
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <span class="eyebrow">Portafolio</span>
            <h2 class="display-4"><b>Conoce</b> nuestro trabajo.</h2>
            <a href="" class="btn btn-rounded btn-white px-4">Ver trabajos</a>
          </div>
        </div>
      </div>
    </section>
    <!-- / cta -->


<section class="bg-white  section-decorated-bottom">

  <div class="decorated-bottom text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40"  preserveAspectRatio="none">  
      <path d="">
        <animate 
          attributeName="d" 
          begin="0s" 
          dur="5s"
          repeatCount="indefinite"
          values="
          M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
          M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
          M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
          M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
      </path>
    </svg>
  </div>
  <div class="container ">
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


    <!-- features -->
    <section class="bg-primary section-decorated-bottom">
      <div class="decorated-bottom text-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40"  preserveAspectRatio="none">  
          <path d="">
            <animate 
              attributeName="d" 
              begin="0s" 
              dur="5s"
              repeatCount="indefinite"
              values="
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
              M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
              M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
          </path>
        </svg>
      </div>
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-7">
            <ul class="masonry row gutter-2" data-columns="2">
              <li class="col-md-6 text-white" data-aos="fade-up">
                <div class="bordered p-4">
                  <i class="icon-weather_sun fs-50 mb-2"></i>
                  <h4>Weather</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
              </li>
              <li class="col-md-6 mt-5" data-aos="fade-up">
                <div class="boxed p-4">
                  <i class="icon-basic_globe fs-50 mb-2 text-primary"></i>
                  <h4>Savings</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
              </li>
              <li class="col-md-6 text-white" data-aos="fade-up">
                <div class="bordered p-4">
                  <i class="icon-ecommerce_cart_content fs-50 mb-2"></i>
                  <h4>Shopping</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
              </li>
              <li class="col-md-6 text-white" data-aos="fade-up">
                <div class="bordered p-4">
                  <i class="icon-basic_clockwise fs-50 mb-2"></i>
                  <h4>Quick</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4 text-white">
            <h2><b>Exclusive offers</b> from our partner hotels.</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- / features -->

     <!-- about -->
     <section class="bg-light pb-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row separator-bottom pb-5 mb-5">
              <div class="col-md-4">
                <h2>Plan your awesome <br><b>adventure</b> today.</h2>
              </div>
              <div class="col-md-8">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quod quasi non nostrum nobis laudantium pariatur enim nihil animi, iusto est, ea dignissimos? Voluptas rem, necessitatibus sed sint adipisci nulla!</p>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="accordion-group accordion-group-minimal" data-accordion-group>
                  <div class="accordion" data-accordion data-aos="fade-up">
                    <div class="accordion-control" data-control>
                      <h5>What type of ticket should I choose ?</h5>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion" data-accordion data-aos="fade-up">
                    <div class="accordion-control" data-control>
                      <h5>Informations about visa requirements</h5>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mt-2 mt-md-0">
                <div class="accordion-group accordion-group-minimal" data-accordion-group>
                  <div class="accordion" data-accordion data-aos="fade-up">
                    <div class="accordion-control" data-control>
                      <h5>What type of ticket should I choose ?</h5>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion" data-accordion data-aos="fade-up">
                    <div class="accordion-control" data-control>
                      <h5>Informations about visa requirements</h5>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / about -->



<section>
  <div class="image band2 bg-light" style="background-image:url({{asset('imagen/oxas/curva_negra.svg')}})"></div>
</section>

<style>
  .band2{
    background-position-y: bottom;
    bottom: -10px;
  }

</style>

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