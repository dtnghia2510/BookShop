<?php
class connect{
    private $host_name = 'localhost';
    private $user_name = 'root';
    private $db_name = 'bookdb';
    private $password = '';

    private $connection;

    //Check connection with mysql
    public function checkDBConnection(){
        $this->connection = mysqli_connect($this->host_name, $this->user_name, $this->password, $this->db_name);
        //check connect
        if ($this->connection){
            mysqli_set_charset($this->connection, 'utf8');
        }else{
            echo "Ket noi voi db khong thanh cong";
        }
    }
    //Listing data
    public function selectQuery($sql_select){
        $result_connect = mysqli_query($this->connection, $sql_select);
        $result = array();
        if ($result_connect){
            while($row = mysqli_fetch_assoc($result_connect)){
                $result[] = $row;
            }
            return $result;
        }else{
            return false;
        }
    }
    //Insert data
    public function insertQuery($sql_string){
        //Save vietnamese
        $result = mysqli_query($this->connection, $sql_string);
        if ($result){
//            echo "Insert success in DBModel<br>";
            return true;
        }else{
//            echo "Insert fail in DBModel<br>";
            return false;
        }
    }
    //Update data
    public function updateQuery($sqlUpdate){
        $result = mysqli_query($this->connection, $sqlUpdate);
        if ($result){
//            echo "Update success in DBModel<br>";
            return true;
        }else{
//            echo "Update fail in DBModel<br>";
            return false;
        }
    }
    //Select one record
    public function selectOneRecord($sqlselect){
        $result = mysqli_query($this->connection, $sqlselect);
        if ($result){
            $row = mysqli_fetch_row($result);
            return $row;
        }else{
            echo "Lỗi không lấy được data --- DbModel<br>";
            return false;
        }
    }

    //Delete one record
    public function deleteQuery($sqlDelete){
        $result = mysqli_query($this->connection, $sqlDelete);
        if ($result){
//            echo "Delete success in DBModel<br>";
            return true;
        }else{
//            echo "Delete fail in DBModel<br>";
            return false;
        }
    }
}