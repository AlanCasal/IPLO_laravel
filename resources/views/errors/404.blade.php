@extends('layout.layout')

@section('content')

{{--Page Header--}}
<header class="masthead" style='background-image: url({{ asset("img/header.jpg") }})'>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading" style="text-shadow: 2px 2px 5px black">
                    <h3 class="font-weight-light font-italic">Página no encontrada</h3>
                    <br/>
                    <h1 class="font-weight-bold" style="font-size: 3em">Error 404</h1>
                    <br/>
                    <h5 class="font-weight-normal">La página que está solicitando no se ha encontrado</h5>
                </div>
            </div>
        </div>
    </div>
</header>

<center>
    <a href="{{ url()->previous() }}">
        <button type="button" class="btn btn-primary" id="sendMessageButton">Volver</button>
    </a>
</center>

@endsection

