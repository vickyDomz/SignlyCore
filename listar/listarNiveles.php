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
                    <td class="nev" style="border-right:solid brown 1px;"><a href="../listar/listarNiveles.php">Listar</a></td>
                    <td class="nev"><a href="../InsertarDatos/insertarNiveles.php">Agregar</a></td>
                </tr>
            </table>
            <hr>
        </div>

        <table>
            <?php
                include '../conexion.php';
                mysqli_select_db($link, "alemBD");

                $sql = "SELECT * FROM Niveles";

                $results = mysqli_query($link, $sql);
                $nfilas = mysqli_num_rows($results);

                echo("<h1>Lista de Niveles</h1>");

                echo("<tr class='mierda'>
                    <td>Codigo</td>
                    <td>Nivel</td>
                    <td>Duracion</td>
                    <td>Acciones</td>
                    </tr>");

                for($i=0;$i<$nfilas;$i++){
                    $fila = mysqli_fetch_array($results);
                    echo("<tr>
                    <td>".$fila['codNivel']."</td>
                    <td>".$fila['nivel']."</td>
                    <td>".$fila['duracion']."</td>
                    <td><a href='../editar/editarNiveles.php?codNivel=".$fila['codNivel']."'>Editar</a><br>
                    <a href='../eliminar/eliminarNiveles.php?codNivel=".$fila['codNivel']."'>Eliminar</a></td>
                    </tr>");

                }
            ?>
        </table>
    </body>
</html>