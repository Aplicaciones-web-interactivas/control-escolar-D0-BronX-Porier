<?php

class Usuario {

    public static function obtener($conexion){
        return $conexion->query("SELECT * FROM usuarios");
    }

    public static function guardar($conexion, $data){

        if(empty($data['id'])){
            // CREATE
            $sql = "INSERT INTO usuarios 
                (nombre, apellido_paterno, apellido_materno, edad, direccion)
                VALUES (
                    '{$data['nombre']}',
                    '{$data['apellido_paterno']}',
                    '{$data['apellido_materno']}',
                    {$data['edad']},
                    '{$data['direccion']}'
                )";
        } else {
            // UPDATE
            $sql = "UPDATE usuarios SET 
                nombre='{$data['nombre']}',
                apellido_paterno='{$data['apellido_paterno']}',
                apellido_materno='{$data['apellido_materno']}',
                edad={$data['edad']},
                direccion='{$data['direccion']}'
                WHERE id={$data['id']}";
        }

        return $conexion->query($sql);
    }

    public static function eliminar($conexion, $id){
        return $conexion->query("DELETE FROM usuarios WHERE id=$id");
    }
}