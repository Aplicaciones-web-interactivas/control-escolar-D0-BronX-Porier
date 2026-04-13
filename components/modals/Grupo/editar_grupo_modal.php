<div id="modalEditarGrupo" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded-xl shadow-xl w-96">

    <h2 class="text-lg mb-4 flex items-center gap-2">
      <i class="fa-solid fa-pen"></i>
      Editar Grupo
    </h2>

    <form action="../controllers/Grupo/grupo_controller.php" method="POST">
      <input type="hidden" name="accion" value="guardar">
      <input type="hidden" name="id" id="edit_id">

      <input type="text" name="nombre" id="edit_nombre"
        class="w-full p-2 border rounded mb-2">

      <select name="materia_id" id="edit_materia" class="w-full p-2 border rounded mb-2">
        <?php
        $materias = $conexion->query("SELECT * FROM materias");
        while($m = $materias->fetch_assoc()){
          echo "<option value='{$m['id']}'>{$m['nombre']}</option>";
        }
        ?>
      </select>

      <select name="horario_id" id="edit_horario" class="w-full p-2 border rounded mb-4">
        <?php
        $horarios = $conexion->query("SELECT * FROM horarios");
        while($h = $horarios->fetch_assoc()){
          echo "<option value='{$h['id']}'>{$h['hora_inicio']} - {$h['hora_fin']}</option>";
        }
        ?>
      </select>

      <button class="bg-yellow-500 text-white px-4 py-2 rounded w-full">
        Actualizar
      </button>
    </form>

    <button onclick="cerrarModalEditarGrupo()" class="mt-3 w-full text-gray-500">
      Cancelar
    </button>

  </div>
</div> 
