<?php
include '../../config/db.php';
include '../../models/Usuario.php';

// Recibir datos
$data = [
    'id' => $_POST['id'] ?? '',
    'nombre' => $_POST['nombre'] ?? '',
    'apellido_paterno' => $_POST['apellido_paterno'] ?? '',
    'apellido_materno' => $_POST['apellido_materno'] ?? '',
    'edad' => $_POST['edad'] ?? 0,
    'direccion' => $_POST['direccion'] ?? ''
];

// Guardar
Usuario::guardar($conexion, $data);

// Redirigir con mensaje
$msg = empty($data['id']) ? 'creado' : 'editado';

header("Location: ../../views/usuarios.php?msg=$msg");