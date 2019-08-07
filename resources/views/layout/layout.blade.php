<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	@include('components.head')
	<title>Lágrimas Bajo Tierra I - Iluminados por la Oscuridad</title>
</head>

<body>
	@include('components.scripts-social')

    @include('components.navbar')

	@yield('content')

	@include('components.footer')

	@include('components.scripts')
</body>

</html>
