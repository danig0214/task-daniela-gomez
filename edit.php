<?php
include("./config.php");


if (isset($_POST['edit_data'])) {


    $id = $_POST['edit_id'];
    $nombre = $_POST['edit_nombre'];
    $identificacion = $_POST['edit_identificacion'];
    $genero = $_POST['edit_genero'];
    $carrera_universitaria = $_POST['edit_carrera_universitaria'];
    $nacionalidad = $_POST['edit_nacionalidad'];


    $sql = "UPDATE usuarios SET nombre='$nombre', identificacion='$identificacion', genero='$genero', carrera_universitaria='$carrera_universitaria', nacionalidad='$nacionalidad' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);


    if ($query)
        header('Location: ./index.php?update=success');
    else
        header('Location: ./index.php?update=error');
} else
    die("Acceso prohibido...");
