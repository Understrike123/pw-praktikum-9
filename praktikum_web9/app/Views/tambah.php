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
<form action="/karyawanController/save" method="post" class="row g-3 mx-5 my-2">
  <?= csrf_field(); ?>  
  <h2>Tambah Data</h2>
  <div class="col-md-4">
      
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="col-md-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email"required>
  </div>
  
  <div class="col-md-5">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" required>
  </div>
  
  <div class="col-md-5">
    <label for="gender" class="form-label">Gender</label>
    <select class="form-select" id="gender" name="gender" required>
      <option selected disabled value="">Choose...</option>
      <option value="pria">Pria</option>
      <option value="wanita">Wanita</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="position" class="form-label">Position</label>
    <input type="text" class="form-control" id="position" name="position"required>
  </div>
  <div class="col-md-3">
    <label for="status" class="form-label">Status</label>
    <select class="form-select" id="status" name="status" required>
      <option selected disabled value="">Choose...</option>
      <option value="Fulltime">Fulltime</option>
      <option value="Parttime">Parttime</option>
    </select>
  </div>
  
  <div class="d-inline">

  <div class="col-12 d-inline" >
    <button class="btn btn-success" type="submit">Tambah</button>
  </div>
  <a href="/" class="d-inline">
       <button type="button" class="btn btn-danger">Cancel</button>
  </a>
  </div>
  
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="script.js"></script>
</body>
</html>