<?php
include_once './models/connect.php';
class UserGroup{
    private $db_connect;

    function __construct()
    {
        $this->db_connect = new connect();
        if ($this->db_connect->checkDBConnection()) {
            return true;
        } else {
            return false;
        }
    }
    //Create data
    public function insert_user_group($id, $ten_group){
        $sql = "INSERT INTO usergroup(user_group_id, ten_group) values ('$id', '$ten_group')";
        $result = $this->db_connect->insertQuery($sql);
        return $result;
    }
    //View data
    public function select_user_group(){
        $sql = "Select * from usergroup";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    //Update data
    public function update_user_group($id, $ten_group){
        $sql = "Update usergroup 
                SET ten_group = '$ten_group' 
                where user_group_id = '$id'";
        $result = $this->db_connect->updateQuery($sql);
        return $result;
    }
    //Get 1 record base sql_select
    public function select_One_Record($id){
        $sql = "Select *
                From usergroup
                Where user_group_id = '$id'";
        $result  = $this->db_connect->selectOneRecord($sql);
        return $result;
    }
    //Delete data -- 1 record
    public function delete_user_group($id){
        $sql = "Delete
                From usergroup
                where user_group_id = '$id'";
        $result = $this->db_connect->deleteQuery($sql);
        return $result;
    }
}