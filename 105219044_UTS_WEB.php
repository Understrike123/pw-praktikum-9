
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style_UTSWEB.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

    

</head>
<body>
    <center>
    <div >
    <h1 class="logo"><img src="mobil.png" width="150" height="120">Laundry UP</h1>
        
    </div>
    </center>
    <div class="container">
        <div class="navbar">
        <ul>
            <li>
                <a href="105219044_UTS_WEB.php" class="link">menu</a>
                
            </li>
            <li>
                <a href=" "  class="link">contact us</a>
            </li>
        </ul>    
        
        </div>
        <div class="transaksi">
            
            <h1 style align-items="center">Transaksi</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                 <p >Merk&nbsp&emsp;&emsp;&emsp;
                 <select name='merk__' >
		             <option name='Agya'>Agya</option>
		             <option name='Yaris'>Yaris</option>
		             <option name='Innova'>Innova</option>
                </select>
                

                 </p>
                 <label>Durasi (hari)&nbsp</label>
                <input display="text"type="text" placeholder="Masukkan durasi"  name="durasi"><br>
        
                <br><label>Fasilitas: </label><br>
                <input type="radio" name="fasilitas" value="tanpaBBM">Tanpa BBM<br>
                <input type="radio" name="fasilitas" value="DenganBBM">Dengan BBM<br>
                <input type="radio" name="fasilitas" value="both">Dengan BBM dan Driver
                <br><br><input type="submit" value="Hitung Biaya" name="pesan">
   
            </form>
                <?php 
             if($_SERVER["REQUEST_METHOD"]=="POST"){
            $durasi=$_POST['durasi'];
            
            
            if(isset($_POST['pesan'])){
                
            }
        }
        ?>
        

     



        
        </div>

        <div class="biaya">
            <h1>Biaya</h1>
            <table class="tabel_biaya" >
                <tr>
                    <th>Item</th>
                    <th>Data Pemesanan</th>
                </tr>
            </table>

            <table class="tabel_biaya2">
                <tr>
                    <th>Item</th>
                    <th>Biaya</th>
                </tr>
            </table>


        </div>
        

    </div>

</body>
</html>