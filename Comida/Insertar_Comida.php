<?php 
// Abre el bloque de código PHP

include('../Conexion_Tabla.php');
// Incluye el archivo que contiene la función de conexión con la base de datos

$con = connection();
// Llama a la función "connection()" para establecer la conexión con la base de datos
// y guarda esa conexión dentro de la variable $con


$id = null;
// Inicializa la variable $id como null porque será autogenerado por la base de datos

$fecha = $_POST['fecha'];
// Obtiene el valor enviado desde el formulario en el campo "fecha" mediante método POST

$hora_inicio = $_POST['hora_inicio'];
// Obtiene la hora de inicio desde el formulario

$hora_fin = $_POST['hora_fin'];
// Obtiene la hora de fin desde el formulario

$tipo_comida = $_POST['tipo_comida'];
// Obtiene el tipo de comida seleccionado en el formulario

$kcal = $_POST['kcal'];
// Obtiene el valor de calorías ingresado por el usuario

$descripcion = $_POST['descripcion'];
// Obtiene la descripción escrita por el usuario


$sql = "INSERT INTO comida VALUES ('$id','$fecha','$hora_inicio', '$hora_fin', '$tipo_comida', '$kcal', '$descripcion')";
// Crea la sentencia SQL para insertar una nueva fila en la tabla "comida"
// El primer campo ($id) se envía como null para que MySQL genere el ID automáticamente

$query = mysqli_query($con, $sql);
// Ejecuta la consulta SQL usando la conexión creada anteriormente
// El resultado (verdadero o falso) se almacena en $query


if($query){
    // Valida si la consulta se ejecutó correctamente

    header("Location: Lectura_Comida.php");
    // Si la inserción fue exitosa, redirige al usuario a la página de lectura de comidas

    exit;
    // Finaliza el script después de redirigir para evitar ejecución adicional
};

?>
<!-- Cierra el bloque PHP -->
