<?php include 'components/header.php'; ?>

<div class="min-h-screen bg-gradient-to-b from-blue-50 to-gray-100">

  <!-- Navbar -->
  <header class="flex items-center justify-between px-8 py-4 bg-white shadow-sm">
    <h1 class="text-blue-600 font-bold text-lg">Colegio RPD de San Luis Potosi</h1>

    <nav class="hidden md:flex gap-6 text-sm font-medium text-gray-600">
      <a href="#" class="text-blue-600 border-b-2 border-blue-600 pb-1">Inicio</a>
      <a href="views/inscripciones.php" class="hover:text-blue-600">Sobre Nosotros</a>
      <a href="views/calificaciones.php" class="hover:text-blue-600">Anuncios Parroquiales</a>
      <a href="views/crear_grupo.php" class="hover:text-blue-600">Nuestra Visión</a>
    </nav>

    <div class="flex items-center gap-4 text-gray-500 text-lg">
      <i class="fa-solid fa-bell hover:text-blue-600 cursor-pointer"></i>
      <i class="fa-solid fa-user hover:text-blue-600 cursor-pointer"></i>
    </div>
  </header>

  <!-- Hero -->
  <section class="px-8 py-12 grid md:grid-cols-2 gap-10 items-center">

    <!-- Texto -->
    <div>
      <h2 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight">
        Bienvenido al <br />
        <span class="text-blue-600 italic">Sistema Escolar RPD </span>
      </h2>

      <p class="mt-4 text-gray-500 max-w-md">
        Administra inscripciones, consulta calificaciones y organiza grupos de manera sencilla.
      </p>

          </div>

    <!-- Imagen -->
    <div class="relative">
      <div class="bg-orange-100 rounded-3xl p-6 shadow-md">
        <img
          src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png"
          class="w-full h-72 object-contain"
        />
      </div>

      <a href="views/crear_grupo.php"
         class="absolute bottom-4 left-4 bg-orange-500 text-white p-3 rounded-xl shadow-lg hover:bg-orange-600 transition">
        <i class="fa-solid fa-gear text-lg"></i>
      </a>
    </div>

  </section>

  <!-- Cards -->
  <section class="px-8 pb-12">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">

<a href="views/crear_usuario.php"
   class="bg-white rounded-2xl p-6 flex flex-col items-center shadow hover:shadow-md hover:scale-105 transition">
  <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mb-3 text-xl">
    <i class="fa-solid fa-user-plus"></i>
  </div>
  <p class="text-sm font-medium text-gray-700">Registrar Alumno</p>
</a>
      <!-- Inscripciones -->
      <a href="views/inscripciones.php"
         class="bg-white rounded-2xl p-6 flex flex-col items-center shadow hover:shadow-md hover:scale-105 transition">
        <div class="bg-blue-100 text-blue-600 p-3 rounded-full mb-3 text-xl">
          <i class="fa-solid fa-pen"></i>
        </div>
        <p class="text-sm font-medium text-gray-700">Inscribirse</p>
      </a>

      <!-- Calificaciones -->
      <a href="views/calificaciones.php"
         class="bg-white rounded-2xl p-6 flex flex-col items-center shadow hover:shadow-md hover:scale-105 transition">
        <div class="bg-green-100 text-green-600 p-3 rounded-full mb-3 text-xl">
          <i class="fa-solid fa-chart-line"></i>
        </div>
        <p class="text-sm font-medium text-gray-700">Calificaciones</p>
      </a>

      <!-- Crear grupo -->
      <a href="views/crear_grupo.php"
         class="bg-white rounded-2xl p-6 flex flex-col items-center shadow hover:shadow-md hover:scale-105 transition">
        <div class="bg-purple-100 text-purple-600 p-3 rounded-full mb-3 text-xl">
          <i class="fa-solid fa-users-gear"></i>
        </div>
        <p class="text-sm font-medium text-gray-700">Crear Grupo</p>
      </a>


    </div>
  </section>

</div>

<?php include 'components/footer.php'; ?>