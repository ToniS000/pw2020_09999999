<?php
require 'functions.php';

//ambil id dari URL
$id = $_GET['id'];
//qiery mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h3> Detai Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $m['gambar']; ?>"></li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        <li> <a href="">Ubah</a> | <a href="">Hapus</a></li>
        <li><a href="latihan3.php">kembali ke daftar Mahasiswa</a></li>
    </ul>
</body>

</html>