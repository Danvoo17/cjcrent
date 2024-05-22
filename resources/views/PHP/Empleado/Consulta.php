<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Consulta de empleado</title>
</head>
<body>
    <h1>Consulta de empleado</h1>
    <a href="index.php">Volver al inicio</a>
    <form action="" method="post">
        <label for="id_emp">ID del empleado:</label>
        <input type="submit" name="buscar" value="Buscar id del empleado">
    </form>

    <?php
    include_once 'Conectar.php';

    // Verificar si se envió el formulario de búsqueda
    if(isset($_POST['buscar'])) {
        // Obtener el ID del empleado ingresado por el usuario
        $id_emp = $_POST['id_emp'];

        // Consulta SQL para obtener los detalles del empleado con el ID proporcionado
        $query = "SELECT * FROM empleado WHERE id_emp = '$id_emp'";
        $result = mysqli_query($mysqli, $query);

        // Verificar si se encontraron resultados
        if(mysqli_num_rows($result) > 0) {
            echo "<h2>Detalles del empleado</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>ID_emp</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>telefono</th>
                        <th>cedula</th>
                        <th>email</th>
                        <th>direccion</th>
                        <th>saldo</th>
                        <th>id_cargo</th>
                        <th>id_user</th>
                    </tr>";

            // Mostrar los detalles del empleado encontrado
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id_emp']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['apellido']}</td>
                        <td>{$row['telefono']}</td>
                        <td>{$row['cedula']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['direccion']}</td>
                        <td>{$row['saldo']}</td>
                        <td>{$row['id_cargo']}</td>
                        <td>{$row['id_user']}</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No se encontraron resultados para el ID del empleado ingresado.</p>";
        }
    }
    ?>

</body>
</html>
