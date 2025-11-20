<?php
// Incluye el archivo donde está la función de conexión a la base de datos
include('../Conexion_Tabla.php');

// Llama a la función connection() para conectar con la BD
$con = connection();

// Recibe el ID del registro que se va a actualizar (enviado por POST desde el formulario)
$id = $_POST['id'];

// Recibe la fecha actualizada ingresada en el formulario
$fecha = $_POST['fecha'];

// Recibe la hora de inicio actualizada
$hora_inicio = $_POST['hora_inicio'];

// Recibe la hora de fin actualizada
$hora_fin = $_POST['hora_fin'];

// Recibe la calidad seleccionada en el formulario
$calidad=$_POST['calidad'];

// Recibe la descripción modificada
$descripcion = $_POST['descripcion'];

// Consulta SQL para actualizar el registro en la tabla "sueno"
// Se actualizan todos los campos donde el id coincida
$sql = "UPDATE sueno 
        SET fecha='$fecha', 
            hora_inicio='$hora_inicio', 
            hora_fin='$hora_fin', 
            calidad='$calidad', 
            descripcion='$descripcion' 
        WHERE id='$id'";

// Ejecuta la consulta en la base de datos
$query = mysqli_query($con, $sql);

// Si la actualización fue exitosa, redirige a la página de lectura
if ($query) {
    Header("Location: Lectura_Sueno.php");
};

// Fin del archivo PHP
?>

