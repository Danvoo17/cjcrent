<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CJC - Sobre nosotros</title>
    <link rel="icon" href="\cjcrent\public\favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="\cjcrent\public\vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="\cjcrent\public\css\fontawesome.css">
    <link rel="stylesheet" href="\cjcrent\public\css\style.css">
    <link rel="stylesheet" href="\cjcrent\public\css\owl.css">

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

  <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ route('index') }}"><h2>CJC <em>Rent a Car</em></h2></a>
          <button id="resbut" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Inicio
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="{{ route('fleet') }}">Flota</a></li>

                @auth

                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contactanos</a></li>
                <li class="nav-item active"><a class="nav-link" href="{{ route('about') }}">Sobre Nosotros</a></li>

                <!-- perfil de usuario -->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                    </a>

                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a>

                    <!-- Verificar si el usuario es admin -->
                    @if (Auth::user()->rol == 'admin')
                        <a class="dropdown-item" href="{{ route('ad-dash') }}">Dashboard</a>
                    @endif
                    
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

                <li class="nav-item dropdown active">
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
    <div class="page-heading about-heading header-text" style="background-image: url(/cjcrent/public/images/Header6.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Sobre nosotros</h4>
              <h2>Nuestra compañía</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>¿Quienes somos nosotros? - Nuestra historia</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="\cjcrent\public\images\about-2-570x350.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>¿Quienes somos?</h4>
              <p>CJC Rent a car, tal como indica el nombre es un negocio de <a target="_blank" href="https://es.wikipedia.org/wiki/Alquiler_de_autom%C3%B3viles">Alquiler de vehiculos</a> de gran prestigio en republica dominicana, esto por la confiabilidad y calidad de los coches, y por sus buenos precios. Y tambien nos hemos ganado un buen respeto por nuestros valores y la amibilidad de nuestros empleados. <br><br> Decidimos establecer este rent a car por nuestro amor a los autos, y queriamos mostrarle a las personas algo diferente del resto de rent a cars con la calidad y los increibles precios que tenemos.</p>
              <ul class="social-icons">
                <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100089339351495&mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/j_jrentacar4"><i class="fa fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/jyjrentacar/"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Nuestra historia</h2>
            </div>

            <h5>Como surgió CJC</h5>
            <br>

            <p>CJC es de los mejores rent a car, este fué fundado por Joel Castaños, Joseph Cruz y Steven jimenez, ellos 3 eran amigos cuando estudiaban en sus años de juventud, los tres compartian algo en común, les gustaban los autos, luego de terminar la universidad los tres coincidieron con la misma idea, tener un rent a car. <br><br> Asi que se pusieron de acuerdo y establecieron un rent a car el cual se llamaba JayCees (esto por sus iniciales, joel castaños, joseph cruz, y la S de steven), luego le cambiaron el nombre ya que se parecia mucho al del rapero Jay Z. Luego de hacer este cambio, el negocio empezó a llamarse CJC Rent a Car, el cual se ha mantenido hasta el dia de hoy.</p>
            <br>
            <p>El lugar empezó siendo pequeño y sin mucho espacio para vehiculos, pero la amabilidad de los trabajadores y los buenos precios siguieron atrayendo a mas clientes, esto ayudó a avanzar mucho al negocio, y poco a poco CJC se fué convirtiendo en uno de los rent a car mejor valorados del país, y conforme pasaba el tiempo seguia mejorando hasta llegar a lo que es hoy.</p>
            <p></p>
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