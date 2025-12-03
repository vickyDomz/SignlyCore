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
            $ci = $_GET['ci']; // recupero el CI del profesor


            $sql = "SELECT * FROM Profesores WHERE ci=$ci";
            $results = mysqli_query($link, $sql);

            if (!$results) {
                die("Error en la consulta: " . mysqli_error($link));
            }

            $fila = mysqli_fetch_array($results);

            if (!$fila) {
                die("No se encontró ningún profesor con ese CI ($ci).");
            }

            echo("<h1>Editando profesor: ".$fila['apellido']."</h1>");
            echo("<form action='actualizarTodo.php' method='post'>
            <input type='hidden' name='ci' value='".$fila['ci']."'>
            <label>Apellido:</label>
            <input type='text' name='apellido' value='".$fila['apellido']."'><br>
            <label>Dirección:</label>
            <input type='text' name='direccionP' value='".$fila['direccion']."'><br>
            <label>Teléfono:</label>
            <input type='text' name='telefonoP' value='".$fila['telefono']."'>
            <button type='submit' class='aceptar' name='editarProf'>Guardar cambios</button>
            </form>");
?>

    </body>
</html>