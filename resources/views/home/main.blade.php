<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  @include('common.head')
</head>
<body>
	@include('home.menu')
	@yield('content')
	@include('common.footer')
	{{-- @include('modales.modal_contacto') --}}
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>
	<script src='vendor/aos/aos.js'></script>
</body>
</html>