<?php
require "koneksi.php";
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
require getcwd(). '/vendor/autoload.php';


session_start();
class m_ardes {



 private $connect;
 
 function __construct(){
 $this->connect = new koneksi();
 } 

 function execute($query){
 return mysqli_query($this->connect->getConnection(),$query);
 } 

 function login($email, $Cpassword){

  $sqlEmail = "SELECT id, email FROM user WHERE email= '$email'";
  $sqlPass = "SELECT pass FROM user WHERE email= '$email'";

  $resultEmail = $this->execute($sqlEmail);
  $resultPass = $this->execute($sqlPass);

  $resultEma = mysqli_fetch_array($resultEmail);
  $resultPas = mysqli_fetch_array($resultPass);

  $_SESSION['email']= $resultEma['email'];
  $_SESSION['pass']= $resultPas['pass'];

      if ($_SESSION['email'] == null){
          echo "<script>alert('Email/Password salah!')</script>";
          header("location:login.php");
      } else {
          if ($_SESSION['pass'] == null){
              echo "<script>alert('Email/Password salah!')</script>";
              header("location:login.php");
          } else{
            $sqlOtoritas = "SELECT otoritas FROM user WHERE email= '$email' AND pass = md5($Cpassword)";
            $resultOtoritas = $this->execute($sqlOtoritas);
            $resultOto = mysqli_fetch_array($resultOtoritas);
            $_SESSION['otoritas']= $resultOto['otoritas'];

            $sqlStatus = "SELECT aktif FROM user WHERE email= '$email' AND pass = md5($Cpassword)";
            $resultStatus = $this->execute($sqlStatus);
            $resultStts = mysqli_fetch_array($resultStatus);
            $_SESSION['aktif']= $resultStts['aktif'];

              if($_SESSION['otoritas']=="Pengguna"){
                header("location:mainPageArdes.php");
                  } else{
                    $sqlId = "SELECT id FROM user WHERE email= '$email' AND pass = md5($Cpassword)";
                    $resultId = $this->execute($sqlId);
                    $result = mysqli_fetch_array($resultId);
                    $_SESSION['id']= $result['id'];
                    if($resultStts['aktif']==0){
                        header("location:indexUpload1.php");
                    } else if($resultStts['aktif']==1){
                        header("location:mainPageArdes.php");
                    }
                  }			
                }	
      }
  
 }



 function fileUploadPP(){
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "tugasakhir";
    $conn=mysqli_connect($host,$username,$password,"$dbname");

    $idUser=$_SESSION['id'];

			$ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
			$nama = $_FILES['profilPicture']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['profilPicture']['size'];
			$file_tmp = $_FILES['profilPicture']['tmp_name'];
      
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$query = mysqli_query($conn, "INSERT INTO profil VALUES($idUser, '$nama')");
					
                    if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';

			}

}

function fileUpload1(){
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "tugasakhir";
    $conn=mysqli_connect($host,$username,$password,"$dbname");

    $idUser=$_SESSION['id'];

			$ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
      
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$query = mysqli_query($conn, "INSERT INTO upload (id,nama_file1) VALUES($idUser, '$nama')");
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';

				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';

			}

}

function fileUpload2(){
  $host='localhost';
  $username='root';
  $password='';
  $dbname = "tugasakhir";
  $conn=mysqli_connect($host,$username,$password,"$dbname");

  $idUser=$_SESSION['id'];

    $ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      if($ukuran < 1044070){			
        move_uploaded_file($file_tmp, 'file/'.$nama);
        $query = mysqli_query($conn, "UPDATE upload SET nama_file2 = '$nama' WHERE id=$idUser");
        if($query){
          echo 'FILE BERHASIL DI UPLOAD';
        }else{
          echo 'GAGAL MENGUPLOAD GAMBAR';
        }
      }else{
        echo 'UKURAN FILE TERLALU BESAR';

      }
    }else{
      echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }

}

function fileUpload3(){
  $host='localhost';
  $username='root';
  $password='';
  $dbname = "tugasakhir";
  $conn=mysqli_connect($host,$username,$password,"$dbname");

  $idUser=$_SESSION['id'];

    $ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      if($ukuran < 1044070){			
        move_uploaded_file($file_tmp, 'file/'.$nama);
        $query = mysqli_query($conn, "UPDATE upload SET nama_file3 = '$nama' WHERE id=$idUser");
        if($query){
          echo 'FILE BERHASIL DI UPLOAD';
        }else{
          echo 'GAGAL MENGUPLOAD GAMBAR';
        }
      }else{
        echo 'UKURAN FILE TERLALU BESAR';

      }
    }else{
      echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }

}


function deleteUploadProcess(){
    $idUser=$_SESSION['id'];

    $sqlDeleteUpload = "DELETE FROM upload WHERE id= '$idUser'";
    $resultEmail = $this->execute($sqlDeleteUpload);
}

function viewUpload1(){
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "tugasakhir";
    $conn=mysqli_connect($host,$username,$password,"$dbname");

    $idUser=$_SESSION['id'];

    $data = mysqli_query($conn, "SELECT * FROM upload  WHERE id=$idUser");
    while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td>
            <img src="<?php echo "file/".$d['nama_file1']; ?>">
        </td>		
    </tr>
    <?php } 
}

function viewUpload2(){
  $host='localhost';
  $username='root';
  $password='';
  $dbname = "tugasakhir";
  $conn=mysqli_connect($host,$username,$password,"$dbname");

  $idUser=$_SESSION['id'];

  $data = mysqli_query($conn, "SELECT * FROM upload  WHERE id=$idUser");
  while($d = mysqli_fetch_array($data)){
  ?>
  <tr>
      <td>
          <img src="<?php echo "file/".$d['nama_file2']; ?>">
      </td>		
  </tr>
  <?php } 
}

function viewUpload3(){
  $host='localhost';
  $username='root';
  $password='';
  $dbname = "tugasakhir";
  $conn=mysqli_connect($host,$username,$password,"$dbname");

  $idUser=$_SESSION['id'];

  $data = mysqli_query($conn, "SELECT * FROM upload  WHERE id=$idUser");
  while($d = mysqli_fetch_array($data)){
  ?>
  <tr>
      <td>
          <img src="<?php echo "file/".$d['nama_file3']; ?>">
      </td>		
  </tr>
  <?php } 
}

 function insertUser($namaDepan, $namaBelakang, $gender,$email, $domisili, $password,  $otoritas){

  $validator = new EmailValidator();
  if ($validator->isValid($email, new RFCValidation()) == true ){
  $query = "INSERT INTO user (first_name, last_name, sex, email, domisili, pass, otoritas, aktif)
  VALUES  ('$namaDepan', '$namaBelakang', '$gender', '$email', '$domisili', md5($password),  '$otoritas', '0')";
  $this->execute($query);

$sqlId = "SELECT id FROM user WHERE email= '$email' AND pass = md5($password)";
$resultId = $this->execute($sqlId);
$resultIdUser = mysqli_fetch_array($resultId);
$_SESSION['id']= $resultIdUser['id'];
header("location:login.php");
  }
  else{
    echo "<script>alert('Error !!!!')</script>";
    header("location:register.php");
  }
  }

function insertContactProcess($noTelp, $noWa, $ig, $email){
    $idUser=$_SESSION['id'];
    $query = "INSERT INTO contact (id, noTelp, noWa, instagram, email)
    VALUES  ('$idUser', '$noTelp', '$noWa', '$ig', '$email')";
    $queryStatus = "UPDATE user SET aktif = 1 WHERE id=$idUser";
    $this->execute($query);
    return $this->execute($queryStatus);
}


  function deleteUserProcess(){
    $idUser=$_SESSION['id'];
    $query = "DELETE FROM user WHERE id='$idUser'";
    return $this->execute($query);
    } 
  
 function fetch($var){
 return mysqli_fetch_array($var);
 } 

 function __destruct(){
 }
}
?>
