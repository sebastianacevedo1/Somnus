<?php
// Incluye el archivo donde está la función de conexión a la base de datos
include('../Conexion_Tabla.php');

// Llama a la función 'connection()' para establecer la conexión y la guarda en $con
$con = connection();

// Obtiene el ID enviado por URL mediante el método GET
$id = $_GET['id'];

// Prepara la consulta SQL para seleccionar todos los datos de la tabla 'comida' donde el ID coincida
$sql = "SELECT * FROM comida WHERE id='$id'";

// Ejecuta la consulta SQL usando la conexión ya abierta
$query = mysqli_query($con, $sql);

// Convierte el resultado de la consulta en un arreglo asociativo para poder acceder a los datos
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo_Formularios.css">
    <title>Editar Comida</title>
</head>

<body>

<!-- Fondo oscuro del modal -->
<div class="modal-background">

    <!-- Caja principal del modal -->
    <div class="modal-content">
       

        <!-- Botón para cerrar -->
        <span class="close-btn" onclick="window.history.back()">×</span>

        <header>
            <div class="container">
                <div style="display: flex; align-items: center;">
                
                </div>
            </div>
        </header>

        <main>
            <section>

                <h2>Editar Comida</h2>

                <form action="Editar_Comida.php" method="POST">

                    <!-- Campo oculto ID -->
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">

                    <div>
                        <label for="fecha">Fecha:</label><br>
                        <input type="date" name="fecha" value="<?= $row['fecha'] ?>" required>
                    </div>

                    <div>
                        <label for="hora_inicio">Hora inicio:</label><br>
                        <input type="time" name="hora_inicio" value="<?= $row['hora_inicio'] ?>" required>
                    </div>

                    <div>
                        <label for="hora_fin">Hora fin:</label><br>
                        <input type="time" name="hora_fin" value="<?= $row['hora_fin'] ?>" required>
                    </div>

                    <div>
                        <label for="tipo_comida">Tipo de comida</label>
                        <select name="tipo_comida" required>
                            <option value="" disabled>Seleccione</option>
                            <option value="desayuno" <?= $row['tipo_comida'] == 'desayuno' ? 'selected' : '' ?>>Desayuno</option>
                            <option value="almuerzo" <?= $row['tipo_comida'] == 'almuerzo' ? 'selected' : '' ?>>Almuerzo</option>
                            <option value="cena" <?= $row['tipo_comida'] == 'cena' ? 'selected' : '' ?>>Cena</option>
                            <option value="snack" <?= $row['tipo_comida'] == 'snack' ? 'selected' : '' ?>>Snack</option>
                        </select><br>
                    </div>

                    <div>
                        <label for="kcal">Kcal</label>
                        <input type="text" name="kcal" value="<?= $row['kcal'] ?>" required pattern="{1,254}">
                    </div>

                    <div>
                        <label for="descripcion">Descripción</label>
                        <input type="text" name="descripcion" value="<?= $row['descripcion'] ?>" required pattern="{1,254}">
                    </div>

                    <button type="submit">Guardar Cambios</button>

                </form>

            </section>
        </main>

    </div> <!-- Fin del modal-content -->

</div> <!-- Fin del modal-background -->

</body>
</html>
