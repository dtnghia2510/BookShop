<?php
require './models/UserGroup.php';
class UserGroupController{
    private $user_group_model;

    function __construct(){
        $this->user_group_model = new UserGroup();
    }
    //Display data from database
    public function index(){
        return $this->user_group_model->select_user_group();
    }
    //Create to save database
    public function create(){
        if (!empty($_POST['id']) && !empty($_POST['ten_group'])){
            $id = $_POST['id'];
            $ten_group = $_POST['ten_group'];
            $result = $this->user_group_model->insert_user_group($id, $ten_group);
            if ($result){
                echo "Thêm mới thành công";
            }else{
                echo "Thêm mới thất bại";
            }
        }else{
            echo "<p class='text-danger'>Bạn chưa nhập tên thể loại sách!</p>";
        }
    }
    public function update(){
        if (!empty($_POST['id']) && !empty($_POST['ten_group'])){
            $id = $_POST['id'];
            $ten_group = $_POST['ten_group'];
            $result = $this->user_group_model->update_user_group($id, $ten_group);
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
        $id = $_GET['edit_usergroup'];
        //goi model
        $result = $this->user_group_model->select_One_Record($id);
        return $result;
    }
    //Delete data
    public function delete_detail(){
        $id = $_GET['delete_usergroup'];
        $result = $this->user_group_model->select_One_Record($id);
        return $result;
    }
    public function delete(){
        $id = $_POST['id'];
        //goi model
        $result = $this->user_group_model->delete_user_group($id);
        if ($result){
            echo "Xóa thanh cong";
        }else{
            echo "Xóa khong thanh cong";
        }
    }
}