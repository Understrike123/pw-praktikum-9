<?php
abstract class karyawan{
    public $nama;
    public $TTL;
    public $Kelamin;
    public $Level;
    public $status;
    public $gaji;
}
class fulltime extends karyawan{
    public $status='fulltime';
    function __construct($nama,$TTL,$Kelamin,$Level){
        $this->nama=$nama;
        $this->TTL=$TTL;
        $this->Kelamin=$Kelamin;
        $this->Level=$Level;
        

        
        if($this->Level=='Junior'){
            $this->gaji=2000000;
        }
        else if($this->Level=='Amateur'){
            $this->gaji=3500000;
        }
        else if($this->Level='Senior'){
            $this->gaji=5000000;
        }
    }
}
class parttime extends karyawan{
    public $status='parttime';
    function __construct($nama,$TTL,$Kelamin,$Level){
        $this->nama=$nama;
        $this->TTL=$TTL;
        $this->Kelamin=$Kelamin;
        $this->Level=$Level;

        if($this->Level=='Junior'){
            $this->gaji=2000000/2;
        }
        else if($this->Level=='Amateur'){
            $this->gaji=3500000/2;
        }
        else if($this->Level=='Senior'){
            $this->gaji=5000000/2;
        }
    }

}

$karyawan=array();
$karyawan[0]=new fulltime("DODI","Jakarta, 12 Maret 2001","Pria","Amateur");
$karyawan[1]=new fulltime("Ilham","jakarta, 26 February 2001","Pria","Senior");
$karyawan[2]=new parttime("Fahri","Palembang, 05 Juli 2001","Pria","Junior");
$karyawan[3]=new parttime("Dayna","Makasar, 09 November 2001","Wanita","Junior");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style_tugas_4.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body>

<table class="tabelPHP">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Jenis kelamin</th>
        <th>Level karyawan</th>
        <th>Status</th>
        <th>Gaji karyawan</th>
        </tr>
    
    <?php for($i=0; $i < 4; $i++){ ?>
    <tr>
        <td><?php echo $i+1; ?></td>
        <td><?php echo $karyawan[$i]->nama; ?></td>
        <td><?php echo $karyawan[$i]->TTL; ?></td>
        <td><?php echo $karyawan[$i]->Kelamin; ?></td>
        <td><?php echo $karyawan[$i]->Level; ?></td>
        <?php 
            if($karyawan[$i]->status=='fulltime'){
                echo "<td style='color: white;background-color: red;'>";
                echo "fulltime";
            }
            else if($karyawan[$i]->status=='parttime'){
                echo "<td style='color: white;background-color: blue'>";
                echo "parttime";
            }
                
          ?>
        
        <td><?php echo $karyawan[$i]->gaji; ?></td>
         
    </tr>
</tabel>
    <?php } ?>
    
</body>
</html>

