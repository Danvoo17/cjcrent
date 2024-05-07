
<?php 

include 'conexion_be.php';

$nombre_completo= $_POST['nombre_completo'];
$correo= $_POST['correo'];
$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];
$nacionalidad= $_POST['nacionalidad'];


$query = "INSERT INTO login(nombre_completo,correo,usuario,contrasena, nacionalidad) 
VALUES ('$nombre_completo','$correo','$usuario', '$contrasena', '$nacionalidad')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){

    echo'
    <script>
    
    alert ("usuario almacenado exitosamente");
window.location = "login.php";
    </script>
    ';


} else{
    
    echo'
    <script>
    
    alert ("intenta de nuevo");
window.location = "Login.php";
    </script>
    ';

    

}


mysqli_close($conexion);

?>

