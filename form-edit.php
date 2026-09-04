<?php

include("config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id = ?";
$stmt = mysqli_prepare($db, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$siswa = mysqli_fetch_assoc($result);

if (!$siswa) {
    die("Data siswa tidak ditemukan.");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>

<h2>Edit Data Siswa</h2>

<form action="proses-edit.php" method="POST">

    <input type="hidden" name="id" value="<?= $siswa['id'] ?>">

    <label>Nama Lengkap:</label><br>
    <input type="text" name="nama"
           value="<?= htmlspecialchars($siswa['nama']) ?>" required>
    <br><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" required><?= htmlspecialchars($siswa['alamat']) ?></textarea>
    <br><br>

    <label>Jenis Kelamin:</label><br>
    <select name="jenis_kelamin" required>
        <option value="Laki-laki" <?= $siswa['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
        <option value="Perempuan" <?= $siswa['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
    </select>
    <br><br>

    <label>Agama:</label><br>
    <input type="text" name="agama"
           value="<?= htmlspecialchars($siswa['agama']) ?>" required>
    <br><br>

    <label>Sekolah Asal:</label><br>
    <input type="text" name="sekolah_asal"
           value="<?= htmlspecialchars($siswa['sekolah_asal']) ?>" required>
    <br><br>

    <button type="submit">Simpan Perubahan</button>

</form>

<br>
<a href="list-siswa.php">Kembali ke daftar siswa</a>

</body>
</html>