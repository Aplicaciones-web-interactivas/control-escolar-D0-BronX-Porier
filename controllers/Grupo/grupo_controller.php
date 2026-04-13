<?php
include '../../config/db.php';
include '../../models/Grupo.php';

// Saber qué acción ejecutar
$accion = $_POST['accion'] ?? $_GET['accion'] ?? '';

switch($accion){

    case 'guardar':

        $data = [
            'id' => $_POST['id'] ?? '',
            'nombre' => $_POST['nombre'] ?? '',
            'materia_id' => $_POST['materia_id'] ?? 0,
            'horario_id' => $_POST['horario_id'] ?? 0
        ];

        Grupo::guardar($conexion, $data);

        $msg = empty($data['id']) ? 'guardado' : 'actualizado';

        header("Location: ../../views/grupos.php?msg=$msg");
        exit();
    break;


    case 'eliminar':

        $id = $_GET['id'] ?? 0;

        Grupo::eliminar($conexion, $id);

        header("Location: ../../views/grupos.php?msg=eliminado");
        exit();
    break;


    default:
        echo "Acción no válida";
    break;
}