<?php include '../components/header.php'; ?>
<?php include '../components/sidebar.php'; ?>
<?php include '../config/db.php'; ?>
<?php include '../models/Materia.php'; ?>

<?php include '../components/modals/Materia/crear_materia_modal.php'; ?>
<?php include '../components/modals/Materia/editar_materia_modal.php'; ?>
<?php include '../components/modals/Materia/eliminar_materia_modal.php'; ?>

<div class="ml-64 min-h-screen bg-gray-300 p-8">

<h1 class="text-2xl font-bold mb-6">
Gestión de Materias
</h1>

<button onclick="abrirModalCrearMateria()" class="bg-green-600 text-white px-4 py-2 mb-6 rounded">
Nueva Materia
</button>

<div class="bg-white rounded-xl shadow">

<table class="w-full">
<thead class="bg-gray-200">
<tr>
<th class="p-4">ID</th>
<th class="p-4">Nombre</th>
<th class="p-4 text-center">Acciones</th>
</tr>
</thead>

<tbody>

<?php
$materias = Materia::obtener($conexion);
while($m = $materias->fetch_assoc()):
?>

<tr class="border-t">
<td class="p-4"><?= $m['id'] ?></td>
<td class="p-4"><?= $m['nombre'] ?></td>

<td class="p-4 text-center">
<button onclick='abrirModalEditarMateria(<?= $m["id"] ?>,"<?= $m["nombre"] ?>")' class="text-yellow-500">
<i class="fa-solid fa-pen"></i></button>

<button onclick="abrirModalEliminarMateria(<?= $m['id'] ?>)" class="text-red-500">
<i class="fa-solid fa-trash"></i></button>
</td>

</tr>

<?php endwhile; ?>

</tbody>
</table>
</div>
</div>