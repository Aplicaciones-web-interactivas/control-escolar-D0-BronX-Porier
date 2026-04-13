<?php if(isset($_GET['msg'])): ?>

<div id="alertaUsuario"
  class="fixed top-5 right-5 px-6 py-3 rounded-lg shadow-lg flex items-center gap-2 text-white
  <?php
    if($_GET['msg'] == 'creado') echo 'bg-green-500';
    if($_GET['msg'] == 'editado') echo 'bg-blue-500';
    if($_GET['msg'] == 'eliminado') echo 'bg-red-500';
  ?>
  ">

  <i class="fa-solid 
    <?php
      if($_GET['msg'] == 'creado') echo 'fa-circle-check';
      if($_GET['msg'] == 'editado') echo 'fa-pen';
      if($_GET['msg'] == 'eliminado') echo 'fa-trash';
    ?>
  "></i>

  <span>
    <?php
      if($_GET['msg'] == 'creado') echo "Alumno creado correctamente";
      if($_GET['msg'] == 'editado') echo "Alumno actualizado";
      if($_GET['msg'] == 'eliminado') echo "Alumno eliminado";
    ?>
  </span>

</div>

<script>
setTimeout(() => {
  const alerta = document.getElementById('alertaUsuario');
  if(alerta) alerta.style.display = 'none';
}, 3000);
</script>

<?php endif; ?> 
