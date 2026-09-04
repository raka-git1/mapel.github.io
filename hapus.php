<?php

include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM calon_siswa WHERE id = ?";
$stmt = mysqli_prepare($db, $sql);

if (!$stmt) {
    die("Query error: " . mysqli_error($db));
}

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    header("Location: list-siswa.php");
    exit;
}

die("Gagal menghapus data: " . mysqli_stmt_error($stmt));

?>