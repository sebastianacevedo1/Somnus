<?php
// Inicia o reanuda una sesión en el servidor
session_start();

// Incluye el archivo que permite conectar con la base de datos
require "conectar.php";

// Recibe el correo enviado desde el formulario mediante POST
$correo = $_POST['correo'];

// Recibe la contraseña enviada desde el formulario
$contrasena = $_POST['contrasena'];

// Consulta SQL para buscar un usuario cuyo correo coincida con el ingresado
$sql = "SELECT * FROM usuarios WHERE correo='$correo'";

// Ejecuta la consulta en la base de datos
$resultado = mysqli_query($conexion, $sql);

// Verifica si la consulta retornó exactamente 1 registro
if (mysqli_num_rows($resultado) === 1) {

    // Obtiene los datos del usuario encontrado en forma de arreglo asociativo
    $usuario = mysqli_fetch_assoc($resultado);

    // Verifica si la contraseña ingresada coincide con la encriptada en la BD
    if (password_verify($contrasena, $usuario['contrasena'])) {

        // Guarda en la sesión el nombre del usuario
        $_SESSION['usuario'] = $usuario['usuario'];

        // Guarda en la sesión el correo del usuario
        $_SESSION['correo'] = $usuario['correo'];
        
        // Muestra un mensaje de éxito y redirige al lectura todo
        echo "<script>alert('Inicio de sesión exitoso'); window.location='../principal/lectura_todo.php';</script>";

    } else {
        // Si la contraseña no coincide, muestra aviso y regresa a la página anterior
        echo "<script>alert('Contraseña incorrecta'); history.back();</script>";
    }

} else {
    // Si no existe un usuario con ese correo, muestra aviso y regresa atrás
    echo "<script>alert('El usuario no existe'); history.back();</script>";
}
?>

