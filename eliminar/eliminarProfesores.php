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
            include "../conexion.php";
            include "sidebar.html";

            mysqli_select_db($link, "alemBD");
            $ci = $_GET['ci'];
            $sql = "SELECT * FROM Profesores WHERE ci='$ci'";
            $results = mysqli_query($link, $sql);

            $linea = mysqli_fetch_array($results);

            echo("<form method='post'>Esta seguro que quiere borrar al profesor ".$linea['ci']." - ".$linea['apellido']."
            <br><input class='aceptar' type='submit' value='Si, estoy seguro/a' name='eliminarP'>
            </form>");

            if (isset($_REQUEST['eliminarP'])){
                $sql1 = "DELETE FROM Profesores WHERE ci=$ci";
                mysqli_query($link, $sql1) or die("Error al eliminar los datos");
                echo("Datos borrados correctamente");

                echo("<a href='../listar/listarNiveles.php'>Volver</a>");
            }
        ?>
    </body>
</html>