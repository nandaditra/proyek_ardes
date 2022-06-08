<?php
class koneksi{
public function __construct(){
$this->mysqli = new mysqli('localhost', 'root', '', 'tugasakhir');
 }
public function getConnection(){ 
return $this->mysqli;
 }
 }
?>