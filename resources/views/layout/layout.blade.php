<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	@include('components.head')
	<title>Lágrimas Bajo Tierra I - Iluminados por la Oscuridad</title>
</head>

<body>
	@include('components.scripts-social')

    @include('components.navbar')

	<section>
		@yield('content')
	</section>

	<section style="padding-top: 100px; background-color: rgba(0,0,0,.05)">
		@include('components.footer')
	</section>

	@include('components.scripts')
</body>

</html>
