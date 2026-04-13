<?php
include '../../config/db.php';
include '../../models/Horario.php';

$accion = $_POST['accion'] ?? $_GET['accion'] ?? '';

switch($accion){

    case 'guardar':

        $data = [
            'id' => $_POST['id'] ?? '',
            'hora_inicio' => $_POST['hora_inicio'] ?? '',
            'hora_fin' => $_POST['hora_fin'] ?? ''
        ];

        if(empty($data['hora_inicio']) || empty($data['hora_fin'])){
            header("Location: ../../views/horarios.php?msg=error");
            exit();
        }

        Horario::guardar($conexion, $data);

        $msg = empty($data['id']) ? 'creado' : 'editado';

        header("Location: ../../views/horarios.php?msg=$msg");
    break;


    case 'eliminar':

        $id = $_GET['id'] ?? 0;

        if(empty($id)){
            header("Location: ../../views/horarios.php?msg=error");
            exit();
        }

        Horario::eliminar($conexion, $id);

        header("Location: ../../views/horarios.php?msg=eliminado");
    break;

}