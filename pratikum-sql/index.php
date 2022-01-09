<?php
    //memanggil file functions.php
    require 'functions.php';

    //memanggil function query pengambilan data pada table mahasiswa
    //lalu ditampung kedalam variable mahasiswa
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa UP</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Mahasiswa</a>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>
                No.
            </th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>

        <?php foreach($mahasiswa as $item) : ?>
        <tr>
            <td><?= $item["id"] ?></td>
            <td><a href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a></td>
            <td><?= $item["nim"] ?></td>
            <td><?= $item["nama"] ?></td>
            <td><?= $item["jurusan"] ?></td>
            <td><?= $item["email"] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>