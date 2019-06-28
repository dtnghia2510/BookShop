<?php
require './models/User.php';
class UserController{
    private $user_model;

    function __construct(){
        $this->user_model = new User();
    }
    public function index(){
        return $this->user_model->select_user();
    }
    //Create to save database
    public function create(){
        if (!empty($_POST['user_name']) && !empty($_POST['password'])){
            $user_group_id = $_POST['user_group_id'];
            $ten_dang_nhap = $_POST['user_name'];
            $mat_khau = $_POST['password'];
            if (isset($_POST['confirm_password']) == isset($_POST['password'])){
                $xac_nhan_mk = $_POST['confirm_password'];
            }else{
                echo "<p class='text-danger'>Mật khẩu không khớp. Kiểm tra lại</p>";
            }
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $dia_chi = $_POST['address'];
            $ngay_tao = date("Y-m-d h:i:sa");
            $nguoi_tao = 'admin';
            $result = $this->user_model->insert_user($ten_dang_nhap, $mat_khau, $xac_nhan_mk, $email, $phone, $dia_chi, $user_group_id, $ngay_tao, $nguoi_tao);
            if ($result){
                echo "Thêm mới thành công";
            }else{
                echo "Thêm mới thất bại";
            }
        }else{
            echo "<p class='text-danger'>Không được để trống tên đăng nhập hoặc mật khẩu</p>";
        }
    }
    //Update data
    public function update(){
        $id = $_POST['id'];
        $user_group_id = $_POST['user_group_id'];
        $ten_dang_nhap = $_POST['user_name'];
        $mat_khau = $_POST['password'];
        $xac_nhan_mk = $_POST['confirm_password'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $dia_chi = $_POST['address'];
        $ngay_cap_nhat = date("Y-m-d h:i:sa");
        $nguoi_cap_nhat = 'admin';
        //goi model
        $result = $this->user_model->update_user($id, $ten_dang_nhap, $mat_khau, $xac_nhan_mk, $email, $phone, $dia_chi, $user_group_id, $ngay_cap_nhat, $nguoi_cap_nhat);
        if ($result){
            echo "Update thanh cong";
        }else{
            echo "Update khong thanh cong";
        }
    }
    public function detail(){
        $id_ma = $_GET['edit_user'];
        $result = $this->user_model->select_One_Record($id_ma);
        return $result;
    }
    //Delete data
    public function delete_detail(){
        $user_id = $_GET['delete_user'];
        //goi model
        $result = $this->user_model->select_One_Record($user_id);
        //echo "Ket qua select: ".$result;
        return $result;
    }
    public function delete(){
        $user_id = $_POST['id'];
        //goi model
        $result = $this->user_model->delete_user($user_id);
        if ($result){
            echo "Delete thanh cong";
        }else{
            echo "Delete khong thanh cong";
        }
    }
}