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

$id_emp = $_POST['id_emp'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$cedula = $_POST['cedula'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$saldo= $_POST['saldo'];
$id_cargo = $_POST['id_cargo'];
$id_user = $_POST['id_user'];

$sqlinsert = "INSERT INTO empleado (nombre, apellido, telefono, cedula, email, direccion, saldo, id_cargo, id_user) VALUES ('$nombre', '$apellido', '$telefono', '$cedula','$email','$direccion','$saldo','id_cargo','id_user')";


mysqli_query($mysqli, $sqlinsert);

header("location:./index.php?insert=success");
?>
