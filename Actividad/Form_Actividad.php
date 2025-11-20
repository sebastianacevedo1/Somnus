<!-- Indica el tipo de documento HTML -->
<!DOCTYPE html>
<html lang="es"> <!-- // Lenguaje del documento -->
<head>
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta la visualización en dispositivos móviles -->
    <link rel="stylesheet" href="../Estilo_Formularios.css"> <!-- Importa la hoja de estilos CSS -->
    <title>Formulario de actividades</title> <!-- Título que aparece en la pestaña del navegador -->
</head>
<body>

<!-- Fondo modal -->
<div class="modal-background"> <!-- Contenedor del fondo oscuro del modal -->
    <div class="modal-content"> <!-- Contenedor principal del contenido del modal -->

        <!-- Botón cerrar -->
        <span class="close-btn" onclick="window.history.back()">×</span> <!-- Botón para cerrar y regresar a la página anterior -->

        <header> <!-- Sección del encabezado -->
            <div class="container"> <!-- Contenedor del encabezado -->
                <div style="display: flex; align-items: center;"> <!-- Alinea logo y título horizontalmente -->
       
                </div>
            </div>
        </header>

        <main> <!-- Contenido principal -->
            <section> <!-- Sección del formulario -->
                <h2>Añadir Actividad</h2> <!-- Título del formulario -->

                <!-- Formulario que envía datos a Insertar_Actividad.php -->
                <form action="Insertar_Actividad.php" method="post">

                    <div> <!-- Campo de fecha -->
                        <label for="fecha">Fecha:</label><br> <!-- Etiqueta del campo -->
                        <input type="date" name="fecha" required title="Seleccione la fecha de la actividad"> <!-- Selector de fecha -->
                    </div>

                    <div> <!-- Campo hora inicio -->
                        <label for="hora_inicio">Hora inicio:</label><br>
                        <input type="time" name="hora_inicio" required title="Seleccione la hora de inicio"> <!-- Selector de hora inicial -->
                    </div>

                    <div> <!-- Campo hora fin -->
                        <label for="hora_fin">Hora fin:</label><br>
                        <input type="time" name="hora_fin" required title="Seleccione la hora de fin"> <!-- Selector de hora final -->
                    </div>

                    <div> <!-- Campo asignatura -->
                        <label for="asignatura">Asignatura</label>
                        <input type="text" name="asignatura" required pattern="{1,254}"
                               title="Solo se permiten letras y un máximo de 15 caracteres"> <!-- Campo de texto para asignatura -->
                    </div>

                    <div> <!-- Campo prioridad -->
                        <label for="prioridad">Prioridad</label>
                        <select name="prioridad" required title="Seleccione la prioridad de la actividad"> <!-- Desplegable -->
                            <option value="" disabled selected>Seleccione</option> <!-- Opción por defecto -->
                            <option value="Alta">Alta</option> <!-- Prioridad alta -->
                            <option value="Media">Media</option> <!-- Prioridad media -->
                            <option value="Baja">Baja</option> <!-- Prioridad baja -->
                        </select><br>
                    </div>

                    <div> <!-- Campo descripción -->
                        <label for="descripcion">Descripcción</label>
                        <input type="text" name="descripcion" required pattern="{1,254}"
                               title="Solo se permiten letras y un máximo de 100 caracteres"> <!-- Campo para descripción -->
                    </div>

                    <button type="submit">Confirmar</button> <!-- Botón para enviar el formulario -->
                </form>
            </section>
        </main>
    </div>
</div>

</body>
</html>

