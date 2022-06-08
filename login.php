<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Login | Ardes</title>
</head>
<body>
<div class="container mx-6">
        <div class="row row-cols-2">
          <div class="col-8 col-sm-6 my-4">
               <h2 class="text-center">Temukan Arsitek </h2>
               <h2 class="text-center">Desainer Terbaik Anda</h2>
               <img src="img/logologin.png"alt="logologin.png"width=95%>
          </div>
          
          <div class="col-8 col-sm-4 mt-5">
            <div>
                <h2 class="text-center">Login</h2>
            </div>

<form class=class="container shadow p-3 mx-1 my-4 bg-body rounded-3" action="" method="POST">
<div class="my-4 mx-3">
                <div class="mb-3">
<label for="email" class="form-label">Email</label>
<input class="form-control border border-info" id="email" name='email' type="text">
</div>

<div class="mb-3">
<label for="password"  class="form-label">Password</label>
<input class="form-control border border-info" id="password" name='password' type="password">
</div>

           <div class="mt-3">
              <div class="text-start float-start">
        <label class="toLogin">Belum punya akun? 
        <a href="register.php">Daftar di sini</a>
        </label>
          </div>

<div class="text-end">    

 <button id="button" class="btn btn-info text-white" type="submit" name= "submit" value="submit"
                href="index.php?i=0">Masuk</button>
                </div>
                </div>
                </div>

 </form>
 </div>
         
         </div>
       </div>
       <footer  class="footer mt-auto py-5 bg-dark">
        <p class="text-white text-center">@Copyright 2022 - Created by kelompok 7</p>
      </footer>
</body>
</html>

<?php 
require_once ("app\Controller\c_ardes.php");

if(isset($_POST['submit'])){
	if($_POST['email']==null or $_POST['password']==null){
		echo "<script>alert('Email/Password tidak boleh kosong!')</script>";
	} else{
  $main = new c_ardes();
  $main->loginCheck();
  }
}
?>