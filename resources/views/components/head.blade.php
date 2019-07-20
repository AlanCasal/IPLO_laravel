<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    {{--CSRF TOKEN--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Icon --}}
    <link href="{{ asset('img/icono.png') }}" rel="icon" type="image/png" />

    {{-- Bootstrap core CSS --}}
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Custom fonts for this template --}}
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> --}}

    {{-- Custom template styles --}}
    <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet" />

    {{-- Custom styles --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="screen" />
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <title>Lágrimas Bajo Tierra I - Iluminados por la Oscuridad</title>
</head>
<body>
