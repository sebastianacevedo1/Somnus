<?php 
include('../Conexion_Tabla.php'); // Incluye archivo de conexión a la BD

$con = connection(); // Abre conexión a la base de datos
$sql ="SELECT * FROM actividad"; // Consulta todas las actividades
$query = mysqli_query($con, $sql); // Ejecuta la consulta
?> 

<!DOCTYPE html> <!-- // Documento HTML5 -->
<html lang="es"> <!-- // Lenguaje del documento -->
<head>
    <meta charset="UTF-8"> <!-- // Codificación UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- // Pantalla responsive -->
    <link rel="stylesheet" href="../Estilo_General.css"> <!-- // Importa CSS general -->
    <title>Actividad</title> <!-- // Título de la pestaña -->
</head>

<body> <!-- // Inicio del cuerpo -->
  <header> <!-- // Encabezado superior fijo -->
    <img src ="../Logo_Somnus.png">
</header>

<div class="container"> <!-- // Contenedor principal para sidebar + contenido -->

    <div class="sidebar"> <!-- // Contenedor barra lateral -->

        <a href="../Principal/Lectura_Todo.php">Hoy</a> <!-- // Botón Inicio -->
        <a href="../Actividad/Lectura_Actividad.php">Actividad</a> <!-- // Botón Actividad -->
        <a href="../Comida/Lectura_Comida.php">Alimentación</a> <!-- // Botón Alimentación -->
        <a href="../Sueno/Lectura_Sueno.php">Descanso</a> <!-- // Botón Descanso -->

    </div> <!-- // Fin barra lateral -->

    <div class="content"> <!-- // Contenedor del contenido principal -->

        <h1>Actividad</h1> <!-- // Título principal -->

        <div class="tabla-consulta-contenedor"> <!-- // Contenedor tabla -->

            <table> <!-- // Tabla -->
                <thead> <!-- // Encabezado de tabla -->
                    <tr> <!-- // Fila de encabezados -->
                        <th>Fecha</th> <!-- // Fecha -->
                        <th>Hora_inicio</th> <!-- // Hora inicio -->
                        <th>Hora_fin</th> <!-- // Hora fin -->
                        <th>Asignatura</th> <!-- // Nombre asignatura -->
                        <th>Prioridad</th> <!-- // Nivel de prioridad -->
                        <th>Descripción</th> <!-- // Descripción -->
                        <th></th> <!-- // Columna acciones -->
                        <th></th> <!-- // Columna acciones -->
                    </tr> <!-- // Fin fila encabezado -->
                </thead>

                <tbody> <!-- // Cuerpo de la tabla -->
                    <?php while($row = mysqli_fetch_array($query)): ?> <!-- // Recorre registros -->

                    <tr> <!-- // Fila de datos -->

                        <td><?= $row['fecha'] ?></td> <!-- // Fecha -->
                        <td><?= $row['hora_inicio'] ?></td> <!-- // Hora inicio -->
                        <td><?= $row['hora_fin'] ?></td> <!-- // Hora fin -->
                        <td><?= $row['asignatura'] ?></td> <!-- // Asignatura -->
                        <td><?= $row['prioridad'] ?></td> <!-- // Prioridad -->
                        <td><?= $row['descripcion'] ?></td> <!-- // Descripción -->

                        <td>
                            <a href="Actualizar_Actividad.php?id=<?= $row['id']?>">Editar</a> 
                            <!-- // Enlace editar -->
                        </td>

                        <td>
                            <a href="Eliminar_Actividad.php?id=<?= $row['id']?>">Eliminar</a>
                            <!-- // Enlace eliminar -->
                        </td>

                    </tr> <!-- // Fin fila -->
                    <?php endwhile; ?> <!-- // Fin del bucle -->
                </tbody> <!-- // Fin cuerpo tabla -->
            </table> <!-- // Fin tabla -->

            <a class="boton-add" href="Form_Actividad.php"> <!-- // Enlace para añadir -->
                Añadir <!-- // Botón añadir -->
            </a>

        </div> <!-- // Fin contenedor tabla -->

    </div> <!-- // Fin contenedor contenido -->

</div> <!-- // Fin contenedor principal -->

</body> <!-- // Fin cuerpo -->
</html> <!-- // Fin documento -->
