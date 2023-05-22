<?php
include("./config.php");


if (isset($_POST['tambah'])) {

  
    $nombre = $_POST['nombre'];
    $identificacion = $_POST['identificacion'];
    $genero = $_POST['genero'];
    $carrera_universitaria = $_POST['carrera_universitaria'];
    $nacionalidad = $_POST['nacionalidad'];



    $sql = "INSERT INTO usuarios(nombre, identificacion, genero, carrera_universitaria, nacionalidad)
    VALUES('$nombre', '$identificacion', '$genero', '$carrera_universitaria', '$nacionalidad')";
    $query = mysqli_query($db, $sql);

    if ($query)
        header('Location: ./index.php?status=success');
    else
        header('Location: ./index.php?status=error');
} else
    die("Acceso prohibido...");
