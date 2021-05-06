<?php
class Connection
{
 //property
 public $host = 'localhost';
 public $username = 'root';
 public $password = '';
 public $db = 'webshop';
 public $con; //lưu giữ kết nối tới db (đại diện cho connect tới db )

 public function __construct()
 {
  $this->con();
 }


 //method
 public function con()
 {
  $this->con = mysqli_connect("$this->host","$this->username","$this->password","$this->db");

  if(!$this->con) {
    die('Kết nối thất bại');
  }
  else {

  }
// echo 'ket noi thanh cong';
  return $this->con;
 }
}


?>
