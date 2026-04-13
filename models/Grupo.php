<?php

class Grupo {

    public static function obtener($conexion){
        return $conexion->query("
            SELECT grupos.*, materias.nombre AS materia, horarios.hora_inicio, horarios.hora_fin
            FROM grupos
            JOIN materias ON grupos.materia_id = materias.id
            JOIN horarios ON grupos.horario_id = horarios.id
        ");
    }

    public static function guardar($conexion, $data){
        if(empty($data['id'])){
            $sql = "INSERT INTO grupos (nombre, materia_id, horario_id)
                    VALUES ('{$data['nombre']}', {$data['materia_id']}, {$data['horario_id']})";
        } else {
            $sql = "UPDATE grupos SET 
                    nombre='{$data['nombre']}',
                    materia_id={$data['materia_id']},
                    horario_id={$data['horario_id']}
                    WHERE id={$data['id']}";
        }

        return $conexion->query($sql);
    }

    public static function eliminar($conexion, $id){
        return $conexion->query("DELETE FROM grupos WHERE id=$id");
    }
}