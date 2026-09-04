<?php

include("config.php");

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];

$sql = "INSERT INTO calon_siswa
        (nama, alamat, jenis_kelamin, agama, sekolah_asal)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($db, $sql);

if (!$stmt) {
    die("Query error: " . mysqli_error($db));
}

mysqli_stmt_bind_param(
    $stmt,
    "sssss",
    $nama,
    $alamat,
    $jenis_kelamin,
    $agama,
    $sekolah_asal
);

if (mysqli_stmt_execute($stmt)) {
    header("Location: list-siswa.php");
    exit;
}

die("Gagal menyimpan data: " . mysqli_stmt_error($stmt));

?>