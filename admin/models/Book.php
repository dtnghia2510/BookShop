<?php
include_once './models/connect.php';
class Book extends connect{
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
    public function insert_book($bookcategory_id,$ten_sach, $nha_xuat_ban, $so_luong, $gia,$ngay_tao,$nguoi_tao){
        $sql = "INSERT INTO book(bookcategory_id,ten_sach, nha_xuat_ban, so_luong, gia,ngay_tao,nguoi_tao) 
        values ('$bookcategory_id','$ten_sach', '$nha_xuat_ban', '$so_luong', '$gia','$ngay_tao','$nguoi_tao')";
        //echo "insert into ".$sql;
        $result = $this->db_connect->insertQuery($sql);
        return $result;
    }
    //View data
    public function select_book(){
        $sql = "Select * from book, bookcategory where book.bookcategory_id = bookcategory.bookcategory_id";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    //Update data
    public function update_book($book_id,$bookcategory_id,$ten_sach, $nha_xuat_ban, $so_luong, $gia, $ngay_cap_nhat, $nguoi_cap_nhat){
        $sql = "Update book 
                SET book_id = '$book_id',bookcategory_id = '$bookcategory_id',ten_sach = '$ten_sach', nha_xuat_ban = '$nha_xuat_ban', so_luong = '$so_luong',gia = '$gia',ngay_cap_nhat = '$ngay_cap_nhat', nguoi_cap_nhat = '$nguoi_cap_nhat' 
                where book_id = $book_id";
        $result = $this->db_connect->updateQuery($sql);
        return $result;
    }
    //Get 1 record base sql_select
    public function select_One_Record($id_sach){
        $sql = "SELECT *
                FROM book,bookcategory
                WHERE book.book_id = $id_sach AND book.bookcategory_id = bookcategory.bookcategory_id";
        $result  = $this->db_connect->selectOneRecord($sql);
        return $result;
    }
    //Delete data -- 1 record
    public function delete_book($id_sach){
        $sql = "Delete
                From book
                where book_id = $id_sach";
        $result = $this->db_connect->deleteQuery($sql);
        return $result;
    }
}
