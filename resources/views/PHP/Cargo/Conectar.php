<?php
$mysqli = new mysqli("localhost", "root", "12345678", "cjcrentacar",3306);
if ($mysqli ->connect_errno) {
    echo "fallo al conectar a mysql: (" .$mysqli->connect_errno . ")" . $mysqli->connect_error; 
} else {
    echo "Borrar";
}
?>