<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CJC - Inicio</title>
    <link href="/cjcrent/public/css/style.css" rel="stylesheet" >
    <link rel="shortcut icon" href="/cjcrent/public/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="/cjcrent/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--Additional CSS Files -->
    <link rel="stylesheet" href="/cjcrent/public/css/fontawesome.css">
    <link rel="stylesheet" href="/cjcrent/public/css/owl.css">

  </head>

<style>
  
</style>

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
          <a class="navbar-brand" href="index.blade.pho"><h2>CJC <em>Rent a Car</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.blade.php">Inicio
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a href="{{ route('fleet') }}">Flota</a></li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Más</a>
                  
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="team.blade.php">Equipo</a>
                    <a class="dropdown-item" href="aboutus.blade.php">Sobre nosotros</a>
                  </div>
              </li>

                <li class="nav-item"><a class="nav-link" href="contact.blade.php">Contactanos</a></li>
                <li class="nav-item"><a class="nav-link" href="Login.blade.php">LogIn</a></li>
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
              <h2>Ofertas</h2>
              <a href="fleet.php">Ver más <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="fleet2.php"><img src="assets/images/producto7.png" alt=""></a>
              <div class="down-content">
                <a href="fleet2.php"><h4>Hyundai Sonata</h4></a>
                <h6><small>por</small> $5,000 <small>semanal</small></h6>
                <p>Un auto basico, moderno, rapido, comodo, y de bajo consumo.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="fleet2.php"><img src="assets/images/producto8.jpg" alt=""></a>
              <div class="down-content">
                <a href="fleet2.php"><h4>Toyota Rav4</h4></a>
                <h6><small>por</small> $10,000 <small>semanal</small></h6>
                <p>calidad-precio, un vehiculo perfecto para viajes largos, y para diario.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="fleet2.php"><img src="assets/images/producto9.jpg" alt=""></a>
              <div class="down-content">
                <a href="fleet2.php"><h4>Hyundai Accent</h4></a>
                <h6><small>por</small> $3,000 <small>semanal</small></h6>
                <p>un vehiculo familiar, barato, comodo, y de bajo consumo. Perfecto para el dia a dia.</p>
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
              <p>J&J Rent a car, tal como indica el nombre es un negocio de <a target="_blank" href="https://es.wikipedia.org/wiki/Alquiler_de_autom%C3%B3viles">Alquiler de vehiculos</a> de gran prestigio en republica dominicana, esto por la confiabilidad y calidad de los coches, y por sus buenos precios. Y tambien nos hemos ganado un buen respeto por nuestros valores y la amibilidad de nuestros empleados.</p>
              <ul class="featured-list">
                <li><a href="#">Calidad</a></li>
                <li><a href="#">Buenos precios</a></li>
                <li><a href="#">Amabilidad</a></li>
                <li><a href="#">confiabilidad</a></li>
              </ul>
              <a href="about-us.html" class="filled-button">Leer más</a>
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

    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Blogs recientes</h2>

              <a href="blog.html">Leer más <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="blog1.php" class="services-item-image"><img src="assets/images/producto12.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="blog1.php">Joven de 16 años roba vehiculo de J&J Rent a Car</a></h4>

                <p style="margin: 0;"> Joseph Cruz &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2022 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 209</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="blog2.php" class="services-item-image"><img src="assets/images/blog-2-370x270.png" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="blog2.php">Nuevo carro en venta, y entrevista con Elon Musk</a></h4>

                <p style="margin: 0;"> Joseph Cruz &nbsp;&nbsp;|&nbsp;&nbsp; 1/06/2023 5:10 &nbsp;&nbsp;|&nbsp;&nbsp; 193</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="blog3.php" class="services-item-image"><img src="assets/images/twingo_blog-3-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="blog3.php">Twingo brilla mas que shakira</a></h4>

                <p style="margin: 0;"> Joseph Cruz &nbsp;&nbsp;|&nbsp;&nbsp; 1/06/2023 5:10 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
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
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Anónimo</h4>
                  <p class="n-m"><em>Muy pocas veces en mi vida habia estado tan satisfecho con un vehiculo rentado, pero J&J me sorprendió.</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i><img src="assets/images/Mujer.jpg" alt=""></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>El sitio web es muy agradable y se ve bonito a la vista, pude rentar mi auto por aqui y fué un proceso muy facil.</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i><img src="assets/images/Calvo.jpg" alt=""></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>Yo renté el vehiculo en persona, un pontiac vibe, fué una experiencia agradable, los trabajadores son muy amigables.</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i><img src="assets/images/Luisardo.png" alt=""></i>
                </div>
                <div class="down-content">
                  <h4>Luisardo</h4>
                  <p class="n-m"><em>Este rent a car se convirtio en mi favorito, simplemente 10/10.</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i><img src="assets/images/sagiri.jpg" alt=""></i>
                </div>
                <div class="down-content">
                  <h4>Cris UwU</h4>
                  <p class="n-m"><em>Me sorprendió lo facil que pude rentar un vehiculo aquí, en otros sitios web se me complicaba y era muy largo el proceso.</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i><img src="assets/images/Tortuga.jpg" alt=""></i>
                </div>
                <div class="down-content">
                  <h4>José Hernandez</h4>
                  <p class="n-m"><em>Los trabajadores caen muy bien, y los vehiculos tienen buena calidad y son confiables, 10/10</em></p>
                </div>
              </div>
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
                  <a href="contact.php" class="filled-button">Contactanos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2023 J&J Rent a car. <br> <a href="contact.php">Contactanos!</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="/cjcrent/public/vendor/jquery/jquery.min.js"></script>
    <script src="/cjcrent/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/cjcrent/public/js/custom.js"></script>
    <script src="/cjcrent/public/js/owl.js"></script>
  </body>
</html> 