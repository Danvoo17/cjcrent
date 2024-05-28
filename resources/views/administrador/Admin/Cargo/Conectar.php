<?php
$mysqli = new mysqli("localhost", "root", "123456", "cjcrent",3307);
if ($mysqli ->connect_errno) {
    echo "fallo al conectar a mysql: (" .$mysqli->connect_errno . ")" . $mysqli->connect_error; 
} else {
    echo "Borrar";
}
?>