<?php
include_once('belajarPHPtol.php'); //jika file tidak ditemukan maka script tetap jalan
// require_once('belajar.php'); //jika file tidak ditemukan maka script berhenti
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>

<body>
    <!-- 2. Variabel & Tipe Data -->
    <!-- <h3><?= $boolean; ?></h3>
    <h3><?php echo $array[7]; ?></h3>
    <h3><?php echo $array_k_v['Mata Kuliah']; ?></h3> -->
    <h3><?= array_search('Pemrograman Web', $array_k_v); ?></h3>

    <!-- 3. Casting & Aritmatika -->
    <h3><?= $object->Kode; ?></h3>
    <h3><?= $sisa_pembagian; ?></h3>
    <h3><?= $hasil; ?></h3>
</body>

</html>