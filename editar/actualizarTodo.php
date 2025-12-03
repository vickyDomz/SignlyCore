<?php
    include "../conexion.php";
    include "../base.html";
    include "sidebar.html";
    echo("<head>
    <link rel='stylesheet' href='../style.css'>
    </head>");

    if (isset($_REQUEST['editarProf']) && isset($_REQUEST['ci']) && isset($_REQUEST['apellido']) && isset($_REQUEST['direccionP']) && isset($_REQUEST['telefonoP'])){
        include '../conexion.php';
        mysqli_select_db($link, "alemBD");

        $ci = $_REQUEST['ci'];
        $apellido = $_REQUEST['apellido'];
        $direccion = $_REQUEST['direccionP'];
        $telefono = $_REQUEST['telefonoP'];

        $sql = "UPDATE Profesores SET apellido='$apellido', direccion='$direccion', telefono='$telefono' WHERE ci='$ci'";
        mysqli_query($link, $sql) or die ("Error al aplicar los cambios");
        echo("Los cambios han sido aplicados correctamente!");
        echo("<a href='../listar/listarProfesores.php'>Volver</a>");
    }
    
    if (isset($_REQUEST['editarAl']) && isset($_REQUEST['codAlumno']) && isset($_REQUEST['nombre']) && isset($_REQUEST['direccionA']) && isset($_REQUEST['telefonoA'])){
        include '../conexion.php';
        mysqli_select_db($link, "alemBD");

        $codAlumno = $_REQUEST['codAlumno'];
        $nombre = $_REQUEST['nombre'];
        $direccion = $_REQUEST['direccionA'];
        $telefono = $_REQUEST['telefonoA'];

        $sql = "UPDATE Alumnos SET nombre='$nombre', direccion='$direccion', telefono='$telefono' WHERE codAlumno='$codAlumno'";
        mysqli_query($link, $sql) or die ("Error al aplicar los cambios");
        echo("Los cambios han sido aplicados correctamente!");
        echo("<a href='../listar/listarAlumnos.php'>Volver</a>");
    }

    if (isset($_REQUEST['editarIn']) && isset($_REQUEST['codInscripciones']) && isset($_REQUEST['codAlumno']) && isset($_REQUEST['codNivel']) && isset($_REQUEST['CIProfesor'])){
        include '../conexion.php';
        mysqli_select_db($link, "alemBD");

        $codInscripciones = $_REQUEST['codInscripciones'];
        $codAlumno = $_REQUEST['codAlumno'];
        $codNivel = $_REQUEST['codNivel'];
        $CIProfesor = $_REQUEST['CIProfesor'];

        $sql = "UPDATE Inscripciones SET codAlumno='$codAlumno', codNivel='$codNivel', CIProfesor='$CIProfesor' WHERE codInscripciones='$codInscripciones'";
        mysqli_query($link, $sql) or die ("Error al aplicar los cambios");
        echo("Los cambios han sido aplicados correctamente!");
        echo("<a href='../listar/listarInscripciones.php'>Volver</a>");
    }

    if (isset($_REQUEST['editarNi']) && isset($_REQUEST['codNivel']) && isset($_REQUEST['nivel']) && isset($_REQUEST['duracion'])){
        include '../conexion.php';
        mysqli_select_db($link, "alemBD");

        $codNivel = $_REQUEST['codNivel'];
        $nivel = $_REQUEST['nivel'];
        $duracion = $_REQUEST['duracion'];

        $sql = "UPDATE Niveles SET codNivel='$codNivel', nivel='$nivel', duracion='$duracion' WHERE codNivel='$codNivel'";
        mysqli_query($link, $sql) or die ("Error al aplicar los cambios");
        echo("Los cambios han sido aplicados correctamente!");
        echo("<a href='../listar/listarNiveles.php'>Volver</a>");
    }


?>