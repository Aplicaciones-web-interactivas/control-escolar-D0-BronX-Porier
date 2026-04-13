<?php include '../components/header.php'; ?>
<?php include '../components/sidebar.php'; ?>
<?php include '../config/db.php'; ?>
<?php include '../models/Inscripcion.php'; ?>
<?php include '../components/alerts/alerta_global.php'; ?>

<?php include '../components/modals/Inscripcion/crear_inscripcion_modal.php'; ?>
<?php include '../components/modals/Inscripcion/eliminar_inscripcion_modal.php'; ?>

<div class="ml-64 min-h-screen bg-gray-300 p-8">

<h1 class="text-2xl font-bold mb-6">
Gestión de Inscripciones
</h1>

<button onclick="abrirModalCrearInscripcion()" class="bg-blue-600 text-white px-4 py-2 rounded mb-6">
Nueva Inscripción
</button>

<div class="bg-white rounded-xl shadow">

<table class="w-full">
<thead class="bg-gray-200">
<tr>
<th class="p-4">Alumno</th>
<th class="p-4">Materia</th>
<th class="p-4">Grupo</th>
<th class="p-4 text-center">Acciones</th>
</tr>
</thead>

<tbody>

<?php
$inscripciones = Inscripcion::obtener($conexion);
while($i = $inscripciones->fetch_assoc()):
?>

<tr class="border-t">
<td class="p-4"><?= $i['nombre']." ".$i['apellido_paterno']." ".$i['apellido_materno'] ?></td>
<td class="p-4"><?= $i['materia'] ?></td>
<td class="p-4"><?= $i['grupo'] ?></td>

<td class="p-4 text-center">
<button onclick="abrirModalEliminarInscripcion(<?= $i['id'] ?>)" class="text-red-500">
<i class="fa-solid fa-trash"></i>
</button>
</td>

</tr>

<?php endwhile; ?>

</tbody>
</table>
</div>
</div>