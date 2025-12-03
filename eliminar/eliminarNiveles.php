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
            $codNivel = $_GET['codNivel'];
            $sql = "SELECT * FROM Niveles WHERE codNivel=$codNivel";
            $results = mysqli_query($link, $sql);

            $linea = mysqli_fetch_array($results);

            echo("<form method='post'>Esta seguro que quiere borrar el nivel ".$linea['codNivel']." - ".$linea['nivel']."
            <br><input class='aceptar' type='submit' value='Si, estoy seguro/a' name='eliminarNi'>
            </form>");

            if (isset($_REQUEST['eliminarNi'])){
                $sql1 = "DELETE FROM Niveles WHERE codNivel=$codNivel";
                mysqli_query($link, $sql1) or die("Error al eliminar los datos");
                echo("Datos borrados correctamente");

                echo("<a href='../listar/listarNiveles.php'>Volver</a>");
            }
        ?>
    </body>
</html>