<?php
// Incluye el archivo donde está la función para conectar a la base de datos
include('../Conexion_Tabla.php');

// Llama a la función connection() y guarda la conexión en la variable $con
$con = connection();

// Obtiene el ID enviado desde el enlace mediante el método GET
$id = $_GET['id'];

// Crea la consulta SQL para eliminar el registro de la tabla 'comida' cuyo ID coincida
$sql = "DELETE FROM comida WHERE id='$id'";

// Ejecuta la consulta SQL utilizando la conexión establecida
$query = mysqli_query($con, $sql);

// Verifica si la consulta se ejecutó correctamente
if ($query) {
    // Si todo salió bien, redirige a la página que muestra la lista de comidas
    Header("Location: Lectura_Comida.php");
};

// Fin del script
?>
