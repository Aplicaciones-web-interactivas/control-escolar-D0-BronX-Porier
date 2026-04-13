<div id="modalEditarMateria" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">

<div class="bg-white p-6 rounded w-96">

<h2>Editar Materia</h2>

<form action="../controllers/Materia/materia_controller.php" method="POST">
<input type="hidden" name="accion" value="guardar">
<input type="hidden" name="id" id="edit_id">

<input type="text" name="nombre" id="edit_nombre" class="w-full border p-2 mb-3">

<button class="bg-yellow-500 text-white w-full p-2">Actualizar</button>
</form>

<button onclick="cerrarModalEditarMateria()" class="mt-3 w-full">Cancelar</button>

</div>
</div>