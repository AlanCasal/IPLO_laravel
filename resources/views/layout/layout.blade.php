<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	@include('components.head')
</head>

<body>
	@include('components.scripts-social')

    @include('components.navbar')

	@yield('content')

	@include('components.footer')

	@include('components.scripts')
</body>

</html>
