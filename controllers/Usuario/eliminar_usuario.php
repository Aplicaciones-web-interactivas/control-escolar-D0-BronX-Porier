<?php
include '../../config/db.php';
include '../../models/Usuario.php';

// Validar ID
$id = $_GET['id'] ?? 0;

if($id > 0){
    Usuario::eliminar($conexion, $id);
}

// Redirigir con alerta
header("Location: ../../views/usuarios.php?msg=eliminado");