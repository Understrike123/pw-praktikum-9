<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>Register</title>
  </head>
  <body>
      <div class="container">
          <div class="tempat_regist">
              <h1>Sign Up</h1>
              <form action="/register/save" method="post">
                  <div class="kolom-isian">
                      <label for="InputFname" class="label-data">Masukkan nama depan: </label>
                      <input type="text" name="nam_depan" class="input-data" id="InputFname" value="<?= set_value('Fname') ?>">

                  </div>
                  <div class="kolom-isian">
                      <label for="InputBname" class="label-data">Masukkan nama belakang: </label>
                      <input type="text" name="nam_belakang" class="input-data" id="InputBname" value="<?= set_value('Bname') ?>">
                      
                  </div>
                  <div class="kolom-isian">
                      <label for="InputEmail" class="label-data">Masukkan Email: </label>
                      <input type="email" name="email" class="input-data" id="InputEmail" value="<?= set_value('email') ?>">
                      
                  </div>
                  <div class="kolom-isian">
                      <label for="InputUsername" class="label-data">Masukkan Email: </label>
                      <input type="text" name="username" class="input-data" id="username" value="<?= set_value('username') ?>">
                      
                  </div>
                  <div class="kolom-isian">
                      <label for="InputPassword" class="label-data">Masukkan password: </label>
                      <input type="password" name="password" class="input-data" id="InputPassword" value="<?= set_value('passsword') ?>">
                      
                  </div>
                  <div class="kolom-isian">
                      <label for="Inputconfpassword" class="label-data">Confirmasi password: </label>
                      <input type="password" name="confpassword" class="input-data" id="Inputconfpassword" value="<?= set_value('confpassword') ?>">
                      
                  </div>
                  <div class="kolom-isisan" >
                      <label for="InputnoTelepon" class="label-data" >Masukkan nomor telepon: </label>
                      <input type="number" name="no_telepon" class="input-data" id="no_telepon" value="<?= set_value('no_telepon') ?>">
                  </div>
                  <div class="validasi">
                        <?php if(isset($validation)):?>
                            <div class="alert"><?= $validation->listErrors() ?></div>
                        <?php endif;?>

                  </div>
                  <button type="submit" class="button">Register</button>
              </form>
          </div>

      </div>
  
  


    </body>
</html>