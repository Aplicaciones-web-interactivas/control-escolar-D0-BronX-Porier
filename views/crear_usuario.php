<?php include '../components/header.php'; ?>
<?php include '../config/db.php'; ?>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
  <div class="w-full max-w-md bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">

    <h2 class="text-lg font-semibold text-gray-800 mb-6">
      Registrar Alumno
    </h2>

    <form action="../controllers/crear_usuario.php" method="POST">

      <!-- Nombre -->
      <div class="mb-4">
        <label class="block text-xs font-medium text-gray-500 mb-1">
          NOMBRE DEL ALUMNO
        </label>
        <input
          type="text"
          name="nombre"
          placeholder="Ej: Juan Pérez"
          class="w-full px-3 py-2 bg-gray-100 rounded-md text-sm focus:ring-2 focus:ring-blue-500"
          required
        />
      </div>

      <!-- Botón -->
      <button class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
        Registrar
      </button>

    </form>

    <br>
    <a href="../index.php" class="text-blue-600 underline">Volver</a>

  </div>
</div>

<?php include '../components/footer.php'; ?> 
