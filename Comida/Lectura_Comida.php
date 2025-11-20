<?php 
include('../Conexion_Tabla.php'); // Incluye el archivo con la función de conexión a la BD

$con = connection(); // Abre la conexión a la base de datos
$sql = "SELECT * FROM comida"; // Define la consulta para traer todas las comidas
$query = mysqli_query($con, $sql); // Ejecuta la consulta y guarda el resultado
?> 

<!DOCTYPE html> <!-- // Documento HTML5 -->
<html lang="es"> <!-- // Lenguaje del documento -->
<head> <!-- // Inicio del head -->
    <meta charset="UTF-8"> <!-- // Codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- // Responsive -->
    <link rel="stylesheet" href="../Estilo_General.css"> <!-- // Vincula el CSS global Estilo_General.css -->
    <title>Alimentación</title> <!-- // Título de la pestaña -->
</head> <!-- // Fin del head -->

<body> <!-- // Inicio del body -->
    <header> <!-- // Encabezado superior fijo -->
    <img src ="../Logo_Somnus.png">
</header>

<div class="container"> <!-- // Contenedor principal (flex: sidebar + content) -->

    <div class="sidebar"> <!-- // Contenedor barra lateral -->
        <!-- // Enlace al inicio -->
        <a href="../Principal/Lectura_Todo.php">Hoy</a> <!-- // Botón/menu Inicio -->
        <!-- // Enlace a actividades -->
        <a href="../Actividad/Lectura_Actividad.php">Actividad</a> <!-- // Botón/menu Actividad -->
        <!-- // Enlace a comidas -->
        <a href="../Comida/Lectura_Comida.php">Alimentación</a> <!-- // Botón/menu Alimentación -->
        <!-- // Enlace a sueño -->
        <a href="../Sueno/Lectura_Sueno.php">Descanso</a> <!-- // Botón/menu Descanso -->
    </div> <!-- // Fin barra lateral -->

    <div class="content"> <!-- // Contenedor principal derecho (donde va la tabla) -->

        <h1>Alimentación</h1> <!-- // Título principal de la página -->

        <div class="tabla-consulta-contenedor"> <!-- // Caja que envuelve la tabla -->

            <table> <!-- // Inicio de la tabla -->
                <thead> <!-- // Encabezado de la tabla -->
                    <tr> <!-- // Fila de encabezados -->
                        <th>Fecha</th> <!-- // Columna Fecha -->
                        <th>Hora_inicio</th> <!-- // Columna Hora inicio -->
                        <th>Hora_fin</th> <!-- // Columna Hora fin -->
                        <th>Tipo de comida</th> <!-- // Columna Tipo de comida -->
                        <th>Kcal</th> <!-- // Columna Kcal -->
                        <th>Descripción</th> <!-- // Columna Descripción -->
                        <th></th> <!-- // Columna vacía para Editar -->
                        <th></th> <!-- // Columna vacía para Eliminar -->
                    </tr> <!-- // Fin fila encabezado -->
                </thead> <!-- // Fin thead -->

                <tbody> <!-- // Cuerpo de la tabla con datos dinámicos -->
                <?php while($row = mysqli_fetch_array($query)): ?> <!-- // Bucle PHP que recorre resultados -->
                    <tr> <!-- // Fila de datos -->
                        <td><?= $row['fecha'] ?></td> <!-- // Muestra la fecha del registro -->
                        <td><?= $row['hora_inicio'] ?></td> <!-- // Muestra hora inicio -->
                        <td><?= $row['hora_fin'] ?></td> <!-- // Muestra hora fin -->
                        <td><?= $row['tipo_comida'] ?></td> <!-- // Muestra tipo de comida -->
                        <td><?= $row['kcal'] ?></td> <!-- // Muestra calorías (kcal) -->
                        <td><?= $row['descripcion'] ?></td> <!-- // Muestra la descripción -->

                        <td>
                            <a href="Actualizar_Comida.php?id=<?= $row['id'] ?>">Editar</a> <!-- // Link para editar (pasa id por GET) -->
                        </td> <!-- // Fin celda editar -->

                        <td>
                            <a href="Eliminar_Comida.php?id=<?= $row['id'] ?>">Eliminar</a> <!-- // Link para eliminar (pasa id por GET) -->
                        </td> <!-- // Fin celda eliminar -->
                    </tr> <!-- // Fin fila datos -->
                <?php endwhile; ?> <!-- // Fin del bucle PHP -->
                </tbody> <!-- // Fin tbody -->

            </table> <!-- // Fin tabla -->

            <a class="boton-add" href="Form_Comida.php">Añadir</a> <!-- // Enlace al formulario para añadir (estilado con .boton-add) -->

        </div> <!-- // Fin tabla-consulta-contenedor -->

    </div> <!-- // Fin content -->

</div> <!-- // Fin container -->

</body> <!-- // Fin body -->
</html> <!-- // Fin documento -->
