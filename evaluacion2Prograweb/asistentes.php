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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asistentes</title>
    <link rel="stylesheet" href="estilos/estilosasis.css">
</head>

<body>
    <br>
    <div></div>
    <table border="1">
        <tr>
            <td>
                <h4 class="titulo">TABLA DE ASISTENTES</h4>
            </td>
        </tr>
        <tr class="p-5">
            <td class="p-5">Nombre</td>
            <td class="p-5">Rut</td>
            <td class="p-5">Email</td>
            <td class="p-5">Teléfono</td>
            <td class="p-5">Fecha de registro</td>
        </tr>
        <?php
        $sql = "SELECT * FROM asistentes";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while($mostrar = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td class="pb-5 pl-5 pr-5 pt-5 pb-0"><?php echo htmlspecialchars($mostrar['nombre']); ?></td>
            <td class="pb-5 pl-5 pr-5 pt-5 pb-0"><?php echo htmlspecialchars($mostrar['rut']); ?></td>
            <td class="pb-5 pl-5 pr-5 pt-5 pb-0"><?php echo htmlspecialchars($mostrar['email']); ?></td>
            <td class="pb-5 pl-5 pr-5 pt-5 pb-0"><?php echo htmlspecialchars($mostrar['telefono']); ?></td>
            <td class="pb-5 pl-5 pr-5 pt-5 pb-0"><?php echo htmlspecialchars($mostrar['fecha_registro']); ?></td>
        </tr>
        <?php
            }
        } 
        ?>
    </table>
    </div>
</body>
</html>