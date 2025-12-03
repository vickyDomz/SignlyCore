<?php
    include "../conexion.php";
    include "../base.html";
    include "sidebar.html";
    echo("<head>
    <link rel='stylesheet' href='../style.css'>
    </head>");
    mysqli_select_db($link, "alemBD");
    if (isset($_REQUEST['insertAl']) && isset($_REQUEST['codAlumno']) && isset($_REQUEST['nombre']) && isset($_REQUEST['direccionA']) && isset($_REQUEST['telefonoA'])){
        $codAlumno = $_REQUEST['codAlumno'];
        $nombre = $_REQUEST['nombre'];
        $direccion = $_REQUEST['direccionA'];
        $telefono = $_REQUEST['telefonoA'];

        $sql = "INSERT INTO Alumnos VALUES ('$codAlumno', '$nombre', '$direccion', '$telefono')";
        mysqli_query($link, $sql) or die ("Error al insertar datos :(");
        echo("Datos cargados correctamente.");
        mysqli_close($link);

        echo("<br><a href='../listar/listarAlumnos.php'>Volver</a>");
    }
    if (isset($_REQUEST['insertIn']) && isset($_REQUEST['codInscripciones']) && isset($_REQUEST['codAlumno']) && isset($_REQUEST['codNivel']) && isset($_REQUEST['CIProfesor'])){
        $codInscripciones = $_REQUEST['codInscripciones'];
        $codAlumno = $_REQUEST['codAlumno'];
        $codNivel = $_REQUEST['codNivel'];
        $CIProfesor = $_REQUEST['CIProfesor'];

        $sql = "INSERT INTO Inscripciones VALUES ('$codInscripciones', '$codAlumno', $codNivel, '$CIProfesor')";
        mysqli_query($link, $sql) or die ("Error al insertar datos.");
        echo("Datos cargados correctamente");
        mysqli_close($link);

        echo("<br><a href='../listar/listarInscripciones.php'>Volver</a>");
    }
    if (isset($_REQUEST['insertNiv']) && isset($_REQUEST['codNivel']) && isset($_REQUEST['nivel']) && isset($_REQUEST['duracion'])){
        $codNivel = $_REQUEST['codNivel'];
        $nivel = $_REQUEST['nivel'];
        $duracion = $_REQUEST['duracion'];

        $sql = "INSERT INTO Niveles VALUES ($codNivel, '$nivel', '$duracion')";
        mysqli_query($link, $sql) or die("error al cargar datos");
        echo("datos cargados correctamente");
        mysqli_close($link);

        echo("<br><a href='../listar/listarNiveles.php'>Volver</a>");
    }
    if (isset($_REQUEST['insertP']) && isset($_REQUEST['ci']) && isset($_REQUEST['apellido']) && isset($_REQUEST['direccionP']) && isset($_REQUEST['telefonoP'])){
        $ci = $_REQUEST['ci'];
        $apellido = $_REQUEST['apellido'];
        $direccion = $_REQUEST['direccionP'];
        $telefono = $_REQUEST['telefonoP'];

        $sql = "INSERT INTO Profesores VALUES ('$ci', '$apellido', '$direccion', '$telefono')";
        mysqli_query($link, $sql) or die("error al insertar los datos");  
        echo("Datos insertados correctamente");
        mysqli_close($link);

        echo("<br><a href='../listar/listarProfesores.php'>Volver</a>");
    }
?>