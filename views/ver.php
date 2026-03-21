<?php
include '../config/db.php';

$sql = "SELECT u.nombre, m.nombre AS materia, c.calificacion
        FROM calificaciones c
        JOIN usuarios u ON c.usuario_id = u.id
        JOIN grupos g ON c.grupo_id = g.id
        JOIN materias m ON g.materia_id = m.id";

$resultado = $conexion->query($sql);

while ($fila = $resultado->fetch_assoc()) {
    echo $fila['nombre'] . " - " . $fila['materia'] . " - " . $fila['calificacion'] . "<br>";
}
?> 
