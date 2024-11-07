<?php
require_once "conexion.php";
require 'phpqrcode/qrlib.php';

$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : null;
$rut = isset($_POST["rut"]) ? $_POST["rut"] : null;
$email = isset($_POST["email"]) ? $_POST["email"] : null;
$telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : null;
$imagen_url = "";

function insertar_registro($conn, $nombre, $rut, $email, $telefono, $imagen_url) {
    $sql = "
    INSERT INTO asistentes (nombre, rut, email, telefono, imagen)
    VALUES (?, ?, ?, ?, ?)
    ";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nombre, $rut, $email, $telefono, $imagen_url);
    $stmt->execute();
    
    if ($stmt->affected_rows > 0) {
        return $conn->insert_id;
    } else {
        echo "Error al insertar registro: " . $stmt->error;
        return false;
    }
}
function subir_archivo($archivo) {
    $archivo_nombre = $archivo["name"];
    $directorio = "imagenes/";
    $archivo_destino = $directorio . basename($archivo_nombre);

    if (move_uploaded_file($archivo["tmp_name"], $archivo_destino)) {
        echo "El archivo $archivo_nombre ha sido subido correctamente<br>";
        return $archivo_destino;
    } else {
        echo "Ocurrió un error al subir el archivo<br>";
        return "";
    }
}
if (isset($_FILES["imagen"])) {
    $imagen_url = subir_archivo($_FILES["imagen"]);
} else {
    echo "No se seleccionó ningún archivo para subir.<br>";
}

$asistente_id = insertar_registro($conn, $nombre, $rut, $email, $telefono, $imagen_url);

if ($asistente_id) {
    $enlace = "ver_asistente.php?id=" . $asistente_id;
    
    $rutaQr = "qrcodes/qr_$asistente_id.png";
    QRcode::png($enlace, $rutaQr);

    $sqlUpdate = "UPDATE asistentes SET codigo_qr = ? WHERE id = ?";
    $stmtUpdate = $conn->prepare($sqlUpdate);
    $stmtUpdate->bind_param("si", $rutaQr, $asistente_id);
    $stmtUpdate->execute();

    if ($stmtUpdate->affected_rows > 0) {
        echo "Ver ticket virtual <a href='$rutaQr' target='_blank'>Presione para ver qr</a>";
    }
}
?>