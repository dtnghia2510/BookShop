<?php
include './models/connect.php';
class User{
    private $db_connect;
    function __construct(){
        $this->db_connect = new connect();
        if ($this->db_connect->checkDBConnection()){
            return true;
        }else{
            return false;
        }
    }
    //Create data
    public function insert_user($ten_loaisach, $mo_ta, $ngay_tao, $nguoi_tao){
        $sql = "INSERT INTO bookcategory(ten_loaisach, mo_ta, ngay_tao, nguoi_tao) values ('$ten_loaisach', '$mo_ta', '$ngay_tao', '$nguoi_tao')";
        $result = $this->db_connect->insertQuery($sql);
        return $result;
    }
}