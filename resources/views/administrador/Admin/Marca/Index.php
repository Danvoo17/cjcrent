<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marca</title>
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
    </style>
</head>
<body>
<div class="container">
    <h1>Formulario Marca</h1>
    <table border="1">
        <tr>
            <th>id_marca</th>
            <th>nombre</th>
            <th>pais</th>
        </tr>
        <?php
        include_once 'Conectar.php';
        $query = "SELECT * FROM marca";
        $result = mysqli_query($mysqli, $query);
        $total = mysqli_num_rows($result);

        if ($total != 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr> <td>" . $row['id_marca'] . "</td>
                <td>" . $row['nombre'] . "</td>
                <td>" . $row['pais'] . "</td>
                <td> <a href='borrar.php?rn=" . $row['id_marca'] . "'>Borrar</a></td> </tr>";
            }
        }
        ?>
    </table>

    <form action="Insertar.php" method="post">
        <input type="text" name="id_marca" placeholder="ID Marca">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="pais" placeholder="pais" required>
          <input type="submit" value="Añadir">
    </form>

    <form action="Update.php" method="post">
    <input type="text" name="id_marca" placeholder="ID Marca">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="pais" placeholder="pais" required>
        <input type="submit" name="Update" value="Editar">
    </form>

    <form action="Consulta.php" method="post">
        <input type="submit" value="Consulta por ID">
    </form>
</div>

</body>
</html>
