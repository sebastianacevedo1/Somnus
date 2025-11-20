<?php
// Incluye el archivo que contiene la conexión a la base de datos
include('../Conexion_Tabla.php');

// Llama a la función connection() para establecer la conexión con la base de datos
$con = connection();

//   RECEPCIÓN DE DATOS DEL FORMULARIO
// Recibe el ID de la actividad enviada mediante método POST
$id = $_POST['id'];

// Recibe la fecha actualizada desde el formulario
$fecha = $_POST['fecha'];

// Recibe la hora de inicio actualizada desde el formulario
$hora_inicio = $_POST['hora_inicio'];

// Recibe la hora de fin actualizada desde el formulario
$hora_fin = $_POST['hora_fin'];

// Recibe el nombre de la asignatura actualizada desde el formulario
$asignatura = $_POST['asignatura'];

// Recibe la prioridad seleccionada en el formulario
$prioridad = $_POST['prioridad'];

// Recibe la descripción ingresada o modificada en el formulario
$descripcion = $_POST['descripcion'];

//   ACTUALIZACIÓN EN LA BASE DE DATOS
// Crea la consulta SQL que actualiza los datos de la actividad según el ID
$sql = "UPDATE actividad 
        SET fecha='$fecha', 
            hora_inicio='$hora_inicio', 
            hora_fin='$hora_fin', 
            asignatura='$asignatura', 
            prioridad='$prioridad', 
            descripcion='$descripcion' 
        WHERE id='$id'";

// Ejecuta la consulta SQL en la base de datos
$query = mysqli_query($con, $sql);

//   REDIRECCIÓN SI LA CONSULTA FUE EXITOSA
// Verifica si la actualización se realizó correctamente
if ($query) {
    // Redirige a la página de lectura de actividades
    Header("Location: Lectura_Actividad.php");
}

// Cierra el código PHP
?>

