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
            include 'sidebar.html';
        ?>
        <br>
        <div class="navegador">
            <table class="nav">
                <tr>
                    <td class="nev" style="border-right:solid brown 1px;"><a href="../listar/listarInscripciones.php">Listar</a></td>
                    <td class="nev"><a href="../InsertarDatos/insertarInscripciones.php">Agregar</a></td>
                </tr>
            </table>
            <hr>
        </div>
        <table>
            <?php
                include '../conexion.php';
                mysqli_select_db($link, "alemBD");

                $sql = "SELECT * FROM Inscripciones";

                $results = mysqli_query($link, $sql);
                $nfilas = mysqli_num_rows($results);

                echo("<h1>Lista de Inscripciones</h1>");

                echo("<tr class='mierda'>
                    <td>Codigo Inscripiciones</td>
                    <td>Codigo Alumno</td>
                    <td>Codigo Nivel</td>
                    <td>CI Profesor</td>
                    <td>Acciones</td>
                    </tr>");

                for($i=0;$i<$nfilas;$i++){
                    $fila = mysqli_fetch_array($results);
                    echo("<tr>
                    <td>".$fila['codInscripciones']."</td>
                    <td>".$fila['codAlumno']."</td>
                    <td>".$fila['codNivel']."</td>
                    <td>".$fila['CIProfesor']."</td>
                    <td><a href='../editar/editarInscripciones.php?codInscripciones=".$fila['codInscripciones']."'>Editar</a><br>
                    <a href='../eliminar/eliminarInscripciones.php?codInscripciones=".$fila['codInscripciones']."'>Eliminar</a></td>
                    </tr>");

                }
            ?>
        </table>
    </body>
</html>