<?php
include '../config/db.php';

$usuario_id = $_POST['usuario_id'];
$grupo_id = $_POST['grupo_id'];

$sql = "INSERT INTO inscripciones (usuario_id, grupo_id) 
        VALUES ($usuario_id, $grupo_id)";

if ($conexion->query($sql)) {
    echo "Inscripción exitosa";
} else {
    echo "Error: " . $conexion->error;
}
?> 
