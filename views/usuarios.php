<?php include '../components/header.php'; ?> 
<?php include '../config/db.php'; ?>
<?php include '../models/Usuario.php'; ?>
<?php include '../components/alerts/alerta_usuario.php'; ?>
<?php include '../components/modals/Usuario/crear_usuario_modal.php'; ?>
<?php include '../components/modals/Usuario/editar_usuario_modal.php'; ?>
<?php include '../components/modals/Usuario/eliminar_usuario_modal.php'; ?>

<div class="min-h-screen bg-gray-300 p-8">

<h1 class="text-2xl font-bold mb-6 flex items-center gap-2 text-gray-800">
  <i class="fa-solid fa-users text-blue-600"></i>
  Gestión de Alumnos
</h1>

<!-- BOTÓN CREAR -->
<button onclick="abrirModalCrear()"
  class="flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded mb-6 hover:bg-blue-700 shadow">
  <i class="fa-solid fa-user-plus"></i>
  Nuevo Alumno
</button>

<!-- TABLA -->
<div class="bg-white rounded-xl shadow-lg overflow-hidden">

  <table class="w-full text-left">

    <thead class="bg-gray-200 text-gray-700 uppercase text-xs">
      <tr>
        <th class="p-4">ID</th>
        <th class="p-4">Nombre</th>
        <th class="p-4">Apellido Paterno</th>
        <th class="p-4">Apellido Materno</th>
        <th class="p-4">Edad</th>
        <th class="p-4">Dirección</th>
        <th class="p-4 text-center">Acciones</th>
      </tr>
    </thead>

    <tbody class="text-gray-700">

<?php
$usuarios = Usuario::obtener($conexion);
while($u = $usuarios->fetch_assoc()):
?>

<tr class="border-t hover:bg-gray-100 transition">

  <td class="p-4"><?= $u['id'] ?></td>

  <td class="p-4"><?= $u['nombre'] ?></td>

  <!-- ✅ NUEVOS CAMPOS -->
  <td class="p-4"><?= $u['apellido_paterno'] ?? '' ?></td>
  <td class="p-4"><?= $u['apellido_materno'] ?? '' ?></td>

  <td class="p-4"><?= $u['edad'] ?></td>

  <td class="p-4"><?= $u['direccion'] ?></td>

  <td class="p-4 flex justify-center gap-4">

    <!-- EDITAR -->
    <button 
      onclick='abrirModalEditar(
        <?= $u["id"] ?>,
        <?= json_encode($u["nombre"] ?? "") ?>,
        <?= json_encode($u["apellido_paterno"] ?? "") ?>,
        <?= json_encode($u["apellido_materno"] ?? "") ?>,
        <?= $u["edad"] ?? 0 ?>,
        <?= json_encode($u["direccion"] ?? "") ?>
      )'
      class="text-yellow-500 hover:text-yellow-600 text-lg">
      <i class="fa-solid fa-pen-to-square"></i>
    </button>

    <!-- ELIMINAR -->
    <button 
      onclick="abrirModalEliminar(<?= $u['id'] ?>)"
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
function abrirModalCrear(){
  limpiarFormularioCrear();
  document.getElementById('modalCrearUsuario').classList.remove('hidden');
}

function cerrarModalCrear(){
  document.getElementById('modalCrearUsuario').classList.add('hidden');
}

function limpiarFormularioCrear(){
  document.getElementById('id').value = '';
  document.getElementById('nombre').value = '';
  document.getElementById('apellido_paterno').value = '';
  document.getElementById('apellido_materno').value = '';
  document.getElementById('edad').value = '';
  document.getElementById('direccion').value = '';
}

// ===== EDITAR =====
function abrirModalEditar(id, nombre, ap_paterno, ap_materno, edad, direccion){

  document.getElementById('modalEditarUsuario').classList.remove('hidden');

  document.getElementById('edit_id').value = id;
  document.getElementById('edit_nombre').value = nombre;
  document.getElementById('edit_apellido_paterno').value = ap_paterno;
  document.getElementById('edit_apellido_materno').value = ap_materno;
  document.getElementById('edit_edad').value = edad;
  document.getElementById('edit_direccion').value = direccion;
}

function cerrarModalEditar(){
  document.getElementById('modalEditarUsuario').classList.add('hidden');
}

// ===== ELIMINAR =====
function abrirModalEliminar(id){
  document.getElementById('modalEliminarUsuario').classList.remove('hidden');

  document.getElementById('btnEliminarConfirmar').href =
    "../controllers/Usuario/eliminar_usuario.php?id=" + id;
}

function cerrarModalEliminar(){
  document.getElementById('modalEliminarUsuario').classList.add('hidden');
}

</script>

<?php include '../components/footer.php'; ?>