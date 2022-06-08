<?php
require_once ("app\Controller\c_ardes.php");
if( empty(session_id()) && !headers_sent()){
  session_start();
}
else{
if(isset($_POST['submit'])){
  $main = new c_ardes();
    $main->insert();
    $main->insertPP();
   

  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Ardes</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mx-6">
        <div class="row row-cols-2 mt-2">
          <div class="col-8 col-sm-4 my-5">
               <h2 class="text-center">Temukan Arsitek </h2>
               <h2 class="text-center">Desainer Terbaik Anda</h2>
               <img src="img/logologin.png"alt="logologin.png"width=95%>
          </div>

          <div class="col-8 col-sm-6 mt-5">
            <div>
            <h2 class="text-center">Register</h2>
            </div>

  <form class="g-3 shadow p-4 mt-4 bg-body rounded-3" action="" method="POST"  enctype='multipart/form-data'>
                <div class="row g-3">
                <div class="col-md-6">      
        <label for="first_name" class="first-name">Nama Depan</label>
        <input class="form-control  border border-info" id="first_name" name='first_name' type="text">
        </div>

        <div class="col-md-6">
<label for="last_name" class="first-name">Nama Belakang</label>
<input class="form-control  border border-info" id="last_name" name='last_name' type="text">
</div>

<div class="col-md-8">
            <label for="domisili">Domisili</label>
            <input class="form-control  border border-info" id="domisili" name='domisili' type="text">
            </div> 

<div class="col-md-4">
<label for="gender"  class="form-label">Gender</label>
<select name="gender" class="form-select  border border-info">
                    <option value="">--Pilih Gender--</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="wanita">Wanita</option> 
    </select>
</label>
</div>


            <div class="col-md-6">
<label for="email">Email</label>
<input id="email" class="form-control  border border-info" name='email' type="text">
</div>

<div class="col-md-6">
<label for="password">Password</label>
<input id="password"  class="form-control  border border-info"  name='password' type="password">
</div>

<fieldset class="col-md-5 mb-1 mt-3">
                  <p>Daftar Sebagai :</p>
                  <div class="col-sm-12">
                    <div class="form-check">
                      <input class="form-check-input border border-info" type="radio" name="otoritas" id="gridRadios1" value="Pengguna">
                      <label class="form-check-label" for="gridRadios1">
                        Pengguna
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input border border-info" type="radio" name="otoritas" id="gridRadios2" value="Arsitek">
                      <label class="form-check-label" for="gridRadios2">
                        Arsitek
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input border border-info" type="radio" name="otoritas" id="gridRadios3" value="Desain Interior">
                      <label class="form-check-label" for="gridRadios3">
                        Desain Interior
                      </label>
                    </div>
                  </div>
                </fieldset>



<div class="col-md-7">
<label for="profilPicture" class="first-name">Pilih Gambar Profil</label>
<input id="profilPicture"  class="form-control  border border-info" name='profilPicture' type="file">
</div>


<div class="mt-5">

<div class="text-end">   
<label for="submit"></label>
 <button id="button" class="btn btn-info text-white" type="submit" name= "submit" value="submit">Submit</button>
<label for="submit"></label>
</div>


                    <div class="text-start float-start">
<label class="toLogin">Sudah punya akun? 
<a href="login.php">Masuk di sini</a>
</label>
</div>
</div>
</div>

 </form>
 </div>
         </div>
       </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <footer  class="footer mt-auto py-5 bg-dark">
        <p class="text-white text-center">@Copyright 2022 - Created by kelompok 7</p>
      </footer>
</body>
</html>

