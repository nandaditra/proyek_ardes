<html>
	<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css"rel="stylesheet">
    
    <title>Halaman Utama | Ardes</title>
    <script src="https://kit.fontawesome.com/de7705137f.js" crossorigin="anonymous"></script>
	</head>
	<body>
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

              <main>
                <div id="carouselExampleIndicators" class="carousel slide pt-2" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/gb1.png" class="d-block w-80" alt="gb1.png">
                    </div>
                    <div class="carousel-item">
                      <img src="img/gb2.png" class="d-block w-80" alt="gb2.png">
                    </div>
                    <div class="carousel-item">
                      <img src="img/gb3.png" class="d-block w-80" alt="gb3.png">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>

                <div class="container">

                  <h2 class="mt-4 mb-4"><div class="spinner-grow text-info" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>List Arsitek & Designer</h2>
                  <?php
        $conn = mysqli_connect("localhost", "root", "", "tugasakhir");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql = "SELECT user.*, profil.gambarProfil, contact.*, upload.* FROM user
        INNER JOIN profil ON user.id=profil.id 
        INNER JOIN contact on profil.ID=contact .ID
        INNER JOIN upload on upload.ID=contact .ID
        WHERE user.otoritas!='pengguna'";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          echo "<div class='d-flex'>";
            while ($row = $result->fetch_assoc()) {
                ?> 	
                  <div class="col-12">
                  <div class="card mb-4 " style="max-width: 95%;">
                      <div class="row g-0">
                               <div class="col-md-4 my-5">
                                    <img style="width:250px; height:180px "src="file/<?php echo $row["gambarProfil"]?>" class="img-fluid rounded-start " alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Profil</h4>
                                        <div class="row border border-1">
                                            <div class="col-6">
                                                <div class=" row ">
                                                    <label for="nama" class="col-sm-3 col-form-label"><b>Nama</b></label>
                                                    <div class="col-sm-9 mt-0">
                                                        <p>: <?php echo $row["first_name"]." ".$row["last_name"]?></p>
                                                    </div>
                                                </div>

                                                <div class=" row">
                                                    <label for="domisili" class="col-sm-3 col-form-label"><b>Domisili</b></label>
                                                    <div class="col-sm-9 mt-0 mb-0">
                                                        <p> : <?php echo $row["domisili"] ?></p>
                                                    </div>
                                                </div>

                                                <div class=" row">
                                                    <label for="email" class="col-sm-3 col-form-label"><b>Gender</b></label>
                                                    <div class="col-sm-9 mt-0">
                                                        <p>: <?php echo $row["sex"] ?></p>
                                                    </div>
                                                </div>

                                                <div class=" row">
                                                    <label for="email" class="col-sm-3 col-form-label"><b>Email</b></label>
                                                    <div class="col-sm-9 mt-0">
                                                        <p>: <?php echo $row["email"] ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class=" row ">
                                                    <label for="nama" class="col-sm-6 col-form-label"><b>Nomor Telepon</b></label>
                                                    <div class="col-sm-6 mt-0">
                                                        <p>: <?php echo $row["noTelp"]?></p>
                                                    </div>
                                                </div>

                                                <div class=" row">
                                                    <label for="domisili" class="col-sm-6 col-form-label"><b>No Whatsapp</b></label>
                                                    <div class="col-sm-6 mt-0 mb-0">
                                                        <p> : <?php echo $row["noWa"]?></p>
                                                    </div>
                                                </div>

                                                <div class=" row">
                                                    <label for="email" class="col-sm-6 col-form-label"><b>Instagram</b></label>
                                                    <div class="col-sm-6 mt-0">
                                                        <p>: <?php echo $row["instagram"] ?></p>
                                                    </div>
                                                </div>

                                                <div class=" row">
                                                    <label for="email" class="col-sm-6 col-form-label"><b>Otoritas</b></label>
                                                    <div class="col-sm-6 mt-0">
                                                        <p>: <?php echo $row["otoritas"] ?></p>
                                                    </div>
                                                </div>

                                                </div>
                                        </div>


                                        <div class="row border border-1 mt-2">

        <h4 class="text-center">Portofolio</h4>
        <div class="col-sm-4">
            <img src="file/<?php echo $row["nama_file1"]?>"  
              style="width:200px; height:180px "  class="card-img-top" alt="...">
        </div>
        <div class="col-sm-4">
            <img src="file/<?php echo $row["nama_file2"]?>"  
              style="width:200px; height:180px "  class="card-img-top" alt="...">
        </div>
        <div class="col-sm-4">
            <img src="file/<?php echo $row["nama_file3"]?>"  
              style="width:200px; height:180px "  class="card-img-top" alt="...">
        </div>
        </div>


        </div> 

        </div>

        </div>

        </div>
        <?php }} ?>
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





