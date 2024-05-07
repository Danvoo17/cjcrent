
<?php 

$conexion = mysqli_connect("localhost", "root", "S.skuller46", "mini_proyecto");

if($conexion){
echo 'Conectado exitosamente a la base de datos';
}else{
    echo 'No se ha podido conectar a la base de datos';
}




?>

