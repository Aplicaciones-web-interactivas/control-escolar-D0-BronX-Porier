<div id="modalCrearGrupo" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded-xl shadow-xl w-96">

    <h2 class="text-lg mb-4 flex items-center gap-2">
      <i class="fa-solid fa-plus"></i>
      Crear Grupo
    </h2>

    <form action="../controllers/Grupo/grupo_controller.php" method="POST">
      <input type="hidden" name="accion" value="guardar">

      <input type="text" name="nombre"
        class="w-full p-2 border rounded mb-2" placeholder="Nombre del grupo">

      <select name="materia_id" class="w-full p-2 border rounded mb-2">
        <?php
        $materias = $conexion->query("SELECT * FROM materias");
        while($m = $materias->fetch_assoc()){
          echo "<option value='{$m['id']}'>{$m['nombre']}</option>";
        }
        ?>
      </select>

      <select name="horario_id" class="w-full p-2 border rounded mb-4">
        <?php
        $horarios = $conexion->query("SELECT * FROM horarios");
        while($h = $horarios->fetch_assoc()){
          echo "<option value='{$h['id']}'>{$h['hora_inicio']} - {$h['hora_fin']}</option>";
        }
        ?>
      </select>

      <button class="bg-blue-600 text-white px-4 py-2 rounded w-full">
        Guardar
      </button>
    </form>

    <button onclick="cerrarModalCrearGrupo()" class="mt-3 w-full text-gray-500">
      Cancelar
    </button>

  </div>
</div> 
