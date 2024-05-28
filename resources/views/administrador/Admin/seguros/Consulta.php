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
    <title>Consulta de cargo</title>
</head>
<body>
    <h1>Consulta de cargo</h1>
    <a href="index.php">Volver al inicio</a>
    <form action="" method="post">
        <label for="id_seguro">ID del seguro:</label>
        <input type="submit" name="buscar" value="Consultar id_seguro">
    </form>

    <?php
    include_once 'Conectar.php';

    // Verificar si se envió el formulario de búsqueda
    if(isset($_POST['buscar'])) {
        // Obtener el ID de cargo ingresado por el usuario
        $id_seguro = $_POST['id_seguro'];

        // Consulta SQL para obtener los detalles del cargo con el ID proporcionado
        $query = "SELECT * FROM seguro WHERE id_seguro = '$id_seguro'";
        $result = mysqli_query($mysqli, $query);

        // Verificar si se encontraron resultados
        if(mysqli_num_rows($result) > 0) {
            echo "<h2>Detalles del cargo</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>id_seguro</th>
                        <th>num_poliza</th>
                        <th>tipo</th>
                        <th>descripcion</th>
                        <th>fecha_inicio</th>
                        <th>fecha_fin</th>
                        <th>costo</th>

                    </tr>";

            // Mostrar los detalles del cargo encontrado
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id_seguro']}</td>
                        <td>{$row['num_poliza']}</td>
                        <td>{$row['tipo']}</td>
                        <td>{$row['descripcion']}</td>
                        <td>{$row['fecha_inicio']}</td>
                        <td>{$row['fecha_fin']}</td>
                        <td>{$row['costo']}</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No se encontraron resultados para el ID del cargo ingresado.</p>";
        }
    }
    ?>

</body>
</html>
