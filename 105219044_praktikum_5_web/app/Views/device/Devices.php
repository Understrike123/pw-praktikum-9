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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/home'); ?>">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('/DevicesController');  ?>">Devices</a>
                    </li>
                    
                </ul>
            </div>
        </div>
</nav>
<div class="container">
    <div class="tabel">
    <h1 class="mt-2">Daftar device</h1>
    <table class="table table-dark table-striped">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Device name</th>
      <th scope="col">Device brand</th>
      <th scope="col">Device quantity</th>
      <th scope="col">Device status</th>
      <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php $i=1; ?>
        <?php foreach($Devices as $Dev): ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $Dev['device_name']; ?></td>
      <td><?= $Dev['device_brand'];?></td>
      <td><?= $Dev['device_quantity'];?></td>
      <?php
      if($Dev['device_status']=="0"){
          echo "<td>Non Active</td>";
      }         
      else{
          echo "<td>Active</td>";
       }
      ?>
      <td>
          <a href="">
            <button type="button" class="btn btn-outline-primary" >On/Off</button>
      
          </a>
      <a href="/DeviceDetailController/detail/<?= $Dev['id']; ?>" class="btn btn-success">Detail</a>  
    </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    </div>

</div>

</body>
</html>