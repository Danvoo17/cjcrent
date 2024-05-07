<?php

include 'conexion_be.php';

$nombre= $_POST['nombre'];
$email= $_POST['email'];
$asunto= $_POST['asunto'];
$mensaje= $_POST['mensaje'];


$query = "INSERT INTO message(nombre,email,asunto,mensaje) 
VALUES ('$nombre','$email','$asunto','$mensaje')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){

    echo'
    <script>
    
    alert ("Mensaje enviado exitosamente");
window.location = "contact.php";
    </script>
    ';


} else{
    
    echo'
    <script>
    
    alert ("intenta de nuevo");
window.location = "contact.php";
    </script>
    ';

    

}


mysqli_close($conexion);

?>