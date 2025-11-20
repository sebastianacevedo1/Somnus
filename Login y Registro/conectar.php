<?php
$host = "localhost";              // Nombre del servidor donde está la base de datos (localhost = tu propio PC)
$user = "root";                   // Nombre de usuario para acceder a MySQL
$pass = "";                       // Contraseña del usuario MySQL (vacía por defecto en XAMPP)
$db = "somnus";                   // Nombre de la base de datos que se va a utilizar

$conexion = mysqli_connect($host, $user, $pass, $db);  
// Crea la conexión a MySQL usando los datos anteriores
// Retorna un objeto de conexión o false si ocurre un error

if (!$conexion) {                 
    // Verifica si la conexión falló (si $conexion es false)
    die("Error de conexión: " . mysqli_connect_error());  
    // Finaliza el script y muestra el mensaje de error de MySQL
}
?>