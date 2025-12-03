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
                    <td class="nev" style="border-right:solid brown 1px;"><a href="../listar/listarAlumnos.php">Listar</a></td>
                    <td class="nev"><a href="../InsertarDatos/insertarAlumnos.php">Agregar</a></td>
                </tr>
            </table>
            <hr>
        </div>
        <h1>Listar Alumnos</h1>
        <table>
            <?php
                include '../conexion.php';
                mysqli_select_db($link, "alemBD");

                $sql = "SELECT * FROM Alumnos";

                $results = mysqli_query($link, $sql);
                $nfilas = mysqli_num_rows($results);


                echo("<tr class='mierda'>
                    <td>Código</td>
                    <td>Nombre</td>
                    <td>Direccion</td>
                    <td>Telefono</td>
                    <td>Acciones</td>
                    </tr>");

                for($i=0;$i<$nfilas;$i++){
                    $fila = mysqli_fetch_array($results);
                    echo("<tr>
                    <td>".$fila['codAlumno']."</td>
                    <td>".$fila['nombre']."</td>
                    <td>".$fila['direccion']."</td>
                    <td>".$fila['telefono']."</td>
                    <td><a href='../editar/editarAlumnos.php?codAlumno=".$fila['codAlumno']."'>Editar</a><br>
                    <a href='../eliminar/eliminarAlumnos.php?codAlumno=".$fila['codAlumno']."'>Eliminar</a></td>
                    </tr>");

                }
            ?>
        </table>
    </body>
</html>