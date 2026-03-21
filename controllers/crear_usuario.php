<?php
include '../config/db.php';

$nombre = $_POST['nombre'];

$sql = "INSERT INTO usuarios (nombre) VALUES ('$nombre')";

if ($conexion->query($sql)) {
    echo "<script>
            alert('Alumno registrado correctamente');
            window.location.href = '../views/crear_usuario.php';
          </script>";
} else {
    echo "<script>
            alert('Error al registrar');
            window.history.back();
          </script>";
}
?>