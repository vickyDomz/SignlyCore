<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            include 'base.html';
        ?>
        <div>
            <h2>Presiona para crear las Tablas: </h2>

            <form method="post">
                <input type="submit" class="boton" value="Crear Tabla Profesores" name="tabProfesores">
                <input type="submit" class="boton" value="Crear Tabla Niveles" name="tabNiveles">
                <input type="submit" class="boton" value="Crear Tabla Alumnos" name="tabAlumnos">
                <input type="submit" class="boton" value="Crear Tabla Inscripciones" name="tabInscripciones">
                <h4>OBS: La tabla 'Inscripciones' solo se puede crear si ya se crearon las tres anteriores</h4>
            </form>

            <?php
                include 'conexion.php';
                mysqli_select_db($link, 'alemBD') or die ("Error al seleccionar base de datos :(");
                if (isset($_REQUEST['tabProfesores'])){
                    $sql = "CREATE TABLE Profesores (ci VARCHAR(30) PRIMARY KEY, apellido VARCHAR(30), direccion VARCHAR(100), telefono VARCHAR(20))";
                    mysqli_query($link, $sql) or die("Error al crear tabla 'Profesores'");
                    echo("La tabla 'Profesores' fue creada con exito!");
                }
                if (isset($_REQUEST['tabNiveles'])){
                    $sql = "CREATE TABLE Niveles (codNivel INT PRIMARY KEY, nivel VARCHAR(30), duracion VARCHAR(30))";
                    mysqli_query($link, $sql) or die ("Error al crear tabla 'Niveles'");
                    echo("La tabla 'Niveles' fue creada con exito!");
                }
                if (isset($_REQUEST['tabAlumnos'])){
                    $sql = "CREATE TABLE Alumnos (codAlumno VARCHAR(30) PRIMARY KEY, nombre VARCHAR(30), direccion VARCHAR(100), telefono VARCHAR(20))";
                    mysqli_query($link, $sql) or die ("Error al crear tabla 'Alumnos'");
                    echo("La tabla 'Alumnos' fue creada con exito!"); 
                }
                if (isset($_REQUEST['tabInscripciones'])){
                    $sql = "CREATE TABLE Inscripciones (codInscripciones VARCHAR(30) PRIMARY KEY, codAlumno VARCHAR(30), codNivel INT, CIProfesor VARCHAR(30), FOREIGN KEY (codAlumno) REFERENCES Alumnos(codAlumno), FOREIGN KEY (codNivel) REFERENCES Niveles(codNivel), FOREIGN KEY (CIProfesor) REFERENCES Profesores(CI))";
                    mysqli_query($link, $sql) or die ("Error al crear la tabla 'Inscripciones'");
                    echo("La tabla 'Incripciones' fue creada con exito!");
                }
                mysqli_close($link);
            ?>

        </div>
    </body>
</html>