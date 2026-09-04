<?php

include("config.php");

$sql = "SELECT * FROM calon_siswa ORDER BY id DESC";
$query = mysqli_query($db, $sql);

if (!$query) {
    die("Query error: " . mysqli_error($db));
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>

<h2>Daftar Siswa</h2>

<a href="form-daftar.php">➕ Tambah Siswa</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    while ($siswa = mysqli_fetch_assoc($query)) {
    ?>

    <tr>
        <td><?= $no++ ?></td>
        <td><?= htmlspecialchars($siswa['nama']) ?></td>
        <td><?= htmlspecialchars($siswa['alamat']) ?></td>
        <td><?= htmlspecialchars($siswa['jenis_kelamin']) ?></td>
        <td><?= htmlspecialchars($siswa['agama']) ?></td>
        <td><?= htmlspecialchars($siswa['sekolah_asal']) ?></td>
        <td>
            <a href="form-edit.php?id=<?= $siswa['id'] ?>">Edit</a>
            |
            <a href="hapus.php?id=<?= $siswa['id'] ?>"
               onclick="return confirm('Yakin ingin menghapus siswa ini?')">
                Hapus
            </a>
        </td>
    </tr>

    <?php } ?>
</table>

<br>
<a href="index.php">Kembali ke halaman utama</a>

</body>
</html>