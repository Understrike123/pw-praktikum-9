<?php
$nomor_urut=array(1,2,3,4,5,6,7);
$nama_barang=array("wortel","bayam","tomat","sawi","cabai","brokoli","bawang");
$berat_barang=array(25,10,10,15,20,25,30);
$berat_gram=array();
$berat_mg=array();
$stok=array(10,20,0,30,0,40,15);
$jumlah_array=count($nama_barang);


for($i=0;$i<$jumlah_array;$i++){
    $berat_gram[$i]=$berat_barang[$i]*1000;
    $berat_mg[$i]=$berat_gram[$i]*1000;

}
/*
for($i=0;$i<$jumlah_array;$i++){
    echo "<td>$berat_gram[$i] &nbsp</td>";
    
    
}
echo "<br>";
for($i=0;$i<$jumlah_array;$i++){
    echo "<td>$berat_mg[$i] &nbsp</td>";

}
*/

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=s
    wap" rel="stylesheet">
</head>
<center>
<body>
    <table class="tabel" border="4" cellpadding="10" style: background-color: "red;">
        <tbody>
            <tr>
                <th>No. </th>
                <th>Nama barang&nbsp&nbsp</th>
                <th>Berat (kg)&nbsp&nbsp</th>
                <th>Berat (gram)&nbsp&nbsp</th>
                <th>Berat (miligram)&nbsp&nbsp</th>
                <th>Stok</th>
 
            </tr>
        
<?php

//echo "<table class='tabel' border='4' cellpadding='10'>";

            for ($i=0; $i < $jumlah_array; $i++) { 
                echo "<tr>";
                //echo "<td style='background-color:#ff050f;'>";
                echo "<td>$nomor_urut[$i] &nbsp&nbsp&nbsp </td>";
                echo "<td>$nama_barang[$i] &nbsp</td>";
                echo "<td>$berat_barang[$i]</td>";
                echo "<td>$berat_gram[$i]</td>";
                echo "<td>$berat_mg[$i]</td>";
                if($stok[$i]=="0"){
                    echo "<td style='color: white;background-color: red;'>";
                    echo "kosong";
                }
                else{
                    echo "<td>$stok[$i]</td>";
                }
                echo "</tr>";
            }
//echo "</table>";
?>

        </tbody>
    </table>
</body>
<center>

</html>
