<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        
        <?php
            include '../base.html';
            include '../conexion.php';
            include "sidebar.html";

            mysqli_select_db($link, "alemBD");
            $codAlumno = $_GET['codAlumno']; // recupero el codigo del alumno


            $sql = "SELECT * FROM Alumnos WHERE codAlumno=$codAlumno";
            $results = mysqli_query($link, $sql);

            if (!$results) {
                die("Error en la consulta: " . mysqli_error($link));
            }

            $fila = mysqli_fetch_array($results);

            if (!$fila) {
                die("No se encontró ningún Alumno con ese codigo ($codAlumno).");
            }

            echo("<h1>Editando Alumno: ".$fila['nombre']."</h1>");
            echo("<form action='actualizarTodo.php' method='post'>
            <input type='hidden' name='codAlumno' value='".$fila['codAlumno']."'>
            <label>Nombre:</label>
            <input type='text' name='nombre' value='".$fila['nombre']."'><br>
            <label>Dirección:</label>
            <input type='text' name='direccionA' value='".$fila['direccion']."'><br>
            <label>Teléfono:</label>
            <input type='text' name='telefonoA' value='".$fila['telefono']."'>
            <button type='submit' class='aceptar' name='editarAl'>Guardar cambios</button>
            </form>");
?>

    </body>
</html>