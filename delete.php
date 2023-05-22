<?php
include("./config.php");

if (isset($_POST['deletedata'])) {
  
    $id = $_POST['delete_id'];

    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ./index.php?hapus=success');
    } else
        die('Location: ./index.php?hapus=error');
} else
    die("Acceso prohibido...");
