<?php
include '../../config/db.php';
include '../../models/Inscripcion.php';

$accion = $_GET['accion'] ?? $_POST['accion'] ?? '';

// ===== CREAR =====
if($accion == 'crear'){

    $usuario_id = $_POST['usuario_id'] ?? null;
    $grupo_id = $_POST['grupo_id'] ?? null;

    // VALIDACIÓN BÁSICA
    if(empty($usuario_id) || empty($grupo_id)){
        header("Location: ../../views/inscripciones.php?msg=error");
        exit();
    }

    // EVITAR DUPLICADOS
    $verificar = $conexion->query("
        SELECT * FROM inscripciones 
        WHERE usuario_id = $usuario_id AND grupo_id = $grupo_id
    ");

    if($verificar->num_rows > 0){
        // ya existe
        header("Location: ../../views/inscripciones.php?msg=duplicado");
        exit();
    }

    // CREAR
    Inscripcion::crear($conexion, $usuario_id, $grupo_id);

    header("Location: ../../views/inscripciones.php?msg=creado");
    exit();
}


// ===== ELIMINAR =====
if($accion == 'eliminar'){

    $id = $_GET['id'] ?? null;

    if(empty($id)){
        header("Location: ../../views/inscripciones.php?msg=error");
        exit();
    }

    Inscripcion::eliminar($conexion, $id);

    header("Location: ../../views/inscripciones.php?msg=eliminado");
    exit();
}