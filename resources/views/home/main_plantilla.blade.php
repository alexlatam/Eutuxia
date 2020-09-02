<!DOCTYPE html>
<html>
<head>
	@yield('title')
	@include('common.head_plantilla')
</head>
<body>

	{{-- menu	 --}}
	@include('common.menu')
	{{-- contenido --}}
	@yield('content')
	{{-- footer --}}
	@include('common.plantilla_footer')

</body>
</html>