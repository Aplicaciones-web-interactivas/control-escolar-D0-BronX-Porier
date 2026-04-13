<?php include '../components/header.php'; ?>
<?php include '../config/db.php'; ?>
<?php include '../models/Materia.php'; ?>
<?php include '../components/alerts/alerta_global.php'; ?>

<?php include '../components/modals/Materia/crear_materia_modal.php'; ?>
<?php include '../components/modals/Materia/editar_materia_modal.php'; ?>
<?php include '../components/modals/Materia/eliminar_materia_modal.php'; ?>

<div class="min-h-screen bg-gray-300 p-8">

<h1 class="text-2xl font-bold mb-6 flex items-center gap-2 text-gray-800">
  <i class="fa-solid fa-book text-green-600"></i>
  Gestión de Materias
</h1>

<button onclick="abrirModalCrearMateria()"
  class="bg-green-600 text-white px-4 py-2 rounded mb-6 hover:bg-green-700">
  Nueva Materia
</button>

<div class="bg-white rounded-xl shadow-lg overflow-hidden">

<table class="w-full text-left">

<thead class="bg-gray-200 text-gray-700 uppercase text-xs">
<tr>
    <th class="p-4">ID</th>
    <th class="p-4">Nombre</th>
    <th class="p-4 text-center">Acciones</th>
</tr>
</thead>

<tbody>

<?php
$materias = Materia::obtener($conexion);
while($m = $materias->fetch_assoc()){
?>

<tr class="border-t">
    <td class="p-4"><?= $m['id'] ?></td>
    <td class="p-4"><?= $m['nombre'] ?></td>

    <td class="p-4 text-center flex justify-center gap-4">

        <button onclick='abrirModalEditarMateria(
            <?= $m["id"] ?>,
            <?= json_encode($m["nombre"]) ?>
        )'
        class="text-yellow-500">
            <i class="fa-solid fa-pen"></i>
        </button>

        <button onclick="abrirModalEliminarMateria(<?= $m['id'] ?>)"
        class="text-red-500">
            <i class="fa-solid fa-trash"></i>
        </button>

    </td>
</tr>

<?php } ?>

</tbody>

</table>
</div>
</div>

<script>

// CREAR
function abrirModalCrearMateria(){
  document.getElementById('modalCrearMateria').classList.remove('hidden');
}

function cerrarModalCrearMateria(){
  document.getElementById('modalCrearMateria').classList.add('hidden');
}

// EDITAR
function abrirModalEditarMateria(id, nombre){
  document.getElementById('modalEditarMateria').classList.remove('hidden');

  document.getElementById('edit_id').value = id;
  document.getElementById('edit_nombre').value = nombre;
}

function cerrarModalEditarMateria(){
  document.getElementById('modalEditarMateria').classList.add('hidden');
}

// ELIMINAR
function abrirModalEliminarMateria(id){
  document.getElementById('modalEliminarMateria').classList.remove('hidden');

  document.getElementById('btnEliminarMateria').href =
    "../controllers/Materia/materia_controller.php?accion=eliminar&id=" + id;
}

function cerrarModalEliminarMateria(){
  document.getElementById('modalEliminarMateria').classList.add('hidden');
}

</script>

<?php include '../components/footer.php'; ?>