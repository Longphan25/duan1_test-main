<?php
class cateModel{
    public $conn;
    function __construct(){
        $this->conn=connectdb();
    }
    
    function getAllcate(){
        $sql="select * from categories";
        return $this->conn->query($sql);
    }
}
?>