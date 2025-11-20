<?php  
include('../Conexion_Tabla.php'); // Incluye el archivo con la conexión a la BD
$con = connection(); // Llama la función para conectarse a MySQL

$qA = mysqli_query($con, "SELECT * FROM actividad WHERE fecha = CURDATE()"); // Consulta actividades de hoy
$qS = mysqli_query($con, "SELECT * FROM sueno WHERE fecha = CURDATE()"); // Consulta sueño de hoy
$qC = mysqli_query($con, "SELECT * FROM comida WHERE fecha = CURDATE()"); // Consulta comidas de hoy
?>
<!DOCTYPE html> <!-- // Documento HTML5 -->
<html lang="es"> <!-- // Idioma español -->
<head>
    <meta charset="UTF-8"> <!-- // Codificación UTF-8 -->
    <title>Resumen del Día</title> <!-- // Título de la pestaña -->
    <link rel="stylesheet" href="../Estilo_General.css"> <!-- // Importa CSS general -->
</head>
<body> <!-- // Inicio del cuerpo -->

<!-- HEADER -->
<header> <!-- // Encabezado superior fijo -->
    <img src ="../Logo_Somnus.png">
</header>

<!-- CONTENEDOR GENERAL -->
<div class="container"> <!-- // Contiene sidebar + contenido principal -->

    <!-- BARRA LATERAL -->
    <div class="sidebar"> <!-- // Menú lateral izquierdo -->
        <a href="../Principal/Lectura_Todo.php">Hoy</a> <!-- // Botón Inicio -->
        <a href="../Actividad/Lectura_Actividad.php">Actividad</a> <!-- // Botón Actividad -->
        <a href="../Comida/Lectura_Comida.php">Alimentación</a> <!-- // Botón Alimentación -->
        <a href="../Sueno/Lectura_Sueno.php">Descanso</a> <!-- // Botón Descanso -->
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="content"> <!-- // Aquí se muestra todo el contenido -->

        <!-- ACTIVIDADES -->
        <h2>Hoy</h2> <!-- // Subtítulo general -->
        <h2>Actividades</h2> <!-- // Subtítulo actividades -->

        <table> <!-- // Tabla actividades -->
            <tr> <!-- // Encabezado de columnas -->
                <th>Fecha</th> <!-- // Columna fecha -->
                <th>Hora inicio</th> <!-- // Columna inicio -->
                <th>Hora fin</th> <!-- // Columna fin -->
                <th>Asignatura</th> <!-- // Columna asignatura -->
                <th>Prioridad</th> <!-- // Columna prioridad -->
                <th>Descripción</th> <!-- // Columna descripción -->
                <th></th> <!-- // Columna editar -->
                <th></th> <!-- // Columna eliminar -->
            </tr>

            <?php while($A = mysqli_fetch_assoc($qA)): ?> <!-- // Bucle de actividades -->
            <tr> <!-- // Fila de datos -->
                <td><?= $A['fecha'] ?></td> <!-- // Fecha -->
                <td><?= $A['hora_inicio'] ?></td> <!-- // Inicio -->
                <td><?= $A['hora_fin'] ?></td> <!-- // Fin -->
                <td><?= $A['asignatura'] ?></td> <!-- // Asignatura -->
                <td><?= $A['prioridad'] ?></td> <!-- // Prioridad -->
                <td><?= $A['descripcion'] ?></td> <!-- // Descripción -->

                <td><a href="../Actividad/Actualizar_Actividad.php?id=<?= $A['id'] ?>">Editar</a></td> <!-- // Botón editar -->
                <td><a href="../Actividad/Eliminar_Actividad.php?id=<?= $A['id'] ?>">Eliminar</a></td> <!-- // Botón eliminar -->
            </tr>
            <?php endwhile; ?> <!-- // Fin bucle -->
        </table>

        <a class="boton-add" href="../Actividad/Form_Actividad.php">Añadir Actividad</a> <!-- // Enlace añadir -->

        <!-- SUEÑO -->
        <h2>Descanso</h2> <!-- // Título sueño -->

        <table> <!-- // Tabla sueño -->
            <tr> <!-- // Encabezado columnas -->
                <th>Fecha</th> <!-- // Columna fecha -->
                <th>Hora inicio</th> <!-- // Inicio -->
                <th>Hora fin</th> <!-- // Fin -->
                <th>Calidad</th> <!-- // Calidad del sueño -->
                <th>Descripción</th> <!-- // Columna descripción -->
                <th></th> <!-- // Editar -->
                <th></th> <!-- // Eliminar -->
            </tr>

            <?php while($S = mysqli_fetch_assoc($qS)): ?> <!-- // Bucle sueño -->
            <tr> <!-- // Fila -->
                <td><?= $S['fecha'] ?></td> <!-- // Fecha -->
                <td><?= $S['hora_inicio'] ?></td> <!-- // Inicio -->
                <td><?= $S['hora_fin'] ?></td> <!-- // Fin -->
                <td><?= $S['calidad'] ?></td> <!-- // Calidad -->
                <td><?= $S['descripcion'] ?></td> <!-- // Descripción -->

                <td><a href="../Sueno/Actualizar_Sueno.php?id=<?= $S['id'] ?>">Editar</a></td> <!-- // Botón editar -->
                <td><a href="../Sueno/Eliminar_Sueno.php?id=<?= $S['id'] ?>">Eliminar</a></td> <!-- // Botón eliminar -->
            </tr>
            <?php endwhile; ?> <!-- // Fin bucle -->
        </table>

        <a class="boton-add" href="../Sueno/Form_Sueno.php">Añadir Sueño</a> <!-- // Enlace añadir -->

        <!-- COMIDAS -->
        <h2>Alimentación</h2> <!-- // Título comidas -->

        <table> <!-- // Tabla comidas -->
            <tr> <!-- // Encabezados -->
                <th>Fecha</th> <!-- // Fecha -->
                <th>Hora inicio</th> <!-- // Inicio -->
                <th>Hora fin</th> <!-- // Fin -->
                <th>Tipo de Comida</th> <!-- // Tipo de comida -->
                <th>KCal</th> <!-- // Calorías-->
                <th>Descripción</th> <!-- // Descripción -->
                <th></th> <!-- // Editar -->
                <th></th> <!-- // Eliminar -->
            </tr>

            <?php while($C = mysqli_fetch_assoc($qC)): ?> <!-- // Bucle comidas -->
            <tr> <!-- // Fila -->
                <td><?= $C['fecha'] ?></td> <!-- // Fecha -->
                <td><?= $C['hora_inicio'] ?></td> <!-- // Inicio -->
                <td><?= $C['hora_fin'] ?></td> <!-- // Fin -->
                <td><?= $C['tipo_comida'] ?></td> <!-- // Tipo -->
                <td><?= $C['kcal'] ?></td> <!-- // Calorías-->
                <td><?= $C['descripcion'] ?></td> <!-- // Descripción -->

                <td><a href="../Comida/Actualizar_Comida.php?id=<?= $C['id'] ?>">Editar</a></td> <!-- // Botón editar -->
                <td><a href="../Comida/Eliminar_Comida.php?id=<?= $C['id'] ?>">Eliminar</a></td> <!-- // Botón eliminar -->
            </tr>
            <?php endwhile; ?> <!-- // Fin bucle -->
        </table>

        <a class="boton-add" href="../Comida/Form_Comida.php">Añadir Comida</a> <!-- // Enlace añadir -->

    </div> <!-- // Fin content -->

</div> <!-- // Fin container -->

</body> <!-- // Fin body -->
</html> <!-- // Fin documento -->
