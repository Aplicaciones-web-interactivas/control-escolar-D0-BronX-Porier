<div id="modalCrearHorario" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">

<div class="bg-white p-6 rounded w-96">

<h2>Crear Horario</h2>

<form action="../controllers/Horario/horario_controller.php" method="POST">
<input type="hidden" name="accion" value="guardar">

<input type="time" name="hora_inicio" class="w-full border p-2 mb-3">
<input type="time" name="hora_fin" class="w-full border p-2 mb-3">

<button class="bg-orange-600 text-white w-full p-2">Guardar</button>
</form>

<button onclick="cerrarModalCrearHorario()" class="mt-3 w-full">Cancelar</button>

</div>
</div>