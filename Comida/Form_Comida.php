<!DOCTYPE html> <!-- Indica que el documento es HTML5 -->
<html lang="es"> <!-- Lenguaje del documento -->

<head>
    <meta charset="UTF-8"> <!-- Codificación UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive -->

    <link rel="stylesheet" href="../Estilo_Formularios.css">
    <!-- Vincula el CSS del modal y del formulario -->

    <title>Formulario de Comida</title> <!-- Título de la pestaña -->
</head>

<body>

<!-- FONDO OSCURO DEL MODAL -->
<div class="modal-background"> <!-- Fondo que cubre la pantalla -->

    <!-- CAJA CENTRADA DEL MODAL -->
    <div class="modal-content">

        <!-- BOTÓN DE CERRAR -->
        <span class="close-btn" onclick="window.history.back()">×</span>
        <!-- La X para cerrar -->

        <!-- ENCABEZADO CON LOGO Y TÍTULO -->
        <header>
            <div class="container">
                <div style="display: flex; align-items: center;">
            
                </div>
            </div>
        </header>

        <!-- CONTENIDO PRINCIPAL -->
        <main>
            <section>

                <h2>Añadir Comida</h2> <!-- Título del formulario -->

                <!-- FORMULARIO COMPLETO -->
                <form action="Insertar_Comida.php" method="post">

                    <!-- FECHA -->
                    <div>
                        <label for="fecha">Fecha:</label><br>
                        <input type="date" name="fecha" required>
                    </div>

                    <!-- HORA INICIO -->
                    <div>
                        <label for="hora_inicio">Hora inicio:</label><br>
                        <input type="time" name="hora_inicio" required>
                    </div>

                    <!-- HORA FIN -->
                    <div>
                        <label for="hora_fin">Hora fin:</label><br>
                        <input type="time" name="hora_fin" required>
                    </div>

                    <!-- TIPO DE COMIDA -->
                    <div>
                        <label for="tipo_comida">Tipo de comida:</label><br>
                        <select name="tipo_comida" required>
                            <option value="" disabled selected>Seleccione</option>
                            <option value="desayuno">Desayuno</option>
                            <option value="almuerzo">Almuerzo</option>
                            <option value="cena">Cena</option>
                            <option value="snack">Snack</option>
                        </select>
                    </div>

                    <!-- KCAL -->
                    <div>
                        <label for="kcal">Kcal:</label><br>
                        <input type="number" name="kcal" required>
                    </div>

                    <!-- DESCRIPCIÓN -->
                    <div>
                        <label for="descripcion">Descripción:</label><br>
                        <input type="text" name="descripcion"
                            minlength="1" maxlength="254"
                            required>
                    </div>

                    <!-- BOTÓN CONFIRMAR -->
                    <button type="submit">Confirmar</button>

                </form>

            </section>
        </main>

    </div> <!-- Cierra modal-content -->

</div> <!-- Cierra modal-background -->

</body>
</html>
