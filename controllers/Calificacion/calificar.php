<?php
include '../config/db.php';
include '../models/Calificacion.php';

Calificacion::guardar(
    $conexion,
    $_POST['usuario_id'],
    $_POST['grupo_id'],
    $_POST['calificacion']
);

header("Location: ../views/calificaciones.php");