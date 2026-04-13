<?php include '../components/header.php'; ?>
<?php include '../components/sidebar.php'; ?>
<?php include '../config/db.php'; ?>
<?php include '../models/Grupo.php'; ?>
<?php include '../components/alerts/alerta_global.php'; ?>

<?php include '../components/modals/Grupo/crear_grupo_modal.php'; ?>
<?php include '../components/modals/Grupo/editar_grupo_modal.php'; ?>
<?php include '../components/modals/Grupo/eliminar_grupo_modal.php'; ?>

<div class="ml-64 min-h-screen bg-gray-300 p-8">

<h1 class="text-2xl font-bold mb-6 flex items-center gap-2 text-gray-800">
  <i class="fa-solid fa-layer-group text-purple-600"></i>
  Gestión de Grupos
</h1>

<button onclick="abrirModalCrearGrupo()"
  class="flex items-center gap-2 bg-purple-600 text-white px-4 py-2 rounded mb-6 hover:bg-purple-700 shadow">
  <i class="fa-solid fa-plus"></i>
  Nuevo Grupo
</button>

<div class="bg-white rounded-xl shadow-lg overflow-hidden">

<table class="w-full text-left">

<thead class="bg-gray-200 text-gray-700 uppercase text-xs">
<tr>
  <th class="p-4">ID</th>
  <th class="p-4">Nombre</th>
  <th class="p-4">Materia</th>
  <th class="p-4">Horario</th>
  <th class="p-4 text-center">Acciones</th>
</tr>
</thead>

<tbody>

<?php
$grupos = Grupo::obtener($conexion);
while($g = $grupos->fetch_assoc()):
?>

<tr class="border-t hover:bg-gray-100">

<td class="p-4"><?= $g['id'] ?></td>
<td class="p-4"><?= $g['nombre'] ?></td>
<td class="p-4"><?= $g['materia'] ?></td>

<td class="p-4">
  <span class="bg-gray-200 px-2 py-1 rounded text-sm">
    <?= $g['hora_inicio'] ?> - <?= $g['hora_fin'] ?>
  </span>
</td>

<td class="p-4 flex justify-center gap-4">

<button onclick='abrirModalEditarGrupo(
<?= $g["id"] ?>,
<?= json_encode($g["nombre"]) ?>,
<?= $g["materia_id"] ?>,
<?= $g["horario_id"] ?>
)'
class="text-yellow-500 text-lg">
<i class="fa-solid fa-pen"></i>
</button>

<button onclick="abrirModalEliminarGrupo(<?= $g['id'] ?>)"
class="text-red-500 text-lg">
<i class="fa-solid fa-trash"></i>
</button>

</td>

</tr>

<?php endwhile; ?>

</tbody>
</table>
</div>
</div>

<script>
function abrirModalCrearGrupo(){document.getElementById('modalCrearGrupo').classList.remove('hidden');}
function cerrarModalCrearGrupo(){document.getElementById('modalCrearGrupo').classList.add('hidden');}
function abrirModalEditarGrupo(id,nombre,materia,horario){
document.getElementById('modalEditarGrupo').classList.remove('hidden');
edit_id.value=id;edit_nombre.value=nombre;edit_materia.value=materia;edit_horario.value=horario;}
function cerrarModalEditarGrupo(){modalEditarGrupo.classList.add('hidden');}
function abrirModalEliminarGrupo(id){
modalEliminarGrupo.classList.remove('hidden');
btnEliminarGrupo.href="../controllers/Grupo/grupo_controller.php?accion=eliminar&id="+id;}
function cerrarModalEliminarGrupo(){modalEliminarGrupo.classList.add('hidden');}
</script>

<?php include '../components/footer.php'; ?>