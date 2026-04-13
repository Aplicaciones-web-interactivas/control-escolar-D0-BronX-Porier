<div id="modalEditarUsuario" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded-xl shadow-xl w-96">

    <h2 class="text-lg mb-4 flex items-center gap-2 text-gray-800">
      <i class="fa-solid fa-pen-to-square"></i>
      Editar Alumno
    </h2>

    <form action="../controllers/Usuario/guardar_usuario.php" method="POST">

      <input type="hidden" name="id" id="edit_id">

      <input type="text" name="nombre" id="edit_nombre"
        class="w-full p-2 border rounded mb-2">

      <input type="text" name="apellido_paterno" id="edit_apellido_paterno"
        class="w-full p-2 border rounded mb-2">

      <input type="text" name="apellido_materno" id="edit_apellido_materno"
        class="w-full p-2 border rounded mb-2">

      <input type="number" name="edad" id="edit_edad"
        class="w-full p-2 border rounded mb-2">

      <input type="text" name="direccion" id="edit_direccion"
        class="w-full p-2 border rounded mb-4">

      <button class="bg-yellow-500 text-white px-4 py-2 rounded w-full">
        Actualizar
      </button>

    </form>

    <button onclick="cerrarModalEditar()" class="mt-3 text-gray-500 w-full">
      Cancelar
    </button>

  </div>
</div>