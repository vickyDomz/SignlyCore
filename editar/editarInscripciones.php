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
            $codInscripciones = $_GET['codInscripciones']; // recupero el codigo del alumno


            $sql = "SELECT * FROM Inscripciones WHERE codInscripciones=$codInscripciones";
            $results = mysqli_query($link, $sql);

            if (!$results) {
                die("Error en la consulta: " . mysqli_error($link));
            }

            $fila = mysqli_fetch_array($results);

            if (!$fila) {
                die("No se encontró ningúna Inscripcion con ese codigo ($codInscripciones).");
            }

            echo("<h1>Editando Inscripcion: ".$fila['codInscripciones']."</h1>");
            echo("<form action='actualizarTodo.php' method='post'>
            <input type='hidden' name='codInscripciones' value='".$fila['codInscripciones']."'>
            <label>Codigo Alumno:</label>
            <input type='text' name='alumno' value='".$fila['codAlumno']."'><br>
            <label>Codigo Nivel:</label>
            <input type='text' name='nivel' value='".$fila['codNivel']."'><br>
            <label>CI Profesor:</label>
            <input type='text' name='CIProfesor' value='".$fila['CIProfesor']."'>
            <button type='submit' class='aceptar' name='editarIn'>Guardar cambios</button>
            </form>");
?>

    </body>
</html>