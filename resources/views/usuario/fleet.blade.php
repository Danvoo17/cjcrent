<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CJC - Flota</title>
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

                <li class="nav-item active"><a class="nav-link" href="{{ route('fleet') }}">Flota</a></li>

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
    <div class="page-heading about-heading header-text" style="background-image: url(/cjcrent/public/images/Header1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Las mejores ofertas</h4>
              <h2>Vehiculos</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <span>
                  <a href="#" data-toggle="modal" data-target="#filtro">Filtro</a>
                </span>
    <div class="products">
    <div class="container">
        <div class="row">
            @foreach($vehiculos as $vehiculo)
            <div class="col-md-4">
                <div class="product-item">
                    <img src="{{ $vehiculo->imagen }}" alt="{{ $vehiculo->modelo->nombre }}">

                    <div class="down-content">
                        <h4>{{ $vehiculo->modelo->marca->nombre }} {{ $vehiculo->modelo->nombre }}</h4>

                        <h6><small>por </small> rd$ {{ $vehiculo->precio }} <small>semanal</small></h6>

                        <p>{{ $vehiculo->estado }}</p>

                        <small>
                            <strong title="Pasajeros"><i class="fa fa-user"></i> {{ $vehiculo->pasajeros }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Espacio"><i class="fa fa-briefcase"></i> {{ $vehiculo->maletas }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Traccion"><i class="fa fa-sign-out"></i> {{ $vehiculo->puertas }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Transmision"><i class="fa fa-cog"></i> {{ $vehiculo->transmision }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- Agrega otras características aquí -->
                        </small>

                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal">Rentar</a>
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>

    <x-footer></x-footer>

   

<div class="modal fade" id="filtro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Filtro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="filterForm">
              <div class="form-group">
                <label for="price-range">Rango de precio:</label>
                <input type="number" id="min-price" placeholder="Min" />
                <input type="number" id="max-price" placeholder="Max" />
              </div>
              <div class="form-group">
                <label for="transmission">Transmisión:</label>
                <select id="transmission">
                  <option value="">Todos</option>
                  <option value="AM">Automático</option>
                  <option value="A">Automático</option>
                  <option value="M">Manual</option>
                  <option value="DCT">DCT</option>
                </select>
              </div>
              <div class="form-group">
                <label for="passengers">Pasajeros:</label>
                <input type="number" id="passengers" />
              </div>
              <div class="form-group">
                <label for="doors">Puertas:</label>
                <input type="number" id="doors" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="applyFilter()">Aplicar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rentar ahora</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
    <div class="contact-form">
        <form method="POST" id="contact">
          @csrf
            <label for="">Ubicaciones</label>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <input name="ub_rec" type="text" class="form-control" placeholder="Ubicacion de recogida" required="">
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <input name="ub_dev" type="text" class="form-control" placeholder="Ubicacion de devuelta" required="">
                    </fieldset>
                </div>
            </div>
            <label for="">Fecha de recogida</label>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <input name="fe_rec" type="date" class="form-control" placeholder="fecha de recogida" required="">
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <input name="ho_rec" type="time" class="form-control" placeholder="fecha de recogida" required="">
                    </fieldset>
                </div>
            </div>
            <label for="">Fecha de devuelta</label>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <input name="fe_dev" type="date" class="form-control" placeholder="fecha de devuelta" required="">
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <input name="ho_dev" type="time" class="form-control" placeholder="fecha de recogida" required="">
                    </fieldset>
                </div>
            </div>
            @auth
                @if(auth()->user()->cliente)
                    <label for="">Cliente</label>
                    <input name="nombre" type="text" class="form-control" value="{{ auth()->user()->cliente->nombre }} {{ auth()->user()->cliente->apellido }}" disabled>
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <input name="email" type="text" class="form-control" value="{{ auth()->user()->email }}" disabled>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <input name="numero" type="text" class="form-control" value="{{ auth()->user()->cliente->telefono }}" disabled>
                            </fieldset>
                        </div>
                    </div>
                @else
                <label for="">Termine de registrar su datos</label><br>
                    <a href="" class="btn btn-primary">Completar Registro</a>
                @endif
            @endauth
        </form>
    </div>
</div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Rentar ahora</button>
          </div>
        </div>
      </div>
    </div>
  </form>


    <!-- Bootstrap core JavaScript -->
    <script src="/cjcrent/public/vendor/jquery/jquery.min.js"></script>
    <script src="/cjcrent/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/cjcrent/public/js/custom.js"></script>
    <script src="/cjcrent/public/js/owl.js"></script>

    <script>
      function applyFilter() {
        var minPrice = parseFloat(document.getElementById('min-price').value) || 0;
        var maxPrice = parseFloat(document.getElementById('max-price').value) || Infinity;
        var transmission = document.getElementById('transmission').value;
        var passengers = parseInt(document.getElementById('passengers').value) || 0;
        var doors = parseInt(document.getElementById('doors').value) || 0;

        var vehicles = document.getElementsByClassName('product-item');
        for (var i = 0; i < vehicles.length; i++) {
          var price = parseFloat(vehicles[i].querySelector('h6').textContent.replace(/[^\d.]/g, ''));
          var trans = vehicles[i].querySelector('strong[title="Transmision"]').textContent.trim();
          var pass = parseInt(vehicles[i].querySelector('strong[title="Pasajeros"]').textContent.trim());
          var door = parseInt(vehicles[i].querySelector('strong[title="Puertas"]').textContent.trim());

          if (price >= minPrice && price <= maxPrice && 
              (transmission === "" || trans === transmission) &&
              (passengers === 0 || pass === passengers) &&
              (doors === 0 || door === doors)) {
            vehicles[i].parentElement.style.display = "block";
          } else {
            vehicles[i].parentElement.style.display = "none";
          }
        }

        $('#filtro').modal('hide');
      }
    </script>
  </body>

</html>