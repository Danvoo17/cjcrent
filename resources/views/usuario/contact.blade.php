<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CJC - Contacto</title>
    <link rel="icon" href="\cjcrent\public\favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="/cjcrent/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/cjcrent/public/css/fontawesome.css">
    <link rel="stylesheet" href="/cjcrent/public/css/style.css">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Inicio
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="{{ route('fleet') }}">Flota</a></li>

                @auth

                <li class="nav-item active"><a class="nav-link" href="{{ route('contact') }}">Contactanos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Sobre Nosotros</a></li>

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
    <div class="page-heading contact-heading header-text" style="background-image: url(/cjcrent/public/images/Header7.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Tienes preguntas?</h4>
              <h2>Contactanos</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Nuestra ubicacion en el mapa</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.2406701396376!2d-70.68937845658625!3d19.445187703882514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf6224264495%3A0x32bc4f5495980210!2sManuel%20Autocenter!5e0!3m2!1ses!2sdo!4v1674455181252!5m2!1ses!2sdo" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>Sobre nuestro oficio</h4>
              <p>CJC Es un rent a car de alto prestigio en el país, nosotros estamos ubicados en santiago y en nuestro local podrás ver toda una gama de vehiculos de todo tipo.</p>
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

    
    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>¡Mándanos un mensaje!</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="row">
                              
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="asunto" type="text" class="form-control" id="subject" placeholder="Asunto" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="mensaje" rows="6" class="form-control" id="message" placeholder="Tu mensaje" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Enviar mensaje</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
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