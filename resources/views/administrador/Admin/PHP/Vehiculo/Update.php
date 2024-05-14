<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        form {
            margin-top: 20px;
        }
        form input[type="text"],
        form input[type="number"],
        form input[type="date"],
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background-color: #45a049;
        }
        h1 {
            text-align: center;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
<?php
include_once 'Conectar.php';

if(isset($_POST['Update'])) {
    $id_vehiculo = $_POST['id_vehiculo'];
    $matricula = $_POST['matricula'];
    $precio = $_POST['precio'];
    $color = $_POST['color'];
    $estado = $_POST['estado'];
    $pasajeros = $_POST['pasajeros'];
    $puertas = $_POST['puertas'];
    $maletas = $_POST['maletas'];
    $tipo = $_POST['tipo'];
    $traccion = $_POST['traccion'];
    $transmision = $_POST['transmision'];
    $motor = $_POST['motor'];
    $opciones = $_POST['opciones'];
    $imagen = $_POST['imagen'];
    $id_modelo = $_POST['id_modelo'];
    $id_seguro = $_POST['id_seguro'];

    $sqlupdate = "UPDATE vehiculo SET matricula='$matricula', precio='$precio', color='$color', estado='$estado',pasajeros='$pasajeros', puertas='$puertas', maletas='$maletas', tipo='$tipo',traccion='$traccion', transmision='$transmision', motor='$motor', opciones='$opciones', imagen='$imagen',id_modelo='$id_modelo',id_seguro='$id_seguro' WHERE id_vehiculo='$id_vehiculo'";

    mysqli_query($mysqli, $sqlupdate);

    // Redirigir de vuelta al index.php con los valores actualizados en la URL
    header("location: ./index.php?update=success&id_vehiculoo=$id_vehiculo&matricula=$matricula&precio=$precio&color=$color&estado=$estado&pasajeros=$pasajeros&puertas=$puertas&maletas=$maletas&tipo=$tipo&traccion=$traccion&transmision=$transmision&motor=$motor&opciones=$opciones&imagen=$imagen&id_modelo=$id_modelo&id_seguro=$id_seguro");
    exit(); // Asegura que no se ejecute más código después de la redirección
}
?>
