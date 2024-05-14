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
    $id_cliente = $_POST['id_cliente'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nac = $_POST['fecha_nac'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $cedula = $_POST['cedula'];
    $licencia = $_POST['licencia'];
    $id_user = $_POST['id_user'];

    $sqlupdate = "UPDATE cliente SET nombre='$nombre', apellido='$apellido', fecha_nac='$fecha_nac', telefono='$telefono', emai='$email', cedula='$cedula', licencia='$licencia', id_user='$id_user' WHERE id_cliente='$id_cliente'";

    mysqli_query($mysqli, $sqlupdate);

    // Redirigir de vuelta al index.php con los valores actualizados en la URL
    header("location: ./index.php?update=success&&id_cliente=$id_cliente&nombre=$nombre&apellido=$apellido&fecha_nac=$fecha_nac&telefono=$telefono&emai=$email&cedula=$cedula&licencia=$licencia&id_user=$id_user");
    exit(); // Asegura que no se ejecute más código después de la redirección
}
?>
