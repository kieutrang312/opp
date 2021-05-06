<?php
class SinhVien {
    //thuoc tinh -> dac diem chung
    public $id=123;
    public $name ='DEV';
    protected $age =10;
    private $address = 'Dong da,HN';

    public function __construct() //tu dong goi khi khai bao thuoc tinh
    {
        echo 'ham khoi tao';
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo ' ham huy - giao phong bo nho';
    }

    //phuong thuc -> hanh dong cua sv
    public function setInfo($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
    //Laay thong tin sv
    public function getInfo() {
        echo 'Họ tên : '.$this->name. ' Tuổi:' .$this->age.' Dia chi:'.$this->address;
    }

    public function show_info() {
        echo 'Hien thi thong tin sv';
    }
}
//    $sinhVienA = new SinhVien(); //khoi tao mot doi tuong cu the tu lop
//    $sinhVienA->name; //goi den thuoc tinh cua lop
//
//    $sinhVienA->show_info(); //goi den phuong thuc cua lop
//    $sinhVienA->setInfo('trang','19','hn');
//    echo '<br>';
//    $sinhVienA->getInfo();


?>