<?php include '../components/header.php'; ?>
<?php include '../config/db.php'; ?>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
  <div class="w-full max-w-md bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">

    <h2 class="text-lg font-semibold text-gray-800 mb-6">
      Crear Grupo y Horario
    </h2>

    <form action="../controllers/crear_grupo.php" method="POST">

      <!-- Nombre del grupo -->
      <div class="mb-4">
        <label class="block text-xs font-medium text-gray-500 mb-1">
          NOMBRE DEL GRUPO
        </label>
        <input
          type="text"
          name="nombre"
          placeholder="Ej: A"
          class="w-full px-3 py-2 bg-gray-100 rounded-md text-sm focus:ring-2 focus:ring-blue-500"
        />
      </div>

      <!-- Materia -->
      <div class="mb-4">
        <label class="block text-xs font-medium text-gray-500 mb-1">
          MATERIA
        </label>
        <select name="materia_id"
          class="w-full px-3 py-2 bg-gray-100 rounded-md text-sm">

          <?php
          $materias = $conexion->query("SELECT * FROM materias");
          while ($m = $materias->fetch_assoc()) {
              echo "<option value='{$m['id']}'>{$m['nombre']}</option>";
          }
          ?>
        </select>
      </div>

      <!-- Horario -->
      <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block text-xs font-medium text-gray-500 mb-1">
            HORA INICIO
          </label>
          <input type="time" name="hora_inicio"
            class="w-full px-3 py-2 bg-gray-100 rounded-md text-sm">
        </div>

        <div>
          <label class="block text-xs font-medium text-gray-500 mb-1">
            HORA FIN
          </label>
          <input type="time" name="hora_fin"
            class="w-full px-3 py-2 bg-gray-100 rounded-md text-sm">
        </div>
      </div>

      <!-- Botón -->
      <button class="w-full bg-blue-600 text-white py-2 rounded-md">
        Crear Grupo
      </button>

    </form>

    <br>
    <a href="../index.php" class="text-blue-600 underline">Volver</a>

  </div>
</div>

<?php include '../components/footer.php'; ?> 
