<?php
include("config.php");

$sql = "SELECT * FROM mata_pelajaran ORDER BY id DESC";
$query = mysqli_query($db, $sql);

if (!$query) {
    die("Query error: " . mysqli_error($db));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Pelajaran</title>
</head>

<body>

<h2>Daftar Mata Pelajaran</h2>

<a href="form-pelajaran.php"> Tambah Mata Pelajaran</a>

<br><br>

<table border="1" cellpadding="8">

    <tr>
        <th>No</th>
        <th>Nama Pelajaran</th>
        <th>Kode</th>
        <th>Guru</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;

    while ($mapel = mysqli_fetch_assoc($query)) {
    ?>

    <tr>
        <td><?= $no++ ?></td>

        <td><?= htmlspecialchars($mapel['nama_pelajaran']) ?></td>

        <td><?= htmlspecialchars($mapel['kode_pelajaran']) ?></td>

        <td><?= htmlspecialchars($mapel['guru']) ?></td>

        <td><?= htmlspecialchars($mapel['kelas']) ?></td>

        <td>
            <a href="form-edit-mapel.php?id=<?= $mapel['id'] ?>">
                Edit
            </a>

            |

            <a href="hapus-mapel.php?id=<?= $mapel['id'] ?>"
               onclick="return confirm('Yakin ingin menghapus data ini?')">
                Hapus
            </a>
        </td>
    </tr>

    <?php } ?>

</table>

<br>

<a href="index.php">Kembali</a>

</body>
</html>