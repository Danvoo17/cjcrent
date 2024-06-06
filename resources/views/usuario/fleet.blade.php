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

    <style>
        /* Estilos para el modal de filtro */
        #filtro .modal-dialog {
            max-width: 600px;
        }

        #filtro .modal-content {
            padding: 20px;
            border-radius: 8px;
        }

        #filtro .modal-header {
            border-bottom: none;
        }

        #filtro .modal-title {
            font-size: 24px;
            font-weight: bold;
        }

        #filtro .close {
            font-size: 24px;
        }

        #filtro .form-group {
            margin-bottom: 15px;
        }

        #filtro label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        #filtro input[type="number"],
        #filtro input[type="text"],
        #filtro select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        #filtro button.btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        #filtro button.btn:hover {
            background-color: #0056b3;
        }

        /* Estilos para los elementos de los vehículos */

        .filte-button {
           
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin: 20px auto;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .filte-button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .filte-button:focus {
            outline: none;
        }

        /* Centrado del botón en la página */
        
    </style>

</head>

<body>

    <!-- ** Preloader Start ** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ** Preloader End ** -->

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
    <div class="center-button">
        <button class="filte-button" data-toggle="modal" data-target="#filtro">Filtro</button>
    </div>
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
                            <strong title="Puertas"><i class="fa fa-sign-out"></i> {{ $vehiculo->puertas }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="maletas"><i class="fa fa-briefcase"></i> {{ $vehiculo->maletas }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Traccion"><i class="fa fa-cogs"></i> {{ $vehiculo->traccion }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Transmision"><i class="fa fa-cog"></i> {{ $vehiculo->transmision }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- Agrega otras características aquí -->
                        </small>

                            <span>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Rentar</a>
                            </span>
                        </div>
                        <span>
                                <button class="btn btn-primary ver-mas-btn" data-toggle="modal" data-target="#examplModal{{ $vehiculo->id }}">Ver más</button>
                            </span>
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
                                <option value="A">A</option>
                                <option value="MT">MT</option>
                                <option value="DCT">DCT</option>
                                <option value="CVT">CVT</option>
                                <option value="SMT">SMT</option>
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
                        <div class="form-group">
                            <label for="year">Año:</label>
                            <input type="number" id="year" />
                        </div>
                        <div class="form-group">
                            <label for="maletas">Maletas:</label>
                            <input type="number" id="maletas" />
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo:</label>
                            <select id="type">
                                <option value="">Todos</option>
                                <option value="deportivo">Deportivo</option>
                                <option value="sedan">Sedan</option>
                                <option value="compacto">Compacto</option>
                                <option value="SUV">SUV</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="traccion">Tracción:</label>
                            <select id="traccion">
                                <option value="">Todos</option>
                                <option value="RWD">RWD</option>
                                <option value="FWD">FWD</option>
                                <option value="AWD">AWD</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="opciones">Opciones:</label>
                            <input type="text" id="opciones" />
                        </div>
                        <button type="button" class="btn btn-primary" onclick="applyFilter()">Aplicar filtro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- modal ver mas --> 
<div class="modal fade" id="examplModal{{ $vehiculo->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModaLabel{{ $vehiculo->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel{{ $vehiculo->id }}">Detalles del Vehículo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Información detallada del vehículo -->
                                <h4>{{ $vehiculo->modelo->marca->nombre }} {{ $vehiculo->modelo->nombre }}</h4>
                                <p>Precio: RD$ {{ $vehiculo->precio }} semanal</p>
                                <p>Estado: {{ $vehiculo->estado }}</p>
                                <p>Año: {{ $vehiculo->anio }}</p>
                                <p>Color: {{ $vehiculo->color }}</p>
                                <p>Pasajeros: {{ $vehiculo->pasajeros }}</p>
                                <p>Puertas: {{ $vehiculo->puertas }}</p>
                                <p>Maletas: {{ $vehiculo->maletas }}</p>
                                <p>Tipo: {{ $vehiculo->tipo }}</p>
                                <p>Tracción: {{ $vehiculo->traccion }}</p>
                                <p>Transmisión: {{ $vehiculo->transmision }}</p>
                                <p>Motor: {{ $vehiculo->motor }}</p>
                                <p>Opciones: {{ $vehiculo->opciones }}</p>
                                <!-- Agregar más detalles según sea necesario -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin del Modal -->

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
    var year = parseInt(document.getElementById('year').value) || 0;
    var maletas = parseInt(document.getElementById('maletas').value) || 0;
    var type = document.getElementById('type').value;
    var traccion = document.getElementById('traccion').value.trim();
    var opciones = document.getElementById('opciones').value.trim();

    var vehicles = document.getElementsByClassName('product-item');
    for (var i = 0; i < vehicles.length; i++) {
        var priceElem = vehicles[i].querySelector('h6');
        var transElem = vehicles[i].querySelector('strong[title="Transmision"]');
        var passElem = vehicles[i].querySelector('strong[title="Pasajeros"]');
        var doorElem = vehicles[i].querySelector('strong[title="Puertas"]');
        var maletasElem = vehicles[i].querySelector('strong[title="maletas"]'); // Correct title attribute
        var tipoElem = vehicles[i].querySelector('strong[title="Tipo"]');
        var traccionElem = vehicles[i].querySelector('strong[title="Traccion"]');
        var opcionesElem = vehicles[i].querySelector('strong[title="Opciones"]');

        var price = priceElem ? parseFloat(priceElem.textContent.replace(/[^\d.]/g, '')) : 0;
        var trans = transElem ? transElem.textContent.trim() : '';
        var pass = passElem ? parseInt(passElem.textContent.trim()) : 0;
        var door = doorElem ? parseInt(doorElem.textContent.trim()) : 0;
        var maletasVeh = maletasElem ? parseInt(maletasElem.textContent.trim()) : 0; // Correct element and parsing
        var tipoVeh = tipoElem ? tipoElem.textContent.trim() : '';
        var traccionVeh = traccionElem ? traccionElem.textContent.trim() : '';
        var opcionesVeh = opcionesElem ? opcionesElem.textContent.trim() : '';

        if (price >= minPrice && price <= maxPrice &&
            (transmission === "" || trans === transmission) &&
            (passengers === 0 || pass === passengers) &&
            (doors === 0 || door === doors) &&
            (maletas === 0 || maletasVeh === maletas) && // Corrected comparison for maletas
            (type === "" || tipoVeh === type) &&
            (traccion === "" || traccionVeh === traccion) &&
            (opciones === "" || opcionesVeh.includes(opciones))) {
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
