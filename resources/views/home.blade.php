@extends('layout.layout')

@section('content')
@php
$headerTitle = '<p>Lágrimas Bajo Tierra <span class="romano">I</span> <br/> Iluminados por la oscuridad</p>';
$headerText = "<p class='nunito'>Tristeza, dolor y sufrimiento, malignos tumores de nuestra existencia difíciles de extirpar; nos afligen, nos carcomen, y nos creemos invictos cuando logramos vencerlos luego de una ardua lucha... que ingenuos... Imagina escarmentar sus latigazos en todo el cuerpo y a toda hora, desde que despiertas hasta que vuelves a despertar, una, y otra, y otra vez, hasta que el tiempo deje de ser tiempo. </p><p>¡Bienvenidos al infierno! </p><p>Bienvenidos, al reino de la muerte y el eterno sufrimiento.</p>";
@endphp

{{--Page Header--}}
<header class="masthead" style='background-image: url({{ asset("img/header.jpg") }})'>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading" style="text-shadow: 2px 2px 5px black">
                    <h1 class="font-weight-normal font-italic" style="font-size: 2.75em">@php echo $headerTitle @endphp</h1>
                    <h5 class="font-weight-normal">@php echo $headerText @endphp</h5>
                </div>
            </div>
        </div>
    </div>
</header>

<br/>

<center>
    <div class = "card border border border-dark shadow p3" style = "width:18rem;">
        <a   href  = "{{ route('leer') }}" class = "card-link text">
            <img class = "card-img-top" src = "img/coverart-book-sm.jpg?1" alt = "Card image cap">
            <div class = "card-footer">
                <i   class = "fas fa-book-open"></i> LEER YA !
            </div>
        </a>
    </div>
</center>
<br/>
<br/>

@include('components/iralinicio')

@endsection
