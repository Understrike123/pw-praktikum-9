<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style_kuis_web_1.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


</head>
<?php
$berat_pakaian=array();
$berat_selimut=array();
?>

<body>
<center>
<div class="judul_UP">
     <h1><span class="lab la-accusoft"></span>Laundry UP</h1>
</div>

</center>
<div class="main_content">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>Pakaian &emsp;</label>
        <input display="block" type="number" placeholder="Masukkan berat"  name="pakaian1"><br>
        <label>selimut &emsp;&nbsp</label>
        <input display="block"type="number" placeholder="Masukkan berat"  name="selimut1"><br>
        <br><label>layanan: </label><br>
        <input type="radio" name="paket" value="Reguler">Reguler<br>
        <input type="radio" name="paket" value="Ekspress">Ekspress
        <br><br><input type="submit" value="Hitung Biaya" name="submit">
   
    </form>

</div>
<br><br><br>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $pakaian=$_POST['pakaian1'];
    $selimut=$_POST['selimut1'];
    $paket=$_POST['paket'];
    
    if(isset($_POST['submit'])){
        if($paket=="Reguler"){
            $jumlah_pakaian=$pakaian*8000;
            $jumlah_selimut=$selimut*15000;
            echo "<input type=text name=jumlah value='$jumlah_pakaian'>";
            echo "<input type=text name=jumlah value='$jumlah_selimut'>";

        }
        elseif($paket=="Ekspress"){
            $jumlah_pakaian=($pakaian*8000)+3000;
            $jumlah_selimut=($selimut*15000)+3000;
            echo "<input type=text name=jumlah value='$jumlah_pakaian'>";
            echo "<input type=text name=jumlah value='$jumlah_selimut'>";

        }
        

        
    }
    

}

?>

<div class="grid-item">
      <dl>
          <dt>Detail</dt>
          <dd>Layanan Reguler</dd>
          <dd>placeholder 1 </dd>
          <dd>placeholder 2 </dd>
      </dl>
  </div>
  <div class="grid">
    <dl>
        <dt>Home</dt>
        <dt>Contact Us</dt>
        <dt>Testimoni</dt>
    </dl>
  </div>
</body>

</html>