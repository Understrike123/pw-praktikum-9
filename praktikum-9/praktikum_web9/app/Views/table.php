<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Ilham Praktikum web 9</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="karyawanController">Lihat tabel</a>
                    </li>
                            
                    </ul>
                </div>
             </div>
        </nav>
        <div class="my-5"></div>
<div class="container">
<div class="row">
    <h2>Data karyawan IlTech Company</h2>
<table class="table table-dark table-striped"cellpadding="5">
    <thead>
        <tr>
            <th scope="col">No. </th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Gender</th>
            <th scope="col">Position</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1;?>
        <?php  foreach($karyawan as $k): ?>
        <tr>
            <td scope="row"><?= $i++; ?></td>
            <td>10010<?=$k['id']?></td>
            <td><?=$k['nama'];?></td>
            <td><?=$k['email'] ;?></td>
            <td><?=$k['alamat'] ;?></td>
            <td><?= $k['jenis_kelamin'];?></td>
            <td><?=$k['posisi'] ;?></td>
            <td><?= $k['status'];?></td>
            <td>
                <form action="/karyawanController/<?=$k['id'];?>" method="post">
                    <?=csrf_field();?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                
                </form>
                    
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    
  


</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>