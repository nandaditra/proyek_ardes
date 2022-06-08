<?php
require_once ("app\Model\m_ardes.php");

class c_ardes {
public $model;

function __construct(){
$this->model = new m_ardes(); 
}

function loginCheck(){
        $email = $_POST['email'];
        $Cpassword = $_POST['password'];
        $this->model->login($email, $Cpassword);
  
}

function upload1(){
    $this->model->fileUpload1();
}

function upload2(){
    $this->model->fileUpload2();
}

function upload3(){
    $this->model->fileUpload3();
}

function view1(){
    $this->model->viewUpload1();
}

function view2(){
    $this->model->viewUpload2();
}

function view3(){
    $this->model->viewUpload3();
}

function insert(){
    $namaDepan = $_POST['first_name'];
    $namaBelakang = $_POST['last_name'];
    $gender = $_POST['gender'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    $otoritas = $_POST['otoritas'];
    $password = $_POST['password'];

$insert = $this->model->insertUser($namaDepan, $namaBelakang, $gender,
$email, $domisili, $password,  $otoritas);

}

function insertPP(){
$insert = $this->model->fileUploadPP();
}

function insertContact(){
    $noTelp = $_POST['noTelp'];
    $noWa = $_POST['noWa'];
    $ig = $_POST['ig'];
    $email = $_POST['email'];
    $insert = $this->model->insertContactProcess($noTelp, $noWa, $ig, $email);
}


function deleteUpload(){
    $delete = $this->model->deleteUploadProcess();
}




function __destruct(){
}
}
?>
