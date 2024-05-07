<?php

include 'conexion_be.php';

$ub_recogida= $_POST['ub_recogida'];
$ub_devuelta= $_POST['ub_devuelta'];
$fe_recogida= $_POST['fe_recogida'];
$fe_devuelta= $_POST['fe_devuelta'];
$nombre= $_POST['nombre'];
$email= $_POST['email'];
$numero= $_POST['numero'];


$query = "INSERT INTO rentar(ub_recogida,ub_devuelta,fe_recogida,fe_devuelta,nombre,email,numero) 
VALUES ('$ub_recogida','$ub_devuelta','$fe_recogida','$fe_devuelta','$nombre','$email','$numero')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){

    echo'
    <script>
    
    alert ("Solicitud enviada exitosamente");
window.location = "fleet.php";
    </script>
    ';


} else{
    
    echo'
    <script>
    
    alert ("intenta de nuevo");
window.location = "fleet.php";
    </script>
    ';

    

}


mysqli_close($conexion);

?>