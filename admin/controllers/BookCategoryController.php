<?php
require './models/BookCategory.php';
class BookCategoryController{
    private $book_category_model;

    function __construct(){
        $this->book_category_model = new BookCategory();
    }

    //Display data from database
    public function index(){
        return $this->book_category_model->select_book_category();
    }
    //Create to save database
    public function create(){
        if (!empty($_POST['ten_loaisach'])){
            $ten_loaisach = $_POST['ten_loaisach'];
            $mo_ta = $_POST['mo_ta'];
            $ngay_tao = date("Y-m-d h:i:sa");
            $nguoi_tao = 'admin';
            $result = $this->book_category_model->insert_book_category($ten_loaisach, $mo_ta, $ngay_tao, $nguoi_tao);
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
        if (!empty($_POST['ten_loaisach'])){
            $id = $_POST['id'];
            $ten_loaisach = $_POST['ten_loaisach'];
            $mo_ta = $_POST['mo_ta'];
            $ngay_cap_nhat = date("Y-m-d h:i:sa");
            $nguoi_cap_nhat = 'admin';
            $result = $this->book_category_model->update_book_category($id, $ten_loaisach, $mo_ta, $ngay_cap_nhat, $nguoi_cap_nhat);
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
        $id = $_GET['edit_theloaisach'];
        //goi model
        $result = $this->book_category_model->select_One_Record($id);
        return $result;
    }
    //Delete data
    public function delete_detail(){
        $id = $_GET['delete_theloaisach'];
        $result = $this->book_category_model->select_One_Record($id);
        return $result;
    }
    public function delete(){
        $id = $_POST['id'];
        //goi model
        $result = $this->book_category_model->delete_book_category($id);
        if ($result){
            echo "Delete thanh cong";
        }else{
            echo "Delete khong thanh cong";
        }
    }
}