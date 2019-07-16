{{-- Navigation --}}
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="text-shadow: 1px 1px 3px black">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="fas fa-home"></i> Home
        </a>
        <button
            class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('leer') }}">
                        <i class="fas fa-book-open"></i> Leer
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('autor') }}">
                        <i class="fas fa-pen-nib"></i> Acerca del autor
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">
                        <i class="fas fa-envelope"></i> Contacto
                    </a>
                </li>

                <div class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="https://twitter.com/Lionar_St" target="_blank">
                            <span class="fa-stack fa-sm">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/L%C3%A1grimas-Bajo-Tierra-I-Iluminados-Por-La-Oscuridad-258476418344566/" target="_blank">
                            <span class="fa-stack fa-sm">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/lionar_stormrage/?hl=es-la" target="_blank">
                            <span class="fa-stack fa-sm">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.wattpad.com/user/LionarStormrage" target="_blank">
                            <span class="fa-stack fa-sm">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-weebly fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>
