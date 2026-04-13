<div id="modalCrearUsuario" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded-xl shadow-xl w-96">

    <h2 class="text-lg mb-4 flex items-center gap-2 text-gray-800">
      <i class="fa-solid fa-user-plus"></i>
      Crear Alumno
    </h2>

  <form action="../controllers/Usuario/guardar_usuario.php" method="POST">

  <input type="hidden" name="id" id="id">

  <input type="text" name="nombre" id="nombre"
    class="w-full p-2 border rounded mb-2" placeholder="Nombre">

  <input type="text" name="apellido_paterno" id="apellido_paterno"
    class="w-full p-2 border rounded mb-2" placeholder="Apellido paterno">

  <input type="text" name="apellido_materno" id="apellido_materno"
    class="w-full p-2 border rounded mb-2" placeholder="Apellido materno">

  <input type="number" name="edad" id="edad"
    class="w-full p-2 border rounded mb-2" placeholder="Edad">

  <input type="text" name="direccion" id="direccion"
    class="w-full p-2 border rounded mb-4" placeholder="Dirección">

  <button class="bg-blue-600 text-white px-4 py-2 rounded w-full">
    Guardar
  </button>

</form>
    <button onclick="cerrarModalCrear()" class="mt-3 text-gray-500 w-full">
      Cancelar
    </button>

  </div>
</div> 
