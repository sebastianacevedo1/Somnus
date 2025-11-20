<?php
// Incluye el archivo donde está la función de conexión a la base de datos
include('../Conexion_Tabla.php');

// Llama a la función connection() para establecer la conexión y la guarda en $con
$con = connection();

// Obtiene el valor del ID enviado desde el formulario mediante POST
$id = $_POST['id'];

// Obtiene la fecha enviada desde el formulario
$fecha = $_POST['fecha'];

// Obtiene la hora de inicio enviada desde el formulario
$hora_inicio = $_POST['hora_inicio'];

// Obtiene la hora de fin enviada desde el formulario
$hora_fin = $_POST['hora_fin'];

// Obtiene el tipo de comida enviado desde el formulario
$tipo_comida = $_POST['tipo_comida'];

// Obtiene las calorías enviadas desde el formulario
$kcal = $_POST['kcal'];

// Obtiene la descripción enviada desde el formulario
$descripcion = $_POST['descripcion'];

// Prepara la consulta SQL para actualizar los datos de la comida con el ID correspondiente
$sql = "UPDATE comida SET fecha='$fecha', hora_inicio='$hora_inicio', hora_fin='$hora_fin', tipo_comida='$tipo_comida', descripcion='$descripcion' WHERE id='$id'";

// Ejecuta la consulta SQL usando la conexión establecida
$query = mysqli_query($con, $sql);

// Verifica si la consulta se ejecutó correctamente
if ($query) {
    // Si todo salió bien, redirige al usuario a la página de lectura de registros
    Header("Location: Lectura_Comida.php");
};

// Fin del script PHP
?>


