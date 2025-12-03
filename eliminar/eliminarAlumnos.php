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
            include "../base.html";
            include "sidebar.html";
            include "../conexion.php";

            mysqli_select_db($link, "alemBD");
            $codAlumno = $_GET['codAlumno'];
            $sql = "SELECT * FROM Alumnos WHERE codAlumno='$codAlumno'";
            $results = mysqli_query($link, $sql);

            $linea = mysqli_fetch_array($results);

            echo("<form method='post'>Esta seguro que quiere borrar al Alumno ".$linea['codAlumno']." - ".$linea['nombre']."
            <br><input class='aceptar' type='submit' value='Si, estoy seguro/a' name='eliminarAl'>
            </form>");

            if (isset($_REQUEST['eliminarAl'])){
                $sql1 = "DELETE FROM Alumnos WHERE codAlumno=$codAlumno";
                mysqli_query($link, $sql1) or die("Error al eliminar los datos");
                echo("Datos borrados correctamente");

                echo("<a href='../listar/listarAlumnos.php'>Volver</a>");
            }
        ?>
    </body>
</html>