<?php
include './models/connect.php';
class BookCategory extends connect{
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
    public function insert_book_category($ten_loaisach, $mo_ta, $ngay_tao, $nguoi_tao){
        $sql = "INSERT INTO bookcategory(ten_loaisach, mo_ta, ngay_tao, nguoi_tao) values ('$ten_loaisach', '$mo_ta', '$ngay_tao', '$nguoi_tao')";
        $result = $this->db_connect->insertQuery($sql);
        return $result;
    }
    //View data
    public function select_book_category(){
        $sql = "Select * from bookcategory";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    //Update data
    public function update_book_category($id_loaisach, $ten_loaisach, $mo_ta, $ngay_cap_nhat, $nguoi_cap_nhat){
        $sql = "Update bookcategory 
                SET ten_loaisach = '$ten_loaisach', mo_ta = '$mo_ta', ngay_cap_nhat = '$ngay_cap_nhat', nguoi_cap_nhat = '$nguoi_cap_nhat' 
                where id = $id_loaisach";
        $result = $this->db_connect->updateQuery($sql);
        return $result;
    }
    //Get 1 record base sql_select
    public function select_One_Record($id_loaisach){
        $sql = "Select *
                From bookcategory
                Where id = $id_loaisach";
        $result  = $this->db_connect->selectOneRecord($sql);
        return $result;
    }
    //Delete data -- 1 record
    public function delete_book_category($id_loaisach){
        $sql = "Delete
                From bookcategory
                where id = $id_loaisach";
        $result = $this->db_connect->deleteQuery($sql);
        return $result;
    }
}
