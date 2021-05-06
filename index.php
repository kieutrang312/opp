<h1>Lập trình hướng đối tượng- OOP</h1>

<!-- B1:Ket noi den DB-->
<?php include_once 'Connection.php' ?>

<?php
//Cách 1:khoi tao truc tiep
//$ketnoi = new Connection();
//$ketnoi->con();

//Cach 2: su dung tinh chat cua ham de khoi tao
// $ketnoi = new Connection();
?>

<!--B2:Thao tac -them /hien thi/sua /xoa (CRUD)-->
<?php include_once 'User.php' ?>

<?php

    //Cach 3: su dung tinh chat ke thua
    $user = new User();

    //them nguoi dung
//    $user->add('kieu trang','kieutrangg122@gmail.com','1234');

    // Cập nhật
//    $user->update(4,'letrang','kieu@gmail.com','0000');

    //Xóa
    $user->delete(4);

?>
