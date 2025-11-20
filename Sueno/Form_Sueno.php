<!DOCTYPE html> <!-- Indica que el documento está escrito en HTML5 -->
<html lang="es"> <!-- // Lenguaje del documento -->

<head>
    <meta charset="UTF-8"> <!-- Especifica la codificación de caracteres: UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta el sitio para ser responsive en móviles -->
    <link rel="stylesheet" href="../Estilo_Formularios.css"> <!-- Enlaza el archivo CSS con los estilos del formulario -->
    <title>Formulario de Sueño</title> <!-- Título que aparece en la pestaña del navegador -->
</head>

<body> <!-- Inicio del cuerpo del documento -->

<!-- Fondo oscuro del modal -->
<div class="modal-background"> <!-- Contenedor del fondo superpuesto -->
    
    <!-- Caja del modal -->
    <div class="modal-content"> <!-- Caja principal del formulario superpuesto -->

        <!-- Botón para cerrar -->
        <span class="close-btn" onclick="window.history.back()">×</span> <!-- Botón X para cerrar el modal -->

        <header> <!-- Encabezado solo dentro del modal -->
            <div class="container"> <!-- Contenedor del encabezado -->
                <div style="display: flex; align-items: center;"> <!-- Alineación horizontal -->
                    
                </div>
            </div>
        </header>

        <main> <!-- Contenido principal del modal -->
            <section> <!-- Sección con el formulario -->
                
                <h2>Añadir Sueño</h2> <!-- Título del formulario -->

                <!-- Formulario para insertar registros de sueño -->
                <form action="Insertar_Sueno.php" method="post"> <!-- Envía datos por POST -->

                    <div> <!-- Campo para fecha -->
                        <label for="fecha">Fecha:</label><br>
                        <input type="date" name="fecha" required
                               title="Seleccione la fecha de sueño">
                    </div>

                    <div> <!-- Campo hora inicio -->
                        <label for="hora_inicio">Hora inicio:</label><br>
                        <input type="time" name="hora_inicio" required
                               title="Seleccione la hora de inicio del sueño">
                    </div>

                    <div> <!-- Campo hora fin -->
                        <label for="hora_fin">Hora fin:</label><br>
                        <input type="time" name="hora_fin" required
                               title="Seleccione la hora de finalización del sueño">
                    </div>

                    <div> <!-- Campo calidad -->
                        <label for="calidad">Calidad</label>
                        <select name="calidad" required title="Seleccione la calidad del sueño">
                            <option value="" disabled selected>Seleccione</option>
                            <option value="excelente">Excelente</option>
                            <option value="buena">Buena</option>
                            <option value="regular">Regular</option>
                            <option value="mala">Mala</option>
                        </select>
                    </div>

                    <div> <!-- Campo descripción -->
                        <label for="descripcion">Descripción</label>
                        <input type="text" name="descripcion" required pattern="{1,254}"
                               title="Máximo 100 caracteres">
                    </div>

                    <button type="submit">Confirmar</button> <!-- Botón enviar -->

                </form> <!-- Fin del formulario -->

            </section>
        </main>

    </div> <!-- fin modal-content -->

</div> <!-- fin modal-background -->

</body> <!-- Fin del cuerpo -->
</html> <!-- Fin del documento HTML -->
