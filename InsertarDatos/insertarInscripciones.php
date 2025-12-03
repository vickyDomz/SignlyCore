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
                    <td class="nev" style="border-right:solid brown 1px;"><a href="../listar/listarInscripciones.php">Listar</a></td>
                    <td class="nev"><a href="../InsertarDatos/insertarInscripciones.php">Agregar</a></td>
                </tr>
            </table>
            <hr>
        </div>

        <div>
            <h1>Insertar Inscripciones: </h1>

            <form method="post" action="insertarTodo.php">
                <h3>Codigo: </h3>
                <input type="text" maxlength="30" name="codInscripciones">

                <h3>Alumno: </h3>
                <input type="text" maxlength="30" name="codAlumno">

                <h3>Nivel: </h3>
                <input type="numbers" name="codNivel">

                <h3>CIProfesor: </h3>
                <input type="text" maxlength="30" name="CIProfesor"><br>

                <input type="submit" class="aceptar" value="Agregar a la base de datos" name="insertIn">

            </form>

        </div>

    </body>
</html>