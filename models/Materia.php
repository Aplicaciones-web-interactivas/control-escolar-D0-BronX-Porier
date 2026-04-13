<?php

class Materia {

    public static function obtener($conexion){
        return $conexion->query("SELECT * FROM materias");
    }

    public static function guardar($conexion, $data){

        // VALIDACIÓN BÁSICA
        if(empty($data['nombre'])){
            return false;
        }

        if(empty($data['id'])){
            // CREAR
            $sql = "INSERT INTO materias (nombre)
                    VALUES ('{$data['nombre']}')";
        } else {
            // EDITAR
            $sql = "UPDATE materias SET
                    nombre = '{$data['nombre']}'
                    WHERE id = {$data['id']}";
        }

        return $conexion->query($sql);
    }

    public static function eliminar($conexion, $id){

        if(empty($id)){
            return false;
        }

        return $conexion->query("DELETE FROM materias WHERE id = $id");
    }
}