
<?php
require_once ("app\Controller\c_ardes.php");
if(isset($_POST['submit'])){
  $main = new c_ardes();

    $main->insertContact();
    header("location:mainPageArdes.php");
	
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css"rel="stylesheet">
    <title>Isi Kontak | Ardes</title>
    <script src="https://kit.fontawesome.com/de7705137f.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand text-info" href="#">
              <i class="fa-solid fa-pause"data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"></i> Ardes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>

          <div class="offcanvas offcanvas-start " data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header bg-info m-0 text-white">
              <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu Lainnya</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body container-fluid">
              <ul>
              <a  class="fa-arrow-right-from-bracket"href="login.php">Log Out</a>
              </ul>
            </div>
          </div>
          
        </nav>
      </header>

      <main>
        <div class="container">
            <div class="row mt-4 px-2 py-5">
                <div class="col-6 mt-1">

                  <form action="" method="POST" class="border p-5 rounded-3  shadow p-3 mb-4 bg-body">
                    <h4 class="text-center py-1">Masukkan Kontak</h4>

                    <div class="mb-3 row mt-5">
                        <label for="noTelp" class="col-sm-4 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-8">
                          <input id="noTelp" name='noTelp' type="text" class="form-control border border-info" id="nomorTelepon">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="noWa"class="col-sm-4 col-form-label">Nomor Whatsapp</label>
                        <div class="col-sm-8">
                          <input id="noWa" name='noWa' type="text" class="form-control border border-info" id="noWA">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="ig" class="col-sm-4 col-form-label">Link Akun Instagram</label>
                        <div class="col-sm-8">
                          <input id="ig" name='ig' type="text" class="form-control border border-info" id="linkIG">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <input id="email" name='email' type="text" class="form-control border border-info" id="email">
                        </div>
                    </div>

                    <div class="mt-5 text-end">
                        <button id="button" type="submit" name= "submit" value="submit" class="btn btn-info text-white">Submit</button>
                    </div>
                  </form>
                   
                </div>

                <div class="col-md-4">
                    <img class="w-100 text-center"src="img/lihatKontak.png"alt="lihatKontak.png">
                </div>
              </div>
        </div>
       
      </main>

      <footer  class="footer mt-auto py-5 bg-dark">
        <p class="text-white text-center">@Copyright 2022 - Created by kelompok 7</p>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   

</body>
</html>

