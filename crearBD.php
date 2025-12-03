<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/logo.png">
        <title>Crear BD</title>
    </head>
    <body>
            <?php
                include 'base.html';
            ?>
        <div>
            <h2>Crear Base de datos AlemBD</h2>
            <form method="post">
                <input value="Crear Base de datos" type="submit" name="crearBD" class="boton">
            </form>
            <?php
                include 'conexion.php';
                if (isset($_REQUEST['crearBD'])){
                    $sql = "CREATE DATABASE alemBD";
                    mysqli_query($link, $sql) or die ("Error al crear base de datos");
                    echo("Base de datos creada exitosamente!");
                    mysqli_close($link);
                }
            ?>
        </div>
    </body>
</html>