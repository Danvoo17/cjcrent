
<?php 

include 'conexion_be.php';

$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];


$query = "INSERT INTO iniciologin(usuario,contrasena) 
VALUES ('$usuario', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){

    echo'
    <script>
    
    alert ("usuario almacenado exitosamente");
window.location = "index.html";
    </script>
    ';


} else{
    
    echo'
    <script>
    
    alert ("intenta de nuevo");
window.location = "index.php";
    </script>
    ';


}


mysqli_close($conexion);

?>
