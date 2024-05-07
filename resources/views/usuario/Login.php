<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CJC - Login</title>
    <link rel="icon" href="assets/images/favicon.jpg">
    <link rel="stylesheet" href="assets/css/Login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>
<body>

    <header class="">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="index.html"><h2>CJC <em>Rent a Car</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="index.html">Inicio
                        <span class="sr-only">(current)</span>
                      </a>
                  </li> 
  
                  <li class="nav-item"><a class="nav-link" href="fleet.php">Autos</a></li>
  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Más</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="team.html">Equipo</a>
                      <a class="dropdown-item" href="about-us.html">Sobre nosotros</a>
                    </div>
                </li>
  
                  <li class="nav-item"><a class="nav-link" href="contact.php">Contactanos</a></li>
                  <li class="nav-item active"><a class="nav-link" href="Login.php">LogIn</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
       
      <div class="Fondo">
      <img src="assets/images/LoginFondo.jpg" alt="">
      </div>







      <form action="inicio.php" method="POST">

    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar sesión</label>
           
           
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
                    


            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Usuario</label>
                        <input id="user" type="text" name="usuario" class="input" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Contraseña</label>
                        <input id="pass" type="password" name="contrasena" class="input" data-type="password" required>
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Mantener inicio de sesion</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Iniciar sesión">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="error.html">Olvidaste tu contraseña?</a>
                    </div>
                </div>
</form>




<form action="registro.php" method="POST">
                <div class="sign-up-htm">
                <div class="group">
                        <label for="user" class="label">Nombre completo</label>
                        <input id="user" type="text" name="nombre_completo" class="input">
                    </div>
                    <div class="group">
                        <label for="user" class="label">Usuario</label>
                        <input id="user" type="text" name="usuario" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Contraseña</label>
                        <input id="pass" type="password" name="contrasena"  class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email</label>
                        <input id="pass" name="correo" type="text" class="input">
                    </div>

                    <div class="group">
                        <label for="pass" class="label">nacionalidad</label>
                        <input id="pass" name="nacionalidad" type="text" class="input">
                    </div>

                    <div class="group">
                        <input href="login.php" type="submit" name="" class="button" value="Registrarse">
                    </div>
            </div>
        </div>
    </div>
</form>













</body>

<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>