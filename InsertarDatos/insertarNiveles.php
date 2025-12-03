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
                    <td class="nev" style="border-right:solid brown 1px;"><a href="../listar/listarNiveles.php">Listar</a></td>
                    <td class="nev"><a href="../InsertarDatos/insertarNiveles.php">Agregar</a></td>
                </tr>
            </table>
            <hr>
        </div>

        <div>
            <h1>Insertar Niveles: </h1>

            <form method="post" action="insertarTodo.php">
                <h3>Codigo Nivel: : </h3>
                <input type="numbers" name="codNivel">

                <h3>Nivel: </h3>
                <input type="text" maxlength="30" name="nivel">

                <h3>Duracion: </h3>
                <input type="text" maxlength="30" name="duracion">

                <input type="submit" class="aceptar" value="Agregar a la base de datos" name="insertNiv">

            </form>

        </div>

    </body>
</html>