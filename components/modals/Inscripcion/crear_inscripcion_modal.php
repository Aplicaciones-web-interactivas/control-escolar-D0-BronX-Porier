<div id="modalCrearInscripcion" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded-xl shadow-xl w-96">

    <h2 class="text-lg mb-4 flex items-center gap-2">
      <i class="fa-solid fa-plus"></i>
      Nueva Inscripción
    </h2>

    <form action="../controllers/Inscripcion/inscribir.php" method="POST">
      <input type="hidden" name="accion" value="crear">

      <select name="usuario_id" class="w-full p-2 border rounded mb-2">
        <?php
        $usuarios = $conexion->query("SELECT * FROM usuarios");
        while($u = $usuarios->fetch_assoc()){
          echo "<option value='{$u['id']}'>{$u['nombre']}</option>";
        }
        ?>
      </select>

      <select name="grupo_id" class="w-full p-2 border rounded mb-4">
        <?php
        $grupos = $conexion->query("
          SELECT g.id, g.nombre, m.nombre AS materia
          FROM grupos g
          JOIN materias m ON g.materia_id = m.id
        ");
        while($g = $grupos->fetch_assoc()){
          echo "<option value='{$g['id']}'>{$g['materia']} - {$g['nombre']}</option>";
        }
        ?>
      </select>

      <button class="bg-blue-600 text-white px-4 py-2 rounded w-full">
        Incribir
      </button>
    </form>

    <button onclick="cerrarModalCrearInscripcion()" class="mt-3 w-full text-gray-500">
      Cancelar
    </button>

  </div>
</div>