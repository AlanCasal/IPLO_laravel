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
					<div class="site-heading" style="text-shadow: 2px 2px 5px black">
						<div> <!-- Comentarios -->
							<center>
								<p style="text-shadow: 2px 2px 5px black; font-size: 1.2em" class="nunito">
									Estás a punto de embarcarte en la más oscura y apasionante historia que hayas
									leído jamás, y los años, las horas de sueño, las lágrimas y el sacrificio
									invertidos en mis palabras son la prueba fehaciente de ello.
									Si descubres que lo que digo es cierto, puedes seguir el proceso de esta
									historia en su <a
											href="https://www.facebook.com/L%C3%A1grimas-Bajo-Tierra-I-Iluminados-Por-La-Oscuridad-258476418344566/"
											class="text-light" target="_blank"><strong>página oficial en Facebook</strong></a> ;
									también puedes seguirme en <a
											href="https://www.instagram.com/lionar_stormrage/?hl=es-la"
											class="text-light" target="_blank"><strong>Instagram</strong></a> donde, además de
									enterarte de las últimas novedades, también tendrás la oportunidad de leer los
									microrrelatos que en varias oportunidades iré subiendo de forma exclusiva en esa
									plataforma. Y por medio de un mensaje privado tendrás la oportunidad de
									continuar leyendo el capítulo 3 (y si estoy de buenas, también el capítulo 4) de
									la misma manera que lo harás aquí: gratis =).
									Sin más que decir, te deseo una deleitosa lectura, y gracias con el corazón por
									dedicarme lo más valioso y sagrado en esta vida: tu tiempo.</p>
								<p class="font-italic text-right" style="font-size: 1.2em">Lionar Stormrage.</p>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Main Content -->

	<center>
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card border border border-dark shadow p3">
				<img class="card-img-top" src="{{asset('img/coverart-book-sm.jpg?1')}}" alt="">
			</div>
		</div>
	</center>

	<br/>
	<hr/>
	<br/>
	<div class="container">

		<center>
			<h3 style="text-shadow: 1px 1px 2px black">
                <span class="my-3 advertencia " style="color: #ff2621">
                    <i class="fas fa-exclamation-triangle"></i> Advertencia
                </span>
			</h3>

			<span class="nunito">
                La siguiente obra contiene escenas de violencia explícita, sexo, lenguaje vulgar, alusión a las drogas, violación y canibalismo entre otros temas de oscura índole. Se recomienda discreción en su lectura.
            </span>

			<br/>
			<br/>
			<br/>
			<h3>Capítulos disponibles gratis</h3>
			<br/>
			<h3>Acto 1</h3>
		</center>

		<br/>

		<div class="row justify-content-center text-center nunito"> <!-- cards -->

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

			<div class="col-lg-3 col-md-6 mb-4">
				<div class="card border border border-dark shadow p3">
					<a href="{{ asset('files/dialogos_idiomas.pdf') }}" target="_blank">
						<img class="card-img-top" src="{{ asset('img/blood_feather.jpeg') }}" alt="">
					</a>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">TRADUCCIONES<br/><br/></li>
					</ul>
					<div class="card-footer text-muted btn">
						<a href="{{ asset('files/dialogos_idiomas.pdf') }}" target="_blank">
							<i class="fas fa-book-open"></i> LEER YA !
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>

	@include('components/iralinicio')

@endsection
