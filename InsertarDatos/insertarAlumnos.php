<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Document</title>
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
        <div>
            <h1>Insertar Alumnos: </h1>

            <form method="post" action="insertarTodo.php">
                <h3>Codigo: </h3>
                <input type="text" maxlength="30" name="codAlumno">

                <h3>Nombre: </h3>
                <input type="text" maxlength="30" name="nombre">

                <h3>Direccion: </h3>
                <input type="text" maxlength="100" name="direccionA">

                <h3>Telefono: </h3>
                <input type="text" pattern="\d*" maxlength="20" name="telefonoA"><br>

                <input type="submit" class="aceptar" value="Agregar a la base de datos" name="insertAl">

            </form>

        </div>

    </body>
</html>