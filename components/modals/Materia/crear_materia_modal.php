<div id="modalCrearMateria" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">

<div class="bg-white p-6 rounded w-96">

<h2>Crear Materia</h2>

<form action="../controllers/Materia/materia_controller.php" method="POST">
<input type="hidden" name="accion" value="guardar">

<input type="text" name="nombre" class="w-full border p-2 mb-3" placeholder="Nombre">

<button class="bg-green-600 text-white w-full p-2">Guardar</button>
</form>

<button onclick="cerrarModalCrearMateria()" class="mt-3 w-full">Cancelar</button>

</div>
</div>