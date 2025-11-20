<?php

// Se define una función llamada connection() que será usada para conectar a la base de datos
function connection(){

    // Nombre del servidor donde está alojada la base de datos (localhost significa tu propio PC)
    $host = "localhost";

    // Nombre de usuario para ingresar a MySQL (por defecto en XAMPP es "root")
    $user = "root";

    // Contraseña del usuario de MySQL (por defecto en XAMPP está vacía)
    $pass = "";

    // Nombre de la base de datos a la que se desea conectar
    $bd = "somnus";

    // Crea la conexión con MySQL usando los datos anteriores (host, usuario y contraseña)
    $connect = mysqli_connect($host, $user, $pass);

    // Selecciona la base de datos específica donde trabajará la conexión
    mysqli_select_db($connect, $bd);

    // Retorna la conexión para que pueda ser usada desde otros archivos PHP
    return $connect;
}

// Fin del archivo PHP
?>