<?php
include_once 'sinhVien.php';
class GiangVien extends SinhVien
{
    public $name;
    protected $age;
    private $address;
    public function __construct()
    {
        echo 'Ham khoi tao lop GV';
    }
}
    $giangVienA = new GiangVien();

?>