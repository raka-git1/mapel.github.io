<?php

include("config.php");

$nama_pelajaran = $_POST['nama_pelajaran'];
$kode_pelajaran = $_POST['kode_pelajaran'];
$guru = $_POST['guru'];
$kelas = $_POST['kelas'];

$sql = "INSERT INTO mata_pelajaran
        (nama_pelajaran, kode_pelajaran, guru, kelas)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($db, $sql);

if (!$stmt) {
    die("Query error: " . mysqli_error($db));
}

mysqli_stmt_bind_param(
    $stmt,
    "ssss",
    $nama_pelajaran,
    $kode_pelajaran,
    $guru,
    $kelas
);

if (mysqli_stmt_execute($stmt)) {
    header("Location: list-mapel.php");
    exit;
}

die("Gagal menyimpan data: " . mysqli_stmt_error($stmt));

?>