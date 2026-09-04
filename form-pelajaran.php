<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Pelajaran</title>
</head>

<body>

    <h2>Form Tambah Mata Pelajaran</h2>

    <form action="proses-mapel.php" method="POST">

        <label>Nama Mata Pelajaran:</label><br>
        <input type="text" name="nama_pelajaran" required>

        <br><br>

        <label>Kode Mata Pelajaran:</label><br>
        <input type="text" name="kode_pelajaran" required>

        <br><br>

        <label>Nama Guru:</label><br>
        <input type="text" name="guru" required>

        <br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" required>

        <br><br>

        <button type="submit">
            Daftarkan Mata Pelajaran
        </button>

    </form>

    <br>

    <a href="index.php">Kembali</a>

</body>
</html>