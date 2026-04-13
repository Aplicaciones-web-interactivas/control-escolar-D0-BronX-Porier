<?php

class Horario {

    public static function obtener($conexion){
        return $conexion->query("SELECT * FROM horarios");
    }

    public static function guardar($conexion, $data){

        if(empty($data['id'])){
            $sql = "INSERT INTO horarios (hora_inicio, hora_fin)
                    VALUES ('{$data['hora_inicio']}', '{$data['hora_fin']}')";
        } else {
            $sql = "UPDATE horarios SET
                    hora_inicio = '{$data['hora_inicio']}',
                    hora_fin = '{$data['hora_fin']}'
                    WHERE id = {$data['id']}";
        }

        return $conexion->query($sql);
    }

    public static function eliminar($conexion, $id){
        return $conexion->query("DELETE FROM horarios WHERE id = $id");
    }
}