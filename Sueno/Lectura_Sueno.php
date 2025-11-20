<?php 
include('../Conexion_Tabla.php'); // Incluye archivo de conexión a la BD

$con = connection(); // Abre la conexión
$sql ="SELECT * FROM sueno"; // Consulta todos los registros de sueño
$query = mysqli_query($con, $sql); // Ejecuta la consulta
?> 

<!DOCTYPE html> <!-- // Documento HTML5 -->
<html lang="en"> <!-- // Idioma del documento -->
<head> <!-- // Inicio del head -->
    <meta charset="UTF-8"> <!-- // Codificación -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- // Ajuste responsive -->
    <link rel="stylesheet" href="../Estilo_General.css"> <!-- // Vincula el CSS global -->
    <title>Descanso</title> <!-- // Título de pestaña -->
</head> <!-- // Fin head -->

<body> <!-- // Inicio del body -->
    <header> <!-- // Encabezado superior fijo -->
    <img src ="../Logo_Somnus.png">
</header>

<div class="container"> <!-- // Contenedor principal (flex: sidebar + content) -->

    <div class="sidebar"> <!-- // Barra lateral -->

        <a href="../Principal/Lectura_Todo.php">Hoy</a> <!-- // Botón Inicio -->
        <a href="../Actividad/Lectura_Actividad.php">Actividad</a> <!-- // Botón Actividad -->
        <a href="../Comida/Lectura_Comida.php">Alimentación</a> <!-- // Botón Alimentación -->
        <a href="../Sueno/Lectura_Sueno.php">Descanso</a> <!-- // Botón Descanso -->

    </div> <!-- // Fin sidebar -->

    <div class="content"> <!-- // Contenedor derecho -->

        <h1>Descanso</h1> <!-- // Título principal -->

        <div class="tabla-consulta-contenedor"> <!-- // Contenedor de la tabla -->

            <table> <!-- // Tabla -->
                <thead> <!-- // Encabezado -->
                    <tr> <!-- // Fila de encabezado -->
                        <th>Fecha</th> <!-- // Columna -->
                        <th>Hora_inicio</th> <!-- // Columna -->
                        <th>Hora_fin</th> <!-- // Columna -->
                        <th>Calidad</th> <!-- // Columna -->
                        <th>Descripción</th> <!-- // Columna -->
                        <th></th> <!-- // Columna vacía -->
                        <th></th> <!-- // Columna vacía -->
                    </tr> <!-- // Fin fila encabezado -->
                </thead> <!-- // Fin thead -->

                <tbody> <!-- // Cuerpo dinámico -->
                    <?php while($row = mysqli_fetch_array($query)): ?> <!-- // Bucle que recorre registros -->
                    <tr> <!-- // Fila de datos -->

                        <td><?= $row['fecha'] ?></td> <!-- // Fecha -->
                        <td><?= $row['hora_inicio'] ?></td> <!-- // Hora inicio -->
                        <td><?= $row['hora_fin'] ?></td> <!-- // Hora fin -->
                        <td><?= $row['calidad'] ?></td> <!-- // Calidad -->
                        <td><?= $row['descripcion'] ?></td> <!-- // Descripción -->

                        <td>
                            <a href="Actualizar_Sueno.php?id=<?= $row['id']?>">Editar</a> <!-- // Enlace editar -->
                        </td> <!-- // Fin columna editar -->

                        <td>
                            <a href="Eliminar_Sueno.php?id=<?= $row['id']?>">Eliminar</a> <!-- // Enlace eliminar -->
                        </td> <!-- // Fin columna eliminar -->

                    </tr> <!-- // Fin fila datos -->
                    <?php endwhile; ?> <!-- // Fin bucle -->
                </tbody> <!-- // Fin tbody -->

            </table> <!-- // Fin tabla -->

            <a class="boton-add" href="Form_Sueno.php">Añadir</a> <!-- // Botón añadir -->

        </div> <!-- // Fin contenedor tabla -->

    </div> <!-- // Fin content -->

</div> <!-- // Fin container -->

</body> <!-- // Fin body -->
</html> <!-- // Fin documento -->
