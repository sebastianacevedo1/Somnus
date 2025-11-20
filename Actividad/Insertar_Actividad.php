<?php 
include('../Conexion_Tabla.php'); // Incluye el archivo con la conexión a la base de datos

$con = connection(); // Llama la función 'connection()' para conectarse a MySQL

$id = null; // ID vacío para que MySQL lo genere automáticamente (AUTO_INCREMENT)
$fecha = $_POST['fecha']; // Recibe la fecha enviada por el formulario
$hora_inicio = $_POST['hora_inicio']; // Recibe la hora de inicio del formulario
$hora_fin = $_POST['hora_fin']; // Recibe la hora de fin del formulario
$asignatura = $_POST['asignatura']; // Recibe la asignatura ingresada
$prioridad = $_POST['prioridad']; // Recibe la prioridad seleccionada
$descripcion = $_POST['descripcion']; // Recibe la descripción escrita

$sql = "INSERT INTO actividad VALUES ('$id','$fecha','$hora_inicio', '$hora_fin', '$asignatura', '$prioridad', '$descripcion')"; // Inserta la actividad completa en la tabla
$query = mysqli_query($con, $sql); // Ejecuta el INSERT en la base de datos

if($query){ // Si la consulta se ejecutó correctamente
    header("Location: Lectura_Actividad.php"); // Redirige a la lista de actividades
    exit; // Detiene la ejecución del script
};

// Cierra el código PHP
?> 
