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
</body>
</html>