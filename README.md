Sistem Data Sekolah
Project ini adalah aplikasi web sederhana untuk mengelola data siswa dan data mata pelajaran. Aplikasi dibuat menggunakan PHP dan MySQL. Project ini dijalankan secara lokal menggunakan Laragon.
Deskripsi Project
Aplikasi ini dibuat untuk mempermudah proses pengelolaan data sekolah. Terdapat dua data utama yang dikelola, yaitu data siswa dan data mata pelajaran.
Pada data siswa, pengguna dapat menambahkan data, melihat data, mengubah data, dan menghapus data siswa.
Pada data mata pelajaran, pengguna juga dapat menambahkan data, melihat data, mengubah data, dan menghapus data mata pelajaran.
Project ini menggunakan konsep CRUD yang terdiri dari Create, Read, Update, dan Delete.

Teknologi yang Digunakan
PHP digunakan untuk menjalankan logika aplikasi dan mengolah data.
MySQL digunakan sebagai database untuk menyimpan data siswa dan mata pelajaran.
HTML digunakan untuk membuat struktur halaman dan form.
MySQLi digunakan oleh PHP untuk melakukan koneksi dan komunikasi dengan database.
Laragon digunakan untuk menjalankan aplikasi PHP dan MySQL secara lokal.

Struktur File
Project ini memiliki beberapa file PHP yang digunakan untuk menjalankan fungsi aplikasi.
config.php digunakan untuk membuat koneksi dengan database.
index.php digunakan sebagai halaman utama aplikasi.
form-daftar.php digunakan untuk menampilkan form pendaftaran siswa.
proses-pendaftaran.php digunakan untuk menyimpan data siswa ke database.
list-siswa.php digunakan untuk menampilkan data siswa.
form-edit.php digunakan untuk menampilkan form edit data siswa.
proses-edit.php digunakan untuk menyimpan perubahan data siswa.
hapus.php digunakan untuk menghapus data siswa.
form-pelajaran.php digunakan untuk menampilkan form penambahan mata pelajaran.
proses-mapel.php digunakan untuk menyimpan data mata pelajaran ke database.
list-mapel.php digunakan untuk menampilkan data mata pelajaran.
form-edit-mapel.php digunakan untuk menampilkan form edit mata pelajaran.
proses-edit-mapel.php digunakan untuk menyimpan perubahan data mata pelajaran.
hapus-mapel.php digunakan untuk menghapus data mata pelajaran.

Penjelasa Setiap File
config.php
File config.php digunakan untuk membuat koneksi antara aplikasi PHP dengan database MySQL.
Di dalam file ini terdapat konfigurasi server, username, password, dan nama database. Database yang digunakan adalah pendaftaran_siswa.
Koneksi yang dibuat di file ini digunakan oleh file lain yang membutuhkan akses ke database.
index.php
File index.php merupakan halaman utama aplikasi.
Pada halaman ini terdapat pilihan untuk mengelola data siswa dan data mata pelajaran. Pengguna dapat menuju halaman penambahan data atau halaman daftar data.
form-daftar.php
File form-daftar.php digunakan untuk menampilkan form penambahan data siswa.
Pengguna dapat mengisi nama, alamat, jenis kelamin, agama, dan sekolah asal. Setelah tombol pendaftaran ditekan, data dikirim menggunakan method POST ke proses-pendaftaran.php.

proses-pendaftaran.php
File proses-pendaftaran.php digunakan untuk menerima data yang dikirim dari form-daftar.php.
Data yang diterima kemudian dimasukkan ke tabel calon_siswa menggunakan query INSERT. Setelah proses berhasil, pengguna diarahkan kembali ke halaman list-siswa.php

list-siswa.php
File list-siswa.php digunakan untuk mengambil dan menampilkan data siswa dari database.
Data diambil dari tabel calon_siswa menggunakan query SELECT. Data kemudian ditampilkan dalam bentuk tabel.
Pada setiap data siswa terdapat pilihan untuk melakukan edit dan hapus.

form-edit.php
File form-edit.php digunakan ketika pengguna ingin mengubah data siswa.
ID siswa diambil dari URL menggunakan $_GET['id']. ID tersebut digunakan untuk mencari data siswa tertentu dari database.
Data siswa yang ditemukan kemudian dimasukkan ke dalam form agar pengguna dapat melakukan perubahan. Setelah form dikirim, data diteruskan ke proses-edit.php.

proses-edit.php
File proses-edit.php digunakan untuk menyimpan perubahan data siswa.
Data yang dikirim dari form-edit.php diterima melalui $_POST. Data tersebut kemudian digunakan dalam query UPDATE berdasarkan ID siswa.
Setelah proses berhasil, pengguna diarahkan kembali ke list-siswa.php.

hapus.php
File hapus.php digunakan untuk menghapus data siswa.
ID siswa diambil dari URL dan digunakan untuk menentukan data yang akan dihapus. Proses penghapusan menggunakan query DELETE pada tabel calon_siswa.
Setelah berhasil, pengguna diarahkan kembali ke list-siswa.php.

Data Mata Pelajarn
form-pelajaran.php
File form-pelajaran.php digunakan untuk menampilkan form penambahan data mata pelajaran.
Pengguna dapat memasukkan nama mata pelajaran, kode mata pelajaran, guru, dan kelas.
Data yang dimasukkan kemudian dikirim menggunakan method POST ke proses-mapel.php.

proses-mapel.php
File proses-mapel.php digunakan untuk menerima data dari form-pelajaran.php.
Data yang diterima kemudian dimasukkan ke tabel mata_pelajaran menggunakan query INSERT.
Setelah proses berhasil, pengguna diarahkan ke halaman list-mapel.php.

list-mapel.php
File list-mapel.php digunakan untuk mengambil dan menampilkan data mata pelajaran dari database.
Data diambil dari tabel mata_pelajaran menggunakan query SELECT dan kemudian ditampilkan dalam bentuk tabel.
Pada setiap data terdapat pilihan untuk melakukan edit dan hapus.

form-edit-mapel.php
File form-edit-mapel.php digunakan untuk mengubah data mata pelajaran.
ID mata pelajaran diambil dari URL dan digunakan untuk mencari data tertentu pada tabel mata_pelajaran.
Data yang ditemukan kemudian ditampilkan pada form agar pengguna dapat melakukan perubahan. Setelah form dikirim, data diteruskan ke proses-edit-mapel.php.

proses-edit-mapel.php
File proses-edit-mapel.php digunakan untuk menyimpan perubahan data mata pelajaran.
Data yang dikirim dari form edit diterima melalui $_POST. Data tersebut kemudian digunakan pada query UPDATE berdasarkan ID mata pelajaran.
Setelah berhasil, pengguna diarahkan kembali ke list-mapel.php.

hapus-mapel.php
File hapus-mapel.php digunakan untuk menghapus data mata pelajaran.
ID mata pelajaran diambil dari URL dan digunakan untuk menentukan data yang akan dihapus pada tabel mata_pelajaran.
Setelah proses penghapusan berhasil, pengguna kembali ke halaman list-mapel.php.

Alur Data Siswa
Proses data siwa dimulai dari halaman form-daftar.php.
Pengguna mengisi data siswa kemudian menekan tombol pendaftaran.
Data tersebut dikirim ke proses-pendaftaran.php menggunakan method POST.
proses-pendaftaran.php menerima data tersebut dan memasukkannya ke database pada tabel calon_siswa.
Setelah data berhasil disimpan, pengguna diarahkan ke list-siswa.php.
list-siswa.php mengambil data dari database menggunakan query SELECT dan menampilkannya kepada pengguna.
Jika pengguna ingin mengubah data, pengguna memilih tombol edit. Sistem kemudian membuka form-edit.php berdasarkan ID siswa.
Setelah data diubah, data dikirim ke proses-edit.php. File tersebut menjalankan query UPDATE untuk memperbarui data pada database.
Jika pengguna ingin menghapus data, sistem menggunakan hapus.php. File tersebut menjalankan query DELETE berdasarkan ID siswa.

Alur Data Mata Pelajaran
Proses mata pelajaran dimulai dari form-pelajaran.php.
Pengguna mengisi nama mata pelajaran, kode mata pelajaran, guru, dan kelas.
Data kemudian dikirim ke proses-mapel.php.
proses-mapel.php menerima data dan menyimpannya ke tabel mata_pelajaran menggunakan query INSERT.
Setelah berhasil, pengguna diarahkan ke list-mapel.php.
list-mapel.php mengambil data mata pelajaran dari database dan menampilkannya dalam bentuk tabel.
Jika pengguna ingin mengubah data, pengguna memilih tombol edit. Sistem membuka form-edit-mapel.php berdasarkan ID mata pelajaran.
Setelah data diubah, data dikirim ke proses-edit-mapel.php. File tersebut menjalankan query UPDATE untuk menyimpan perubahan.
Jika pengguna ingin menghapus data, sistem menggunakan hapus-mapel.php untuk menjalankan query DELETE berdasarkan ID mata pelajaran.
Hubungan Antar File
Setiap file pada roject memiliki fungsi yang berbeda tetapi saling berhubungan.
config.php digunakan sebagai koneksi database yang digunakan oleh file lainnya.
File form digunakan untuk menerima input dari pengguna.
File proses digunakan untuk mengolah data yang diterima dari form dan menjalankan query ke database.
File list digunakan untuk mengambil data dari database dan menampilkannya kepada pengguna
File edit digunakan untuk mengambil data tertentu berdasarkan ID dan menampilkan data tersebut pada form
File hapus digunakan untuk menghapus data tertentu berdasarkan ID.
Hubungan antar file tersebut membuat proses pengelolaan data dapat berjalan dari input pengguna sampai data tersimpan di database dan ditampilkan kembali.
Database
Database yang digunakan dalam project ini bernama pendaftaran_siswa.
Nama database tersebut digunakan pada file config.php.
Berdasarkan query yang digunakan dalam source code, aplikasi menggunakan tabel calon_siswa dan mata_pelajaran.
Tabel calon_siswa
Tabel calon_siswa digunakan untuk menyimpan data siswa.
Field yang digunakan oleh aplikasi adalah id, nama, alamat, jenis_kelamin, agama, dan sekolah_asal.
Tabel mata_pelajaran
Tabel mata_pelajaran digunakan untuk menyimpan data mata pelajaran.
Field yang digunakan oleh aplikasi adalah id, nama_pelajaran, kode_pelajaran, guru, dan kelas.
CRUD

Project ini menggunakan konsep CRUD.
Create digunakan untuk menambahkan data siswa dan mata pelajaran.
Read digunakan untuk mengambil dan menampilkan data siswa serta mata pelajaran.
Update digunakan untuk mengubah data yang sudah tersimpan.
Delete digunakan untuk menghapus data yang sudah tersimpan.
Pada proses pengolahan database, project menggunakan prepared statement melalui mysqli_prepare() dan mysqli_stmt_bind_param().
Cara Menjalankan Project
Project ini dibuat dan dijalankan menggunakan Laragon.
Pertama, letakkan folder project di dalam folder www milik Laragon.

Contohnya:
C:\laragon\www\mapel.github.io
Kemudian buka aplikasi Laragon.
Jalankan Apache dan MySQL.
Setelah itu buat database dengan nama pendaftaran_siswa.
Nama database tersebut harus sesuai dengan konfigurasi yang terdapat pada config.php.
Setelah database dan server berjalan, buka browser dan akses project melalui alamat:
http://localhost/mapel.github.io/
Setelah halaman terbuka, pengguna dapat memilih menu data siswa atau data mata pelajaran.

