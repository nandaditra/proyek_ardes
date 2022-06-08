<?php
require_once ("app\Controller\c_ardes.php");
if(isset($_POST['submit1'])){
  header("location:indexUpload2.php");	
  }

if(isset($_POST['submit2'])){
	$main=new c_ardes();
	$main->deleteUpload();
	header("location:indexUpload1.php");	
}
?>

<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css"rel="stylesheet">
    <title>Aksi | Ardes</title>
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
			  <h6><i class="fa-solid fa-arrow-right-from-bracket"></i><a class = "active" href="login.php">Log Out</a> </h6>
              </ul>
            </div>
          </div>
          
        </nav>
      </header>

		<?php
		$main=new c_ardes();
    	$main->upload1();
		?> 
		<table>
      <?php
      $main->view1();
      ?>
		</table>
		<main>
        <div class="container">
		<div class="row my-5 py-5 pb-6">
            <div class="col-6">
              <form class="shadow p-3 mb-5 mt-4 bg-body rounded" action="" method="POST">
                  <h4 class="text-center p-3">Unggah Portofolio - 2</h4>

                <div class="mb-3 row mt-5">
                    <label for="submit" class="col-sm-5 col-form-label">Upload Portofolio - 2</label>
                    <div class="d-grid gap-2 col-sm-6">
                        <button type="submit" name= "submit1" value="submit1" class="btn btn-success text-white">Lanjut</button>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="submit" class="col-sm-5 col-form-label">Upload Ulang Portofolio</label>
                    <div class="d-grid gap-2 col-sm-6">
                        <button type="submit" name= "submit2" value="submit2" class="btn btn-danger text-white">Upload Kembali</button>
                    </div>
                </div>


              
              </div>
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


