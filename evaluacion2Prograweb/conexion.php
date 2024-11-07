<?php

$db_host = "localhost";
$db_name = "registro_evento_espinoza";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_errno());
}
?>