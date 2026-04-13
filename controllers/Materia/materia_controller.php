<?php
include '../../config/db.php';
include '../../models/Materia.php';

$accion = $_POST['accion'] ?? $_GET['accion'] ?? '';

switch($accion){

    // ===== CREAR / EDITAR =====
    case 'guardar':

        $data = [
            'id' => $_POST['id'] ?? '',
            'nombre' => $_POST['nombre'] ?? ''
        ];

        if(empty($data['nombre'])){
            header("Location: ../../views/materias.php?msg=error");
            exit();
        }

        Materia::guardar($conexion, $data);

        $msg = empty($data['id']) ? 'creado' : 'editado';

        header("Location: ../../views/materias.php?msg=$msg");
    break;


    // ===== ELIMINAR =====
    case 'eliminar':

        $id = $_GET['id'] ?? 0;

        if(empty($id)){
            header("Location: ../../views/materias.php?msg=error");
            exit();
        }

        Materia::eliminar($conexion, $id);

        header("Location: ../../views/materias.php?msg=eliminado");
    break;

}