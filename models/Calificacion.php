<?php

class Calificacion {

    public static function guardar($conexion, $usuario_id, $grupo_id, $calificacion){
        return $conexion->query("INSERT INTO calificaciones (usuario_id, grupo_id, calificacion)
                                 VALUES ($usuario_id, $grupo_id, $calificacion)");
    }

    public static function obtener($conexion){
        return $conexion->query("
            SELECT u.nombre, m.nombre AS materia, c.calificacion
            FROM calificaciones c
            JOIN usuarios u ON c.usuario_id = u.id
            JOIN grupos g ON c.grupo_id = g.id
            JOIN materias m ON g.materia_id = m.id
        ");
    }
}