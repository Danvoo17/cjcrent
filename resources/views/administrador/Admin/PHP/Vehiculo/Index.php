<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento</title>
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
    <h1>Formulario vehiculo</h1>
    <table border="1">
        <tr>
            <th>id_vehiculo</th>
            <th>matricula</th>
            <th>precio</th>
            <th>color</th>
            <th>estado</th>
            <th>pasajeros</th>
            <th>puertas</th>
            <th>maletas</th>
            <th>tipo</th>
            <th>traccion</th>
            <th>transmision</th>
            <th>motor</th>
            <th>opciones</th>
            <th>imagen</th>
            <th>id_modelo</th>
            <th>id_seguro</th>
        </tr>
        <?php
        include_once 'Conectar.php';
        $query = "SELECT * FROM vehiculo";
        $result = mysqli_query($mysqli, $query);
        $total = mysqli_num_rows($result);

        if ($total != 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr> <td>" . $row['id_vehiculo'] . "</td>
                <td>" . $row['matricula'] . "</td>
                <td>" . $row['precio'] . "</td>
                <td>" . $row['color'] . "</td>
                <td>" . $row['estado'] . "</td>
                <td>" . $row['pasajeros'] . "</td>
                <td>" . $row['puertas'] . "</td>
                <td>" . $row['maletas'] . "</td>
                <td>" . $row['tipo'] . "</td>
                <td>" . $row['traccion'] . "</td>
                <td>" . $row['transmision'] . "</td>
                <td>" . $row['motor'] . "</td>
                <td>" . $row['opciones'] . "</td>
                <td>" . $row['imagen'] . "</td>
                <td>" . $row['id_modelo'] . "</td>
                <td>" . $row['id_seguro'] . "</td>
                <td> <a href='borrar.php?rn=" . $row['id_vehiculo'] . "'>Borrar</a></td> </tr>";
            }
        }
        ?>
    </table>

    <form action="Insertar.php" method="post">
    <input type="number" name="id_vehiculo" placeholder="ID vehiculo">
    <input type="text" name="matricula" placeholder="matricula">
        <input type="number" name="precio" placeholder="precio" required>
        <input type="text" name="color" placeholder="color" required>
        <input type="text" name="estado" placeholder="estado">
        <input type="text" name="pasajeros" placeholder="pasajeros" required>
        <input type="text" name="puertas" placeholder="puertas">
        <input type="text" name="maletas" placeholder="maletas">
        <input type="text" name="tipo" placeholder="tipo">
        <input type="text" name="traccion" placeholder="traccion">
        <input type="text" name="transmision" placeholder="transmision" required>
        <input type="text" name="motor" placeholder="motor">
        <input type="text" name="opciones" placeholder="opciones">
        <input type="file" name="imagen" placeholder="imagen">
        <input type="number" name="id_modelo" placeholder="ID modelo">
        <input type="number" name="id_seguro" placeholder="ID seguro" required>
        <input type="submit" value="Añadir">
    </form>

    <form action="Update.php" method="post">
        <input type="number" name="id_vehiculo" placeholder="ID del vehiculo a Editar">
        <input type="text" name="matricula" placeholder="matricula">
        <input type="number" name="precio" placeholder="precio" required>
        <input type="text" name="color" placeholder="color" required>
        <input type="text" name="estado" placeholder="estado">
        <input type="text" name="pasajeros" placeholder="pasajeros" required>
        <input type="text" name="puertas" placeholder="puertas">
        <input type="text" name="maletas" placeholder="maletas">
        <input type="text" name="tipo" placeholder="tipo">
        <input type="text" name="traccion" placeholder="traccion">
        <input type="text" name="transmision" placeholder="transmision" required>
        <input type="text" name="motor" placeholder="motor">
        <input type="text" name="opciones" placeholder="opciones">
        <input type="file" name="imagen" placeholder="imagen">
        <input type="number" name="id_modelo" placeholder="ID modelo">
        <input type="number" name="id_seguro" placeholder="ID seguro" required>
        <input type="submit" name="Update" value="Editar">
    </form>

    <form action="Consulta.php" method="post">
        <input type="submit" value="Consulta por ID">
    </form>
</div>

</body>
</html>
