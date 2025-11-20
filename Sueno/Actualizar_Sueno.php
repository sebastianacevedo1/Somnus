<?php
// Incluye el archivo que contiene la conexión a la base de datos
include('../Conexion_Tabla.php');

// Llama a la función connection() para establecer la conexión
$con = connection();

// Recibe el ID enviado mediante el método GET desde la URL
$id = $_GET['id'];

// Consulta SQL que selecciona todos los datos del registro cuyo id coincida
$sql = "SELECT * FROM sueno WHERE id='$id'";

// Ejecuta la consulta en la base de datos
$query = mysqli_query($con, $sql);

// Obtiene la fila resultante como un arreglo asociativo
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html> <!-- Indica que el documento está escrito en HTML5 -->

<html lang="es"> <!-- // Lenguaje del documento -->

<head>
    <meta charset="UTF-8"> <!-- Especifica la codificación de caracteres UTF-8 -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hace que la página sea adaptable a móviles -->

    <link rel="stylesheet" href="../Estilo_Formularios.css">
    <!-- Enlaza el archivo CSS externo que contiene los estilos del modal y formulario -->

    <title>Editar Sueño</title> <!-- Título que aparece en la pestaña del navegador -->
</head>

<body> <!-- Inicio del contenido visible -->

<!-- Fondo oscuro que cubre toda la pantalla, simulando un modal -->
<div class="modal-background"> <!-- Contenedor general del fondo con desenfoque -->

    <!-- Caja principal que aparece centrada sobre el fondo -->
    <div class="modal-content"> <!-- Contenedor del formulario con animación y sombras -->
        <span class="close-btn" onclick="window.history.back()">×</span> <!-- Botón X para cerrar el modal -->

        <!-- Botón "X" para cerrar el modal (regresa a la página anterior) -->
    

        <header> <!-- Encabezado dentro del modal -->

            <div class="container"> <!-- Contenedor para alinear el logo y título -->

                <div style="display: flex; align-items: center;">
                    <!-- Uso de flexbox para acomodar elementos horizontalmente -->

                    <!-- Título principal mostrado en el encabezado del formulario -->
                </div>

            </div>

        </header>

        <main> <!-- Contenido principal del modal -->

            <section> <!-- Sección donde se encuentra el formulario -->

                <h2>Editar Sueño</h2>
                <!-- Título del formulario dentro del modal -->

                <!-- Formulario que enviará los datos actualizados mediante POST -->
                <form action="Editar_Sueno.php" method="POST">

                    <!-- Campo oculto que contiene el ID del registro para identificar qué actualizar -->
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">

                    <div> <!-- Contenedor del campo Fecha -->

                        <label for="fecha">Fecha:</label><br>
                        <!-- Etiqueta del selector de fecha -->

                        <input type="date" name="fecha" required
                               value="<?= $row['fecha'] ?>">
                        <!-- Valor cargado desde la base de datos -->
                    </div>

                    <div> <!-- Contenedor del campo Hora inicio -->

                        <label for="hora_inicio">Hora inicio:</label><br>
                        <!-- Etiqueta del campo hora de inicio -->

                        <input type="time" name="hora_inicio" required
                               value="<?= $row['hora_inicio'] ?>">
                        <!-- Valor cargado del registro seleccionado -->
                    </div>

                    <div> <!-- Contenedor del campo Hora fin -->

                        <label for="hora_fin">Hora fin:</label><br>
                        <!-- Etiqueta del campo hora final -->

                        <input type="time" name="hora_fin" required
                               value="<?= $row['hora_fin'] ?>">
                        <!-- Valor cargado desde la base de datos -->
                    </div>

                    <div> <!-- Contenedor del campo Calidad -->

                        <label for="calidad">Calidad</label>
                        <!-- Etiqueta para el menú desplegable -->

                        <select name="calidad" required title="Seleccione la calidad del sueño">
                            <!-- Selector con opciones -->

                            <option value="" disabled>Seleccione</option>
                            <!-- Opción inicial deshabilitada -->

                            <!-- Opción seleccionada según el valor almacenado -->
                            <option value="excelente" <?= $row['calidad'] == 'excelente' ? 'selected' : ''?>>Excelente</option>

                            <option value="buena" <?= $row['calidad'] == 'buena' ? 'selected' : ''?>>Buena</option>

                            <option value="regular" <?= $row['calidad'] == 'regular' ? 'selected' : ''?>>Regular</option>

                            <option value="mala" <?= $row['calidad'] == 'mala' ? 'selected' : ''?>>Mala</option>
                        </select><br>
                    </div>

                    <div> <!-- Contenedor del campo descripción -->

                        <label for="descripcion">Descripción</label>
                        <!-- Etiqueta del input -->

                        <input type="text" name="descripcion"
                               value="<?= $row['descripcion'] ?>" required
                               pattern=".{1,254}"
                               title="Máximo 254 caracteres">
                        <!-- Campo de texto con la descripción existente -->
                    </div>

                    <button type="submit">Guardar Cambios</button>
                    <!-- Botón para enviar el formulario y actualizar los datos -->

                </form> <!-- Fin del formulario -->

            </section>

        </main>

    </div> <!-- Fin del contenedor del modal -->

</div> <!-- Fin del fondo oscuro del modal -->

</body>
</html> <!-- Fin del documento HTML -->
