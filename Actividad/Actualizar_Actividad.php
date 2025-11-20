<?php 
// Incluye el archivo de conexión para acceder a la base de datos
include('../Conexion_Tabla.php');

// Llama a la función de conexión
$con = connection();

// Obtiene el ID enviado por método GET desde la URL
$id = $_GET['id'];

// Verifica si no llegó el ID
if (!$id) {
    // Detiene la ejecución si no existe ID
    die("ERROR: No se recibió el ID de la actividad.");
}

// Consulta SQL para traer los datos de la actividad según el ID recibido
$sql = "SELECT * FROM actividad WHERE id='$id'";

// Ejecuta la consulta
$query = mysqli_query($con, $sql);

// Convierte el resultado en un array asociativo
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> <!-- Configuración del tipo de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajuste responsivo en móviles -->
    <link rel="stylesheet" href="../Estilo_Formularios.css"> <!-- Enlace al archivo CSS del formulario -->
    <title>Editar Actividad</title> <!-- Título de la página -->
</head>

<body>

<!-- Fondo oscuro del modal -->
<div class="modal-background">

    <!-- Caja principal del modal -->
    <div class="modal-content">
        
        <!-- Botón de cerrar el modal (regresa a la página anterior) -->
        <span class="close-btn" onclick="window.history.back()">×</span>

        <header>
            <div class="container">
                <div style="display: flex; align-items: center;">
                    <!-- Espacio reservado para posibles elementos en el header -->
                </div>
            </div>
        </header>

        <main>
            <section>

                <!-- Título dentro del modal -->
                <h2>Editar Actividad</h2>

                <!-- Formulario para editar la actividad -->
                <form action="Editar_Actividad.php" method="POST">

                    <!-- Campo oculto con el ID de la actividad -->
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">

                    <div>
                        <!-- Campo de fecha -->
                        <label for="fecha">Fecha:</label><br>
                        <input type="date" name="fecha" value="<?= $row['fecha'] ?>" required>
                    </div>

                    <div>
                        <!-- Campo hora de inicio -->
                        <label for="hora_inicio">Hora inicio:</label><br>
                        <input type="time" name="hora_inicio" value="<?= $row['hora_inicio'] ?>" required>
                    </div>

                    <div>
                        <!-- Campo hora de fin -->
                        <label for="hora_fin">Hora fin:</label><br>
                        <input type="time" name="hora_fin" value="<?= $row['hora_fin'] ?>" required>
                    </div>

                    <div>
                        <!-- Campo asignatura -->
                        <label for="asignatura">Asignatura</label>
                        <input type="text" name="asignatura" value="<?= $row['asignatura'] ?>" required pattern="{1,254}">
                    </div>

                    <div>
                        <!-- Selector de prioridad -->
                        <label for="prioridad">Prioridad</label>
                        <select name="prioridad" required>
                            <option value="" disabled>Seleccione</option>

                            <!-- Selecciona automáticamente la prioridad que tiene la actividad -->
                            <option value="Alta" <?= $row['prioridad'] == 'Alta' ? 'selected' : ''?>>Alta</option>
                            <option value="Media" <?= $row['prioridad'] == 'Media' ? 'selected' : ''?>>Media</option>
                            <option value="Baja" <?= $row['prioridad'] == 'Baja' ? 'selected' : ''?>>Baja</option>
                        </select><br>
                    </div>

                    <div>
                        <!-- Campo descripción -->
                        <label for="descripcion">Descripción</label>
                        <input type="text" name="descripcion" value="<?= $row['descripcion'] ?>" required pattern="{1,254}">
                    </div>

                    <!-- Botón para guardar los cambios -->
                    <button type="submit">Guardar Cambios</button>

                </form>

            </section>
        </main>

    </div> <!-- modal-content -->

</div> <!-- modal-background -->

</body>
</html>