<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CJC - Inicio</title>
    <link rel="icon" href="\cjcrent\public\favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="/cjcrent/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--Additional CSS Files -->
    <link rel="stylesheet" href="/cjcrent/public/css/fontawesome.css">
    <link href="/cjcrent/public/css/style.css" rel="stylesheet" >
    <link rel="stylesheet" href="/cjcrent/public/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ route('index') }}"><h2>CJC <em>Rent a Car</em></h2></a>
          <button id="resbut" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('index') }}">Inicio
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="{{ route('fleet') }}">Flota</a></li>

                @auth

                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contactanos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Sobre Nosotros</a></li>

                <!-- perfil de usuario -->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                    </a>

                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a>
                    
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                        <a class="dropdown-item" :href="route('logout')" 
                          onclick="event.preventDefault();
                          this.closest('form').submit();" style="cursor:pointer">Cerrar sesión
                        </a>
                    </form>
                  </div>
                </li>
                @else

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Más</a>
                  
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('contact') }}">Contactanos</a>
                    <a class="dropdown-item" href="{{ route('about') }}">Sobre nosotros</a>
                  </div>
                </li>


                  <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Inicia sesión</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" style="cursor: pointer">Registrate</a></li>
                @endauth
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Encuentra el auto perfecto!</h4>
            <h2>CJC Rent a car</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Lujo y calidad</h4>
            <h2>Los mejores precios!</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Diferente a otros rent a car</h4>
            <h2>Los mejores vehiculos</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Nuestra flota</h2>
              <a href="{{ route('fleet') }}">Ver más <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="fleet2.php"><img src="/cjcrent/public/images/main/camaro.png" alt=""></a>
              <div class="down-content">
                <a href="fleet2.php"><h4>Deportivos</h4></a>
                <p>Nuestros autos deportivos están diseñados para aquellos que buscan velocidad y estilo. Con motores potentes y un diseño aerodinámico, estos vehículos te brindarán una experiencia de conducción inigualable.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="fleet2.php"><img src="/cjcrent/public/images/main/mbcls.png" alt=""></a>
              <div class="down-content">
                <a href="fleet2.php"><h4>Sedanes</h4></a>
                <p>El equilibrio perfecto entre confort y eficiencia. Nuestros sedanes son ideales para viajes de negocios, familias pequeñas o cualquier persona que busque un viaje cómodo y elegante, asi tambien con amplio espacio para pasajeros y equipaje.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="fleet2.php"><img src="/cjcrent/public/images/main/lexuslx.png" alt=""></a>
              <div class="down-content">
                <a href="fleet2.php"><h4>SUV</h4></a>
                <p> nuestros SUVs ofrecen espacio, potencia y versatilidad. Equipados con tracción en las cuatro ruedas, son perfectos para cualquier terreno, ya sea para ir a la montaña o un viaje por la ciudad. Disfruta de la comodidad, seguridad y capacidad de carga superior que solo un SUV puede ofrecer.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Sobre nosotros</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>CJC Rent a car, tal como indica el nombre es un negocio de <a target="_blank" href="https://es.wikipedia.org/wiki/Alquiler_de_autom%C3%B3viles">Alquiler de vehiculos</a> de gran prestigio en republica dominicana, esto por la confiabilidad y calidad de los coches, y por sus buenos precios. Y tambien nos hemos ganado un buen respeto por nuestros valores y la amibilidad de nuestros empleados.</p>
              <ul class="featured-list">
                <li><a href="#">Calidad</a></li>
                <li><a href="#">Buenos precios</a></li>
                <li><a href="#">Amabilidad</a></li>
                <li><a href="#">confiabilidad</a></li>
              </ul>
              <a href="{{ route('about') }}" class="filled-button">Leer más</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Clientes satisfechos</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-clients owl-carousel text-center">
                    @php
                    $mensajes = \App\Models\Mensaje::orderBy('created_at', 'desc')->limit(6)->get();
                    @endphp
                    @foreach ($mensajes as $mensaje)
<div class="service-item">
    <div class="icon">
        <i class="fa fa-user"></i>
    </div>
    <div class="down-content">
        @if ($mensaje->cliente)
        <h4>{{ $mensaje->cliente->nombre }}</h4>
        @elseif ($mensaje->usuario)
        <h4>{{ $mensaje->usuario->name }}</h4>
        @endif
        <h5>{{ $mensaje->asunto }}</h5>
        <p class="n-m"><em>{{ $mensaje->mensaje }}</em></p>
    </div>
</div>
@endforeach

                </div>
            </div>
        </div>
    </div>
</div>



    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Haz tenido un inconveniente?</h4>
                  <p>Si haz tenido algun inconveniente o tienes quejas, puedes contactarnos.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="{{ route('contact') }}" class="filled-button">Contactanos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <x-footer></x-footer>


    <!-- Bootstrap core JavaScript -->
    <script src="/cjcrent/public/vendor/jquery/jquery.min.js"></script>
    <script src="/cjcrent/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/cjcrent/public/js/custom.js"></script>
    <script src="/cjcrent/public/js/owl.js"></script>
  </body>
</html> 