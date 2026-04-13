<?php include '../components/header.php'; ?>
<?php include '../config/db.php'; ?>
<?php include '../models/Inscripcion.php'; ?>
<?php include '../components/alerts/alerta_global.php'; ?>

<!-- MODAL -->
<?php include '../components/modals/Inscripcion/crear_inscripcion_modal.php'; ?>
<?php include '../components/modals/Inscripcion/eliminar_inscripcion_modal.php'; ?>

<div class="min-h-screen bg-gray-300 p-8">

<h1 class="text-2xl font-bold mb-6 flex items-center gap-2 text-gray-800">
  <i class="fa-solid fa-clipboard-list text-blue-600"></i>
  Gestión de Inscripciones
</h1>

<!-- BOTÓN CREAR -->
<button onclick="abrirModalCrearInscripcion()"
  class="flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded mb-6 hover:bg-blue-700 shadow">
  <i class="fa-solid fa-plus"></i>
  Nueva Inscripción
</button>

<!-- TABLA -->
<div class="bg-white rounded-xl shadow-lg overflow-hidden">

  <table class="w-full text-left">

    <thead class="bg-gray-200 text-gray-700 uppercase text-xs">
      <tr>
        <th class="p-4">Alumno</th>
        <th class="p-4">Materia</th>
        <th class="p-4">Grupo</th>
        <th class="p-4 text-center">Acciones</th>
      </tr>
    </thead>

    <tbody class="text-gray-700">

<?php
$inscripciones = Inscripcion::obtener($conexion);

while($i = $inscripciones->fetch_assoc()){
?>
<tr class="border-t hover:bg-gray-100 transition">

  <td class="p-4"><?= $i['nombre'] . " " . $i['apellido_paterno'] . " " . $i['apellido_materno'] ?></td>
  <td class="p-4"><?= $i['materia'] ?></td>
  <td class="p-4"><?= $i['grupo'] ?></td>

  <td class="p-4 flex justify-center gap-4">

    <!-- ELIMINAR -->
    <button onclick="abrirModalEliminarInscripcion(<?= $i['id'] ?>)"
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
function abrirModalCrearInscripcion(){
  document.getElementById('modalCrearInscripcion').classList.remove('hidden');
}

function cerrarModalCrearInscripcion(){
  document.getElementById('modalCrearInscripcion').classList.add('hidden');
}

// ===== ELIMINAR =====
function abrirModalEliminarInscripcion(id){
  document.getElementById('modalEliminarInscripcion').classList.remove('hidden');

  document.getElementById('btnEliminarInscripcion').href =
    "../controllers/Inscripcion/inscripcionController.php?accion=eliminar&id=" + id;
}

function cerrarModalEliminarInscripcion(){
  document.getElementById('modalEliminarInscripcion').classList.add('hidden');
}

</script>

<?php include '../components/footer.php'; ?>