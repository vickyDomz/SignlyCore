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
            $codNivel = $_GET['codNivel']; // recupero el codigo del alumno


            $sql = "SELECT * FROM Niveles WHERE codNivel=$codNivel";
            $results = mysqli_query($link, $sql);

            if (!$results) {
                die("Error en la consulta: " . mysqli_error($link));
            }

            $fila = mysqli_fetch_array($results);

            if (!$fila) {
                die("No se encontró ningún nivel con ese codigo ($codNivel).");
            }

            echo("<h1>Editando Nivel: ".$fila['nivel']."</h1>");
            echo("<form action='actualizarTodo.php' method='post'>
            <input type='hidden' name='codNivel' value='".$fila['codNivel']."'>
            <label>Nivel:</label>
            <input type='text' name='nivel' value='".$fila['nivel']."'><br>
            <label>Duracion:</label>
            <input type='text' name='duracion' value='".$fila['duracion']."'><br>
            <button type='submit' class='aceptar' name='editarNi'>Guardar cambios</button>
            </form>");
?>

    </body>
</html>