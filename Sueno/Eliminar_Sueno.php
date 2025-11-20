<?php
// Incluye el archivo donde está la función para conectarse a la base de datos
include('../Conexion_Tabla.php');

// Llama a la función connection() para establecer la conexión con la base de datos
$con = connection();

// Obtiene el ID enviado por URL mediante el método GET
// Este ID corresponde al registro que se desea eliminar
$id = $_GET['id'];

// Prepara la consulta SQL para eliminar el registro de la tabla "sueno"
// Elimina el registro cuyo campo "id" sea igual al valor recibido
$sql = "DELETE FROM sueno WHERE id='$id'";

// Ejecuta la consulta SQL en la base de datos
$query = mysqli_query($con, $sql);

// Verifica si la consulta se ejecutó correctamente
if ($query) {
    // Si todo salió bien, redirige al usuario nuevamente a la página de lectura
    Header("Location: Lectura_Sueno.php");
};

// Fin del archivo PHP
?>
