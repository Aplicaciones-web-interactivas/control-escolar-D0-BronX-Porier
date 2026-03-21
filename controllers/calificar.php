<?php
include '../config/db.php';

$usuario_id = $_POST['usuario_id'];
$grupo_id = $_POST['grupo_id'];
$calificacion = $_POST['calificacion'];

$sql = "INSERT INTO calificaciones (usuario_id, grupo_id, calificacion)
        VALUES ($usuario_id, $grupo_id, $calificacion)";

if ($conexion->query($sql)) {
    echo "Calificación guardada";
} else {
    echo "Error: " . $conexion->error;
}
?> 
