<?php

class Inscripcion {

    public static function obtener($conexion){
        return $conexion->query("
            SELECT i.id,
                   u.nombre,
                   u.apellido_paterno,
                   u.apellido_materno,
                   g.nombre AS grupo,
                   m.nombre AS materia
            FROM inscripciones i
            JOIN usuarios u ON i.usuario_id = u.id
            JOIN grupos g ON i.grupo_id = g.id
            JOIN materias m ON g.materia_id = m.id
        ");
    }

    public static function crear($conexion, $usuario_id, $grupo_id){

        // Evitar duplicados
        $check = $conexion->query("
            SELECT * FROM inscripciones 
            WHERE usuario_id = $usuario_id AND grupo_id = $grupo_id
        ");

        if($check->num_rows > 0){
            return false;
        }

        return $conexion->query("
            INSERT INTO inscripciones (usuario_id, grupo_id)
            VALUES ($usuario_id, $grupo_id)
        ");
    }

    public static function eliminar($conexion, $id){
        return $conexion->query("DELETE FROM inscripciones WHERE id = $id");
    }
}