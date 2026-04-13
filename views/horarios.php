<?php include '../components/header.php'; ?>
<?php include '../config/db.php'; ?>
<?php include '../models/Horario.php'; ?>
<?php include '../components/alerts/alerta_global.php'; ?>

<?php include '../components/modals/Horario/crear_horario_modal.php'; ?>
<?php include '../components/modals/Horario/editar_horario_modal.php'; ?>
<?php include '../components/modals/Horario/eliminar_horario_modal.php'; ?>

<div class="min-h-screen bg-gray-300 p-8">

<h1 class="text-2xl font-bold mb-6 flex items-center gap-2 text-gray-800">
  <i class="fa-solid fa-clock text-orange-600"></i>
  Gestión de Horarios
</h1>

<!-- BOTÓN CREAR -->
<button onclick="abrirModalCrearHorario()"
  class="flex items-center gap-2 bg-orange-600 text-white px-4 py-2 rounded mb-6 hover:bg-orange-700 shadow">
  <i class="fa-solid fa-plus"></i>
  Nuevo Horario
</button>

<!-- TABLA -->
<div class="bg-white rounded-xl shadow-lg overflow-hidden">

  <table class="w-full text-left">

    <thead class="bg-gray-200 text-gray-700 uppercase text-xs">
      <tr>
        <th class="p-4">ID</th>
        <th class="p-4">Hora Inicio</th>
        <th class="p-4">Hora Fin</th>
        <th class="p-4 text-center">Acciones</th>
      </tr>
    </thead>

    <tbody class="text-gray-700">

<?php
$horarios = Horario::obtener($conexion);

while($h = $horarios->fetch_assoc()){
?>
    <tr class="border-t hover:bg-gray-100 transition">

      <td class="p-4"><?= $h['id'] ?></td>
      <td class="p-4"><?= $h['hora_inicio'] ?></td>
      <td class="p-4"><?= $h['hora_fin'] ?></td>

      <td class="p-4 flex justify-center gap-4">

        <!-- EDITAR -->
        <button onclick='abrirModalEditarHorario(
          <?= $h["id"] ?>,
          <?= json_encode($h["hora_inicio"]) ?>,
          <?= json_encode($h["hora_fin"]) ?>
        )'
        class="text-yellow-500 hover:text-yellow-600 text-lg">
          <i class="fa-solid fa-pen-to-square"></i>
        </button>

        <!-- ELIMINAR -->
        <button onclick="abrirModalEliminarHorario(<?= $h['id'] ?>)"
          class="text-red-500 hover:text-red-600 text-lg">
          <i class="fa-solid fa-trash"></i>
        </button>

      </td>

    </tr>
<?php } ?>

    </tbody>
  </table>
</div>

</div>

<!-- JS -->
<script>

// ===== CREAR =====
function abrirModalCrearHorario(){
  document.getElementById('modalCrearHorario').classList.remove('hidden');
}

function cerrarModalCrearHorario(){
  document.getElementById('modalCrearHorario').classList.add('hidden');
}

// ===== EDITAR =====
function abrirModalEditarHorario(id, hora_inicio, hora_fin){
  document.getElementById('modalEditarHorario').classList.remove('hidden');

  document.getElementById('edit_id').value = id;
  document.getElementById('edit_hora_inicio').value = hora_inicio;
  document.getElementById('edit_hora_fin').value = hora_fin;
}

function cerrarModalEditarHorario(){
  document.getElementById('modalEditarHorario').classList.add('hidden');
}

// ===== ELIMINAR =====
function abrirModalEliminarHorario(id){
  document.getElementById('modalEliminarHorario').classList.remove('hidden');

  document.getElementById('btnEliminarHorario').href =
    "../controllers/Horario/horario_controller.php?accion=eliminar&id=" + id;
}

function cerrarModalEliminarHorario(){
  document.getElementById('modalEliminarHorario').classList.add('hidden');
}

</script>

<?php include '../components/footer.php'; ?>