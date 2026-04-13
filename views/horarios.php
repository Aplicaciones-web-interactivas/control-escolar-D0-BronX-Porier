<?php include '../components/header.php'; ?>
<?php include '../components/sidebar.php'; ?>
<?php include '../config/db.php'; ?>
<?php include '../models/Horario.php'; ?>
<?php include '../components/alerts/alerta_global.php'; ?>

<?php include '../components/modals/Horario/crear_horario_modal.php'; ?>
<?php include '../components/modals/Horario/editar_horario_modal.php'; ?>
<?php include '../components/modals/Horario/eliminar_horario_modal.php'; ?>

<div class="ml-64 min-h-screen bg-gray-300 p-8">

<h1 class="text-2xl font-bold mb-6">
<i class="fa-solid fa-clock text-orange-600"></i>
Gestión de Horarios
</h1>

<button onclick="abrirModalCrearHorario()" class="bg-orange-600 text-white px-4 py-2 rounded mb-6">
Nuevo Horario
</button>

<div class="bg-white rounded-xl shadow-lg">

<table class="w-full">
<thead class="bg-gray-200">
<tr>
<th class="p-4">ID</th>
<th class="p-4">Inicio</th>
<th class="p-4">Fin</th>
<th class="p-4 text-center">Acciones</th>
</tr>
</thead>

<tbody>

<?php
$horarios = Horario::obtener($conexion);
while($h = $horarios->fetch_assoc()):
?>

<tr class="border-t">
<td class="p-4"><?= $h['id'] ?></td>
<td class="p-4"><?= $h['hora_inicio'] ?></td>
<td class="p-4"><?= $h['hora_fin'] ?></td>

<td class="p-4 flex justify-center gap-4">
<button onclick='abrirModalEditarHorario(<?= $h["id"] ?>,"<?= $h["hora_inicio"] ?>","<?= $h["hora_fin"] ?>")' class="text-yellow-500">
<i class="fa-solid fa-pen"></i></button>

<button onclick="abrirModalEliminarHorario(<?= $h['id'] ?>)" class="text-red-500">
<i class="fa-solid fa-trash"></i></button>
</td>

</tr>

<?php endwhile; ?>

</tbody>
</table>
</div>
</div>