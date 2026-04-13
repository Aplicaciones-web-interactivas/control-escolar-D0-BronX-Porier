<?php include '../components/header.php'; ?>
<?php include '../config/db.php'; ?>
<?php include '../models/Grupo.php'; ?>
<?php include '../components/alerts/alerta_global.php'; ?>

<?php include '../components/modals/Grupo/crear_grupo_modal.php'; ?>
<?php include '../components/modals/Grupo/editar_grupo_modal.php'; ?>
<?php include '../components/modals/Grupo/eliminar_grupo_modal.php'; ?>

<div class="min-h-screen bg-gray-300 p-8">

<h1 class="text-2xl font-bold mb-6 flex items-center gap-2 text-gray-800">
  <i class="fa-solid fa-layer-group text-purple-600"></i>
  Gestión de Grupos
</h1>

<!-- BOTÓN CREAR -->
<button onclick="abrirModalCrearGrupo()"
  class="flex items-center gap-2 bg-purple-600 text-white px-4 py-2 rounded mb-6 hover:bg-purple-700 shadow">
  <i class="fa-solid fa-plus"></i>
  Nuevo Grupo
</button>

<!-- TABLA -->
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

    <tbody class="text-gray-700">

<?php
$grupos = Grupo::obtener($conexion);

while($g = $grupos->fetch_assoc()):
?>

<tr class="border-t hover:bg-gray-100 transition">

  <td class="p-4"><?= $g['id'] ?></td>

  <td class="p-4"><?= $g['nombre'] ?></td>

  <td class="p-4"><?= $g['materia'] ?></td>

  <!-- HORARIO MEJORADO -->
  <td class="p-4">
    <span class="bg-gray-200 px-2 py-1 rounded text-sm">
      <?= $g['hora_inicio'] ?> - <?= $g['hora_fin'] ?>
    </span>
  </td>

  <td class="p-4 flex justify-center gap-4">

    <!-- EDITAR -->
    <button onclick='abrirModalEditarGrupo(
      <?= $g["id"] ?>,
      <?= json_encode($g["nombre"] ?? "") ?>,
      <?= $g["materia_id"] ?? 0 ?>,
      <?= $g["horario_id"] ?? 0 ?>
    )'
    class="text-yellow-500 hover:text-yellow-600 text-lg">
      <i class="fa-solid fa-pen-to-square"></i>
    </button>

    <!-- ELIMINAR -->
    <button onclick="abrirModalEliminarGrupo(<?= $g['id'] ?>)"
      class="text-red-500 hover:text-red-600 text-lg">
      <i class="fa-solid fa-trash"></i>
    </button>

  </td>

</tr>

<?php endwhile; ?>

    </tbody>
  </table>
</div>

</div>

<!-- JS -->
<script>

// ===== CREAR =====
function abrirModalCrearGrupo(){
  document.getElementById('modalCrearGrupo').classList.remove('hidden');
}

function cerrarModalCrearGrupo(){
  document.getElementById('modalCrearGrupo').classList.add('hidden');
}

// ===== EDITAR =====
function abrirModalEditarGrupo(id, nombre, materia_id, horario_id){

  document.getElementById('modalEditarGrupo').classList.remove('hidden');

  document.getElementById('edit_id').value = id;
  document.getElementById('edit_nombre').value = nombre;
  document.getElementById('edit_materia').value = materia_id;
  document.getElementById('edit_horario').value = horario_id;
}

function cerrarModalEditarGrupo(){
  document.getElementById('modalEditarGrupo').classList.add('hidden');
}

// ===== ELIMINAR =====
function abrirModalEliminarGrupo(id){

  document.getElementById('modalEliminarGrupo').classList.remove('hidden');

  document.getElementById('btnEliminarGrupo').href =
    "../controllers/Grupo/grupo_controller.php?accion=eliminar&id=" + id;
}

function cerrarModalEliminarGrupo(){
  document.getElementById('modalEliminarGrupo').classList.add('hidden');
}

</script>

<?php include '../components/footer.php'; ?>