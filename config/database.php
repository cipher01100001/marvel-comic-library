<?php 
$bd_host = "localhost";
$bd_user = "root";
$bd_password = "";
$bd_name = "db_marvel_library";
$conn = new mysqli($bd_host, $bd_user, $bd_password, $bd_name);
if ($conn->connect_error) {
    die("Fallo al conectar con la base de datos: " . $conn->connect_error);
}