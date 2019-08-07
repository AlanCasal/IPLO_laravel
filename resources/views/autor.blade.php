@extends('layout.layout')

@section('content')

	{{-- Page Header --}}
	<header class="masthead" style="background-image: url({{ asset('img/writer.jpg') }})">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-10 mx-auto">
					<div class="post-heading">
						<center>
							<div>
								<img class="rounded-circle border border-light" src="{{ asset('img/lionar.jpeg') }}"
								     style="width: 30%" alt="">
							</div>
						</center>
						<br/>
					</div>
				</div>
			</div>
		</div>
	</header>

	{{-- Main Content --}}
	<article>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto indend">
					<div class="nunito">
						<p>Es difícil resumir una historia en pocas palabras, aunque más difícil resulta hablar de uno
							mismo.</p>
						<p>Simplemente te diré que la escritura es mi pasión, una carrera que vengo siguiendo con esta
							historia por poco más de nueve años.</p>
						<p>Al principio no era más que un adolescente descubriendo su camino, con baldozas conformadas
							por mis propias palabras componiendo textos incomprensibles, verbos mal conjugados e incluso
							algún que otro término inventado que atentaba contra toda integridad intelectual.</p>
						<p>De aquellos valientes quienes se sometieron a semejante tortura, sólo una ex novia fue capaz
							de abrirme los ojos con tan sólo tres palabras: "no lo entiendo". Por su puesto que nadie
							había sido capaz de entenderlo, si lo que escribía no reflejaba más que una fuerte necesidad
							de desahogar una tristeza que llevaba acumulada dentro mío, la cual sólo yo comprendía.</p>
						<p>Desde ese entonces que no dejo de reinventar, de escribir y reescribir (es un arma de doble
							filo, lo sé), de prestar atención al más mínimo detalle y desarrollar constantemente esa
							hermosa sensación de descubrir, en el momento exacto en que mis dedos se deslizan por las
							teclas de mi notebook, los sucesos y acontecimientos como todo lector a la hora de
							embarcarse en una gran historia.</p>
						<p>No te voy a mentir, en dos o tres ocasiones me he replanteado mi propia ética y moral ante
							escenas tan sangrientas que me han revuelto el estómago, con un detallismo tan perverso que
							por poco cometo el error de someterlas al tan detestable proceso de censura. Afortunadamente
							junté el coraje suficiente para no hacerlo, dejando a un lado la preocupación de lo que
							pudieran llegar a pensar los más cercanos a mi.</p>
						<p>Quiénes me conocen, sabrán que la perversidad que influencia mis escritos son un hecho
							aislado a mi personalidad, aunque debo admitir que me sentiría halagado si creyeran lo
							contrario, como el mérito que recibe todo actor ante una gran puesta en escena.</p>
						<p>Así que, mi querido/a lector/a, el agradecimiento que siento para contigo supera las barreras
							de esta vida. Gracias eternas por tu valioso tiempo invertido en mis líneas, de corazón.</p>
					</div>

					<p class="font-italic text-right" style="font-size: 1.2em">Lionar Stormrage.</p>
				</div>
			</div>
		</div>
	</article>

	@include('components/iralinicio')

@endsection
