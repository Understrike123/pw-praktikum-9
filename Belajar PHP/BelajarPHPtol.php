<?php

// 1. Print Output
echo 'Hello ', 123456789, ' World <br />';
print("Hello World Only <br />");
printf("%s %d %0.02f <br /> <br />", "Hello World", 123, 0.073);

// 2. Variabel & Tipe Data
$integer = 5;
$double = 3.14;
$string = 'Hello World';
$boolean = true; //jika false maka no output

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$array2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$array_k_v = [
    'Mata Kuliah' => 'Pemrograman Web',
    'Kode' => '52306',
    'SKS' => 3,
    'Wajib' => true
];

// 3. Casting & Aritmatika
$int_to_string = (string) 5577;
$string_to_int = (int) '200';
$object = (object) $array_k_v;
var_dump($object); //mencetak output serta mengetahui informasi variabel

$penjumlahan = 2 + 2;
$pengurangan = 4 - 1;
$perkalian = 5 * 5;
$pembagian = 9 / 3;
$sisa_pembagian = 27 % 5;

// 4. Conditional Programming
$angka1 = 20;
$angka2 = 50;
if ($angka1 < $angka2) {
    // echo '<h3> Angka = ' . $angka1 . '</h3>';
    echo "<h3> Angka = {$angka1} </h3>";
}

$bahasa = 'english';
$correct = true;
if ($bahasa == 'english' && $correct) {
    echo '<h3> Congratulations </h3>';
} else {
    echo '<h3> Not correct </h3>';
}

$nilai = 100;
$hasil = isset($nilai) ? 'nilai saya ' . $nilai : 'tidak ada nilai';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Belajar</title> -->
</head>

<body>
    <!-- <h3><?= $boolean; ?></h3>
    <h3><?php echo $array[7]; ?></h3>
    <h3><?php echo $array_k_v['Mata Kuliah']; ?></h3> -->
</body>

</html>
