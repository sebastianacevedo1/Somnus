<?php
// Incluye el archivo donde está la función para conectar a la base de datos
include('../Conexion_Tabla.php');

// Ejecuta la función connection() y guarda la conexión en la variable $con
$con = connection();

//    OBTENER ID DE LA ACTIVIDAD
// Recibe el ID que viene por método GET desde la URL
$id = $_GET['id'];


//    CONSULTA PARA ELIMINAR DATO
// Crea la consulta SQL para eliminar la actividad con el ID recibido
$sql = "DELETE FROM actividad WHERE id='$id'";

// Ejecuta la consulta SQL en la base de datos
$query = mysqli_query($con, $sql);

//    REDIRECCIÓN DESPUÉS DE ELIMINAR
// Si la eliminación fue exitosa...
if ($query) {
    // Redirige al usuario nuevamente a la tabla de actividades
    Header("Location: Lectura_Actividad.php");
}

// Cierra el código PHP
?>