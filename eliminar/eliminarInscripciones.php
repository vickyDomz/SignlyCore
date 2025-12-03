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
            $codInscripciones = $_GET['codInscripciones'];
            $sql = "SELECT * FROM Inscripciones WHERE codInscripciones='$codInscripciones'";
            $results = mysqli_query($link, $sql);

            $linea = mysqli_fetch_array($results);

            echo("<form method='post'>Esta seguro que quiere borrar la Inscripcion ".$linea['codInscripciones']."
            <br><input class='aceptar' type='submit' value='Si, estoy seguro/a' name='eliminarIn'>
            </form>");

            if (isset($_REQUEST['eliminarIn'])){
                $sql1 = "DELETE FROM Inscripciones WHERE codInscripciones=$codInscripciones";
                mysqli_query($link, $sql1) or die("Error al eliminar los datos");
                echo("Datos borrados correctamente");

                echo("<a href='../listar/listarInscripciones.php'>Volver</a>");
            }
        ?>
    </body>
</html>