<div id="modalEliminarUsuario" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded-xl shadow-xl w-96 text-center">

    <div class="text-red-500 text-4xl mb-3">
      <i class="fa-solid fa-triangle-exclamation"></i>
    </div>

    <h2 class="text-lg font-semibold text-gray-800 mb-2">
      ¿Eliminar alumno?
    </h2>

    <p class="text-gray-500 mb-6">
      Esta acción no se puede deshacer.
    </p>

    <div class="flex gap-4">
      <button onclick="cerrarModalEliminar()"
        class="w-full bg-gray-200 text-gray-700 py-2 rounded hover:bg-gray-300">
        Cancelar
      </button>

      <a id="btnEliminarConfirmar"
         class="w-full bg-red-500 text-white py-2 rounded hover:bg-red-600 flex items-center justify-center gap-2">
        <i class="fa-solid fa-trash"></i>
        Eliminar
      </a>
    </div>

  </div>
</div> 
