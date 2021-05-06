<?php
class User extends Connection
{
    private $id;
    private $name;
    private $email;
    private $pwd;


    public function __construct()
    {
        //goi phuong thuc __Construct cua lop cha
        parent::__construct();

    }

    //trang danh sach
    public function index()
    {

    }
    public function add($name, $email, $pwd)
    {
        $sql = "INSERT INTO users (name, email, password) VALUES ( '$name','$email' , '$pwd')";

        //day du lieu
        $this->con->query($sql);

    }
    public function update($id, $name, $email, $pwd)
    {
        $sql = "UPDATE users SET name='$name', email = '$email' , password='$pwd' WHERE id=$id";
//        print_r($sql);
        $this->con->query($sql);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = $id";

        $this->con->query($sql);
    }
}

?>
