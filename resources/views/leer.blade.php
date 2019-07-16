@extends('layout.layout')

@section('content')

@php
$title = 'Leer';
$headerImg = 'img/header.jpg';
@endphp

{{-- Page Header --}}
<header class="masthead" style='background-image: url({{ asset("img/header.jpg") }})'>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 mx-auto">
                <div class="post-heading" style="text-shadow: 2px 2px 5px black">
                    <div class="row"> <!-- Libro -->
                        <div> <!-- Comentarios -->
                            <center>
                                <h3 class="my-3 advertencia" style="color: #ff2621">
                                    <i class="fas fa-exclamation-triangle"></i> Advertencia
                                </h3>
                                <p>La siguiente obra contiene escenas de violencia explícita, sexo, lenguaje vulgar, alusión a las drogas, violación y canibalismo entre otros temas de oscura índole. Se recomienda discreción en su lectura.</p>
                                <h3 class="my-3">
                                    <i class="fas fa-info-circle"></i>  Una breve ayuda al lector
                                </h3>
                            </center>
                            <ul>
                                <li>Cursiva utilizada para describir recuerdos, pensamientos, alucinaciones y palabras entre comillas.</li>
                                <li>Idiomas varios, de momento aclarados entre paréntesis.</li>

                                <p class="text-center">Que lo disfruten. =)</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <h3><center>Capítulos disponibles gratis</center></h3>
    <br/>
    <center><h3>Acto 1</h3></center>

    <div class="row justify-content-center text-center"> <!-- cards -->



        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border border border-dark shadow p3">
                <a href="{{ asset('files/cap1-final-output.pdf') }}" target="_blank">
                    <img class="card-img-top" src="{{ asset('img/skulls1.jpg') }}" alt="">
                </a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">CAPÍTULO 1<br/><br/></li>
                </ul>
                <div class="card-footer text-muted btn">
                    <a href="{{ asset('files/cap1-final-output.pdf') }}" target="_blank">
                        <i class="fas fa-book-open"></i> LEER YA !
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border border border-dark shadow p3">
                <a href="{{ asset('files/cap2-final-output.pdf') }}" target="_blank">
                    <img class="card-img-top" src="{{ asset('img/skulls2.jpg') }}" alt="">
                </a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">CAPÍTULO 2 <br/><br/></li>
                </ul>
                <div class="card-footer text-muted btn">
                    <a href="{{ asset('files/cap2-final-output.pdf') }}" target="_blank">
                        <i class="fas fa-book-open"></i> LEER YA !
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border border border-dark shadow p3">
                <a href="{{ asset('files/cap3-final-output.pdf') }}" target="_blank">
                    <img class="card-img-top" src="{{ asset('img/skulls3.jpg') }}" alt="">
                </a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">CAPÍTULO 3 (fragmento)</li>
                </ul>
                <div class="card-footer text-muted btn" disabled>
                    <a href="{{ asset('files/cap3-final-output.pdf') }}" target="_blank">
                        <i class="fas fa-book-open"></i> LEER YA !
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <hr/>
    <br/>

    <div class="container">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid border border-white" src="{{ asset('img/coverart-book.jpg?1') }}" style="width: 100%">
                </div>
                <div class="col-md-6"> <!-- Comentarios -->
                    Querido/a lector/a, te agradezco de todo corazón por haber invertido una parte de tu valioso tiempo en mis palabras.
                    <p>Si te gustó lo que leíste, te pido humildemente que me regales un “me gusta” y lo compartas en tu red social predilecta; con esto me ayudas enormemente no sólo a conseguir más lectores, sino a achicar aquella larga espera en que pueda cumplir el sueño de ver este trabajo impreso en papel.</p>
                    <p>¡Gracias, de todo corazón!</p>
                    <p class="font-italic text-right text-muted">Lionar Stormrage.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components/iralinicio')

@endsection
