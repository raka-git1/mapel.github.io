<?php

include("config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM mata_pelajaran WHERE id = ?";
$stmt = mysqli_prepare($db, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$mapel = mysqli_fetch_assoc($result);

if (!$mapel) {
    die("Data mata pelajaran tidak ditemukan.");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Pelajaran</title>
</head>
<body>

<h2>Edit Mata Pelajaran</h2>

<form action="proses-edit-mapel.php" method="POST">

    <input type="hidden" name="id" value="<?= $mapel['id'] ?>">

    <label>Nama Mata Pelajaran:</label><br>
    <input type="text" name="nama_pelajaran"
           value="<?= htmlspecialchars($mapel['nama_pelajaran']) ?>" required>
    <br><br>

    <label>Kode Mata Pelajaran:</label><br>
    <input type="text" name="kode_pelajaran"
           value="<?= htmlspecialchars($mapel['kode_pelajaran']) ?>" required>
    <br><br>

    <label>Nama Guru:</label><br>
    <input type="text" name="guru"
           value="<?= htmlspecialchars($mapel['guru']) ?>" required>
    <br><br>

    <label>Kelas:</label><br>
    <input type="text" name="kelas"
           value="<?= htmlspecialchars($mapel['kelas']) ?>" required>
    <br><br>

    <button type="submit">Simpan Perubahan</button>

</form>

<br>
<a href="list-mapel.php">Kembali ke daftar</a>

</body>
</html>