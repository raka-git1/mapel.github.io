<?php

include("config.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];

$sql = "UPDATE calon_siswa
        SET nama = ?,
            alamat = ?,
            jenis_kelamin = ?,
            agama = ?,
            sekolah_asal = ?
        WHERE id = ?";

$stmt = mysqli_prepare($db, $sql);

if (!$stmt) {
    die("Query error: " . mysqli_error($db));
}

mysqli_stmt_bind_param(
    $stmt,
    "sssssi",
    $nama,
    $alamat,
    $jenis_kelamin,
    $agama,
    $sekolah_asal,
    $id
);

if (mysqli_stmt_execute($stmt)) {
    header("Location: list-siswa.php");
    exit;
}

die("Gagal mengubah data: " . mysqli_stmt_error($stmt));

?>