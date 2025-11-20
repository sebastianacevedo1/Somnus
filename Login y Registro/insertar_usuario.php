<?php
require "conectar.php";  
// Importa el archivo donde se encuentra la conexión ($conexion)
// Si el archivo no existe o tiene errores, detiene la ejecución

$correo = $_POST['correo'];        
// Recibe el valor del campo "correo" enviado desde el formulario mediante POST

$usuario = $_POST['usuario'];      
// Recibe el nombre de usuario ingresado

$contrasena = $_POST['contrasena'];  
// Recibe la contraseña ingresada

$confirmar = $_POST['confirmar'];  
// Recibe la confirmación de la contraseña para comparar

if ($contrasena !== $confirmar) {  
    // Verifica si la contraseña y su confirmación NO son iguales
    die("<script>alert('Las contraseñas no coinciden'); history.back();</script>");
    // Si no coinciden: muestra alerta y regresa a la página anterior
}

$verificar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
// Ejecuta una consulta SQL para buscar si el correo ya existe en la tabla usuarios

if (mysqli_num_rows($verificar) > 0) { 
    // Si la consulta devuelve uno o más registros, significa que el correo ya está registrado
    die("<script>alert('El correo ya está registrado'); history.back();</script>");
    // Muestra alerta y regresa al formulario
}

$pass_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);
// Encripta la contraseña usando el algoritmo por defecto (actualmente bcrypt)
// Esto protege la contraseña antes de guardarla en la base de datos

$sql = "INSERT INTO usuarios (correo, usuario, contrasena) 
        VALUES ('$correo', '$usuario', '$pass_encriptada')";
// Inserta los datos del usuario en la base de datos, usando la contraseña encriptada

if (mysqli_query($conexion, $sql)) { 
    // Ejecuta la consulta SQL y verifica si se insertó correctamente
    echo "<script>alert('Registro exitoso'); window.location='registro.php';</script>";
    // Si todo fue bien, muestra un mensaje y redirige al login o página principal
} else {
    echo "Error: " . mysqli_error($conexion);
    // Si ocurre un error en la consulta, muestra el error de MySQL
}
?>

