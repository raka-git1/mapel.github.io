<?php

include("config.php");

$id = $_POST['id'];
$nama_pelajaran = $_POST['nama_pelajaran'];
$kode_pelajaran = $_POST['kode_pelajaran'];
$guru = $_POST['guru'];
$kelas = $_POST['kelas'];

$sql = "UPDATE mata_pelajaran
        SET nama_pelajaran = ?,
            kode_pelajaran = ?,
            guru = ?,
            kelas = ?
        WHERE id = ?";

$stmt = mysqli_prepare($db, $sql);

if (!$stmt) {
    die("Query error: " . mysqli_error($db));
}

mysqli_stmt_bind_param(
    $stmt,
    "ssssi",
    $nama_pelajaran,
    $kode_pelajaran,
    $guru,
    $kelas,
    $id
);

if (mysqli_stmt_execute($stmt)) {

    header("Location: list-mapel.php");
    exit;

} else {

    die("Gagal mengubah data: " . mysqli_stmt_error($stmt));

}

?>