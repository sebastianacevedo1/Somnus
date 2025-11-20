<?php 
include('../Conexion_Tabla.php'); // Incluye el archivo que contiene la función de conexión a la base de datos

$con = connection(); // Llama a la función connection() para conectar a la base de datos y guarda la conexión en $con

$id = null; // Define la variable $id como null, para que la base de datos genere el ID automáticamente
$fecha = $_POST['fecha']; // Recibe la fecha enviada desde el formulario mediante el método POST
$hora_inicio = $_POST['hora_inicio']; // Recibe la hora de inicio enviada por el formulario
$hora_fin = $_POST['hora_fin']; // Recibe la hora de fin enviada por el formulario
$calidad = $_POST['calidad']; // Recibe la calidad del sueño seleccionada en el formulario
$descripcion = $_POST['descripcion']; // Recibe la descripción ingresada en el formulario

// Crea la sentencia SQL para insertar un registro en la tabla sueno
$sql = "INSERT INTO sueno VALUES ('$id','$fecha','$hora_inicio', '$hora_fin', '$calidad','$descripcion')";

// Ejecuta la consulta SQL en la base de datos
$query = mysqli_query($con, $sql);

// Verifica si la consulta se ejecutó correctamente
if($query){
    header("Location: Lectura_Sueno.php"); // Si funciona, redirige al usuario a la tabla de lectura
    exit; // Finaliza el script después de la redirección
};

?>