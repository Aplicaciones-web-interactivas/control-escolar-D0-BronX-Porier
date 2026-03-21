<?php
include '../config/db.php';

$nombre = $_POST['nombre'];
$materia_id = $_POST['materia_id'];
$hora_inicio = $_POST['hora_inicio'];
$hora_fin = $_POST['hora_fin'];

// 1. Crear horario
$sql_horario = "INSERT INTO horarios (hora_inicio, hora_fin)
                VALUES ('$hora_inicio', '$hora_fin')";

if ($conexion->query($sql_horario)) {

    $horario_id = $conexion->insert_id;

    // 2. Crear grupo
    $sql_grupo = "INSERT INTO grupos (nombre, materia_id, horario_id)
                  VALUES ('$nombre', $materia_id, $horario_id)";

    if ($conexion->query($sql_grupo)) {
        echo "Grupo creado correctamente";
    } else {
        echo "Error grupo: " . $conexion->error;
    }

} else {
    echo "Error horario: " . $conexion->error;
}
?> 
