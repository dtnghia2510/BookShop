<?php
include_once './models/connect.php';
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
    //View data
    public function select_user(){
        $sql = "Select *
                from user, usergroup
                where user.user_group_id = usergroup.user_group_id";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    //Create data
    public function insert_user($ten_dang_nhap, $mat_khau, $xac_nhan_mk, $email, $phone, $dia_chi, $user_group_id, $ngay_tao, $nguoi_tao){
        $sql = "INSERT INTO user(username, password, confirmpassword, email, phone, address, user_group_id, ngay_tao, nguoi_tao) 
                values ('$ten_dang_nhap', '$mat_khau', '$xac_nhan_mk', '$email', '$phone', '$dia_chi', '$user_group_id', '$ngay_tao', '$nguoi_tao')";
        $result = $this->db_connect->insertQuery($sql);
        return $result;
    }
    //Update data
    public function update_user($id, $ten_dang_nhap, $mat_khau, $xac_nhan_mk, $email, $phone, $dia_chi, $user_group_id, $ngay_cap_nhat, $nguoi_cap_nhat){
        $sql = "Update user 
                SET username = '$ten_dang_nhap', password = '$mat_khau', confirmpassword = '$xac_nhan_mk', email = '$email', phone = '$phone', address = '$dia_chi', user_group_id = '$user_group_id', ngay_cap_nhat = '$ngay_cap_nhat', nguoi_cap_nhat = '$nguoi_cap_nhat' 
                where user_id = $id";
        echo $sql;
        $result = $this->db_connect->updateQuery($sql);
        return $result;
    }
    //Get 1 record base sql_select
    public function select_One_Record($id){
        $sql = "Select *
                From user, usergroup
                Where user.user_id = $id
                and user.user_group_id = usergroup.user_group_id";
        $result  = $this->db_connect->selectOneRecord($sql);
        return $result;
    }
    //Delete data -- 1 record
    public function delete_user($user_id){
        $sql = "Delete
                From user
                where user_id = $user_id";
        $result = $this->db_connect->deleteQuery($sql);
        return $result;
    }
}