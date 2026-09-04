<?php

include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM mata_pelajaran WHERE id = ?";

$stmt = mysqli_prepare($db, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {

    header("Location: list-mapel.php");
    exit;

} else {

    die("Gagal menghapus data: " . mysqli_stmt_error($stmt));

}

?>