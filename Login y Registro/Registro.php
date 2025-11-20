<!DOCTYPE html>
<!-- Indica el tipo de documento HTML5 -->

<html lang="es">
<!-- // Lenguaje del documento -->

<head>
    <meta charset="UTF-8">
    <!-- Define la codificación de caracteres en UTF-8 -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ajusta el contenido para que sea responsivo en dispositivos móviles -->

    <title>Somnus - Inicio</title>
    <!-- Título de la pestaña del navegador -->

    <link rel="stylesheet" href="styles.css">
    <!-- Enlace al archivo CSS externo con los estilos de la página -->
</head>

<body>
    <!-- Inicia el cuerpo de la página -->

    <header>
        <!-- Encabezado superior del sitio -->

        <div class="container">
            <!-- Contenedor para centrar y limitar el contenido -->

            <div style="display: flex; align-items: center;">
                <!-- Aplica un contenedor flexible para alinear elementos horizontalmente -->
                <img src="../Logo_Somnus.png" alt="Logo">
                <!-- Muestra el logo del sistema -->
            </div>
        </div>
    </header>

    <div class="container">
        <!-- Contenedor principal del contenido central -->
        
        <br>
        <br>
        <br>

        <div class="form-box">
            <!-- Caja que contiene los formularios y pestañas -->

            <h2>¡Bienvenido!</h2>
            <!-- Título principal de bienvenida -->

            <div class="tabs">
                <!-- Contenedor de las pestañas ("Inscribirse" y "Acceder") -->

                <button class="tab active" onclick="showForm('registro')">
                    <!-- Botón de pestaña activa inicialmente -->
                    Inscribirse
                </button>

                <button class="tab" onclick="showForm('login')">
                    <!-- Botón de pestaña para mostrar el formulario de login -->
                    Acceder
                </button>
            </div>

            <!-- FORMULARIO DE REGISTRO -->
            <form id="registro" class="form active" action="insertar_usuario.php" method="POST">
                <!-- Formulario visible inicialmente (clase active) que envía datos por POST -->

                <input type="email" name="correo" placeholder="Correo" required
                title="Ingrese una dirección de correo válida (ejemplo@dominio.com)">
                <!-- Campo para correo electrónico -->

                <input type="text" name="usuario" placeholder="Nombre de Usuario" required pattern="[a-zA-Z ñÑ]{1,15}"
                title="Solo se permiten letras y un máximo de 15 caracteres">
                <!-- Campo para nombre de usuario -->

                <input type="password" name="contrasena" placeholder="Contraseña" required
                title="Ingrese una contaseña">
                <!-- Campo para ingresar contraseña -->

                <input type="password" name="confirmar" placeholder="Confirmar Contraseña" required
                title="Ingrese su contaseña de nuevo">
                <!-- Campo para confirmar la contraseña -->

                <button type="submit" class="btn">Inscribirse</button>
                <!-- Botón de envío -->
            </form>

            <!-- FORMULARIO DE LOGIN -->
            <form id="login" class="form" action="verificar_usuario.php" method="POST">
                <!-- Formulario oculto inicialmente (sin clase active) -->

                <input type="email" name="correo" placeholder="Correo" required
                title="Ingrese una dirección de correo válida (ejemplo@dominio.com)">
                <!-- Campo para ingresar correo -->

                <input type="password" name="contrasena" placeholder="Contraseña" required
                title="Ingrese su contaseña">
                <!-- Campo para ingresar contraseña -->

                <button type="submit" class="btn">Acceder</button>
                <!-- Botón de inicio de sesión -->
            </form>

        </div>
    </div>

<script>
/* 
 Función que cambia entre los formularios de registro y login
 según la pestaña seleccionada.
*/
function showForm(form) {

    document.getElementById("registro").classList.remove("active");
    // Quita la clase "active" del formulario de registro

    document.getElementById("login").classList.remove("active");
    // Quita la clase "active" del formulario de login

    document.querySelectorAll(".tab").forEach(tab => tab.classList.remove("active"));
    // Quita la clase "active" de todas las pestañas

    if (form === 'registro') {
        // Si se selecciona el formulario de registro...

        document.getElementById("registro").classList.add("active");
        // Lo activa (se muestra)

        document.querySelectorAll(".tab")[0].classList.add("active");
        // Activa la pestaña "Inscribirse"
    } else {
        // Si se selecciona el formulario de login...

        document.getElementById("login").classList.add("active");
        // Lo activa (se muestra)

        document.querySelectorAll(".tab")[1].classList.add("active");
        // Activa la pestaña "Acceder"
    }
}
</script>

</body>
</html>