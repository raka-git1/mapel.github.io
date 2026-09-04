<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>

<h2>Form Pendaftaran Siswa</h2>

<form action="proses-pendaftaran.php" method="POST">

    <label>Nama Lengkap:</label><br>
    <input type="text" name="nama" required>
    <br><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" required></textarea>
    <br><br>

    <label>Jenis Kelamin:</label><br>
    <select name="jenis_kelamin" required>
        <option value="">-- Pilih --</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <br><br>

    <label>Agama:</label><br>
    <input type="text" name="agama" required>
    <br><br>

    <label>Sekolah Asal:</label><br>
    <input type="text" name="sekolah_asal" required>
    <br><br>

    <button type="submit">Daftarkan Siswa</button>

</form>

<br>
<a href="index.php">Kembali ke halaman utama</a>

</body>
</html>