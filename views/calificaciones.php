<?php include '../components/header.php'; ?>
<?php include '../config/db.php'; ?>

<h1 class="text-2xl font-bold mb-4">Calificaciones</h1>

<div class="bg-white p-6 rounded shadow">

<?php
$sql = "SELECT u.nombre, m.nombre AS materia, c.calificacion
        FROM calificaciones c
        JOIN usuarios u ON c.usuario_id = u.id
        JOIN grupos g ON c.grupo_id = g.id
        JOIN materias m ON g.materia_id = m.id";

$resultado = $conexion->query($sql);

while ($fila = $resultado->fetch_assoc()) {
    echo "<p class='border-b py-2'>
            {$fila['nombre']} - {$fila['materia']} - 
            <span class='font-bold'>{$fila['calificacion']}</span>
          </p>";
}
?>

</div>

<br>
<a href="../index.php" class="text-blue-600 underline">Volver</a>

<?php include '../components/footer.php'; ?> 
