<!DOCTYPE html>
<html>
<head>
	@yield('title')
	@include('common.head_plantilla')
</head>
<body>
	<!-- header -->
	<header class="header-sticky header-dark">
	  <div class="container">
	    <nav class="navbar navbar-expand-lg navbar-dark">
	      <a class="navbar-brand" href="/">
	        <img class="navbar-logo navbar-logo-light" src="" alt="Logo">
	        <img class="navbar-logo navbar-logo-dark" src="" alt="Logo">
	      </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="burger"><span></span></span></button>

	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav align-items-center mr-auto">
	          
	        </ul>

	        <ul class="navbar-nav align-items-center mr-0">
	          <li class="nav-item">
	            <a class="nav-link" href="/" role="button">
	              Home
	            </a>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Productos
	            </a>
	            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	            @foreach($productos as $producto)
	              <a class="dropdown-item" href="{{route('product.option', $producto->id)}}">
	                <span>{{$producto->product}}</span>
	              </a>
	              <div class="dropdown-divider"></div>
	            @endforeach
	            </div>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Servicios
	            </a>
	            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	            @foreach($servicios as $servicio)
	              <a class="dropdown-item" href="{{route('service.option', $servicio->id)}}">
	                <span>{{$servicio->service}}</span>
	              </a>
	              <div class="dropdown-divider"></div>
	            @endforeach
	            </div>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Proyectos
	            </a>
	            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	            @foreach($proyectos as $proyecto)
	              <a class="dropdown-item" href="{{route('project.option', $proyecto->id)}}">
	                <span>{{$proyecto->project}}</span>
	              </a>
	              <div class="dropdown-divider"></div>
	            @endforeach
	            </div>
	          </li>
	        </ul>
	      </div>
	    </nav>
	  </div>
	</header>
	<!-- header -->



	<!-- cover -->
	<section class="bg-primary text-white pattern"
	    data-top-top="transform: translateY(0px);" 
	    data-top-bottom="transform: translateY(250px);">
	  <div class="container pt-10">
	    <div class="row mb-2">
	      <div class="col-md-8 col-lg-6">
	        <h1>App Pages</h1>
	      </div>
	    </div>
	    <div class="row">
	      <div class="col">
	        <nav aria-label="breadcrumb">
	          <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="/">Home</a></li>
	            <li class="breadcrumb-item active" aria-current="page">App Pages</li>
	          </ol>
	        </nav>
	      </div>
	    </div>
	  </div>
	</section>
	<!-- / cover -->

	@yield('content')

	@include('common.plantilla_footer')
<script src="{{asset('js/plantilla_js/app.js')}}"></script>
<script src="{{asset('js/plantilla_js/vendor.js')}}"></script>
</body>
</html>