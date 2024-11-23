<?php
class commentModel{
    public $conn;
    function __construct(){
        $this->conn=connectdb();
    }

  // select comment
    function getAllcomment(){
     $sql="select * from comments";
     return $this->conn->query($sql);
  }

  function deletecomment($id) {
    $sql = "DELETE FROM comments WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}
}
?>