<?php include '../components/header.php'; ?>
<?php include '../config/db.php'; ?>

<h1 class="text-2xl font-bold mb-4">Inscripción a Materias</h1>

<div class="bg-white p-6 rounded shadow">
    <form action="../controllers/inscribir.php" method="POST" class="space-y-3">

        <label>Alumno:</label>
        <select name="usuario_id" class="w-full p-2 border rounded">
            <?php
            $usuarios = $conexion->query("SELECT * FROM usuarios");
            while ($u = $usuarios->fetch_assoc()) {
                echo "<option value='{$u['id']}'>{$u['nombre']}</option>";
            }
            ?>
        </select>

        <label>Grupo:</label>
        <select name="grupo_id" class="w-full p-2 border rounded">
            <?php
            $grupos = $conexion->query("
                SELECT g.id, g.nombre, m.nombre AS materia
                FROM grupos g
                JOIN materias m ON g.materia_id = m.id
            ");
            while ($g = $grupos->fetch_assoc()) {
                echo "<option value='{$g['id']}'>
                        {$g['materia']} - Grupo {$g['nombre']}
                      </option>";
            }
            ?>
        </select>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">
            Inscribir
        </button>
    </form>
</div>

<br>
<a href="../index.php" class="text-blue-600 underline">Volver</a>

<?php include '../components/footer.php'; ?> 
