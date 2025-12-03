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
                    <td class="nev" style="border-right:solid brown 1px;"><a href="../listar/listarProfesores.php">Listar</a></td>
                    <td class="nev"><a href="../InsertarDatos/insertarProfesores.php">Agregar</a></td>
                </tr>
            </table>
            <hr>
        </div>

        <div>
        <table>
            <?php
                include '../conexion.php';
                mysqli_select_db($link, "alemBD");

                $sql = "SELECT * FROM Profesores";

                $results = mysqli_query($link, $sql);
                $nfilas = mysqli_num_rows($results);

                echo("<h1>Lista de Profesores</h1>");

                echo("<tr class='mierda'>
                    <td>CI</td>
                    <td>Apellido</td>
                    <td>Direccion</td>
                    <td>Telefono</td>
                    <td>Acciones</td>
                    </tr>");

                for($i=0;$i<$nfilas;$i++){
                    $fila = mysqli_fetch_array($results);
                    echo("<tr>
                    <td>".$fila['ci']."</td>
                    <td>".$fila['apellido']."</td>
                    <td>".$fila['direccion']."</td>
                    <td>".$fila['telefono']."</td>
                    <td><a href='../editar/editarProfesores.php?ci=".$fila['ci']."'>Editar</a><br>
                    <a href='../eliminar/eliminarProfesores.php?ci=".$fila['ci']."'>Eliminar</a></td>
                    </tr>");

                }
            ?>
        </table>
        </div>
    </body>
</html>