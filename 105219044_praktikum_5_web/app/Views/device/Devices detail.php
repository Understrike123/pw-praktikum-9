<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">IlTech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('/home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/DevicesController');  ?>">Devices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/DeviceDetailController/Controll'); ?>">Devices detail</a>
                    </li>
                    
                </ul>
            </div>
        </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/img/IOT 3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $Detail['id']; ?></h5>
                    <?php
                    if($Dev['device_defect']=="0"){
                        echo "<p>Tidak cacat</p>";
                    }         
                    else{
                        echo "<p>Cacat</p>";
                    }
                    ?>
                    <p class="card-text"><?= $Detail['device_origin']; ?></p>
                    <a href="/" class="btn btn-primary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>