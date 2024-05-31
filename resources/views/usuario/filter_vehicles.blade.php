<?php
$servername = "localhost";
$username = "root"; // Cambia esto a tu usuario de la base de datos
$password = "123456"; // Cambia esto a tu contraseña de la base de datos
$dbname = "cjcrent"; // Cambia esto al nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$brand = $_GET['brand'];

if ($brand == 'all') {
    $sql = "SELECT v.*, m.nombre as modelo_nombre, mr.nombre as marca_nombre 
            FROM vehiculo v 
            JOIN modelo m ON v.id_modelo = m.id_modelo 
            JOIN marca mr ON m.id_marca = mr.id_marca";
} else {
    $sql = "SELECT v.*, m.nombre as modelo_nombre, mr.nombre as marca_nombre 
            FROM vehiculo v 
            JOIN modelo m ON v.id_modelo = m.id_modelo 
            JOIN marca mr ON m.id_marca = mr.id_marca 
            WHERE mr.nombre = ?";
}

$stmt = $conn->prepare($sql);

if ($brand != 'all') {
    $stmt->bind_param("s", $brand);
}

$stmt->execute();
$result = $stmt->get_result();

$vehicles = array();

while ($row = $result->fetch_assoc()) {
    $vehicles[] = $row;
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($vehicles);
?>
