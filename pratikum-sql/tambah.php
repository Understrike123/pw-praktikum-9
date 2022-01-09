<?php
    require 'functions.php';

    //memeriksa apakah tombol submit telah ditekan atau belum
    if( isset($_POST["submit"])){
        //jika sudah ditekan dijalankan function tambah
        if(tambah($_POST) > 0) {
            echo "berhasil";

        } else {
            echo "gagal!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email">
            </li>
            <button type="submit" name="submit">
                Tambah Data
            </button>
            <a href="index.php">klik untuk kembali</a>
        </ul>
    </form>
</body>
</html>