<?php
include './models/Book.php';
class BookController{
    private $book_model;

    function __construct(){
        $this->book_model = new Book();
    }

    //Display data from database
    public function index(){
        return $this->book_model->select_book();
    }
    //Create to save database
    public function create(){
        if (!empty($_POST['ten_sach'])){
            $bookcategory_id = $_POST['bookcategory_id'];
            $ten_sach = $_POST['ten_sach'];
            $nha_xuat_ban = $_POST['nha_xuat_ban'];
            $so_luong = $_POST['so_luong'];
            $gia = $_POST['gia'];
            $ngay_tao = date("Y-m-d h:i:sa");
            $nguoi_tao = 'admin';
            $result = $this->book_model->insert_book($bookcategory_id,$ten_sach,$nha_xuat_ban,$so_luong,$gia,$ngay_tao,$nguoi_tao);

            if ($result){
                echo "Thêm mới thành công";
            }else{
                echo "Thêm mới thất bại";
            }
        }else{
            echo "<p class='text-danger'>Bạn chưa nhập tên thể loại sách!</p>";
        }
    }
    //Update data
    public function update(){
        if (!empty($_POST['ten_sach'])){
            $book_id = $_POST['book_id'];
            $bookcategory_id = $_POST['bookcategory_id'];
            $ten_sach = $_POST['ten_sach'];
            $nha_xuat_ban = $_POST['nha_xuat_ban'];
            $so_luong = $_POST['so_luong'];
            $gia = $_POST['gia'];
            $ngay_cap_nhat = date("Y-m-d h:i:sa");
            $nguoi_cap_nhat = 'admin';
            $result = $this->book_model->update_book($book_id, $bookcategory_id,$ten_sach, $nha_xuat_ban, $so_luong, $gia, $ngay_cap_nhat, $nguoi_cap_nhat);
            if ($result){
                echo "Cập nhật thành công";
            }else{
                echo "Cập nhật thất bại";
            }
        }else{
            echo "<p class='text-danger'>Bạn chưa nhập tên thể loại sách!</p>";
        }
    }
    public function detail(){
        $id = $_GET['edit_sach'];
        //goi model
        $result = $this->book_model->select_One_Record($id);
        return $result;
    }
    //Delete data
    public function delete_detail(){
        $id = $_GET['delete_sach'];
        $result = $this->book_model->select_One_Record($id);
        return $result;
    }
    public function delete(){
        $id = $_POST['book_id'];
        //goi model
        $result = $this->book_model->delete_book($id);
        if ($result){
            echo "Delete thanh cong";
        }else{
            echo "Delete khong thanh cong";
        }
    }
}