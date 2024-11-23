<?php
class productModel{
    public $conn;
    function __construct(){
        $this->conn=connectdb();
    }

    function getAllcate(){
        $sql="select * from categories";
        return $this->conn->query($sql);
    }
    function getAllProduct(){
        $sql="select products.*,categories.name from products join categories on products.category_id=categories.id WHERE products.isdelete = 0";
        return $this->conn->query($sql);
    }

    function insertProduct($category_id,$name_product, $description_1, $description_2, $description_3, $description_4, $description_5, $description_6 , $quantity, $img , $price, $price_sale, $isdelete = 0 ){
        $sql="insert into products value(null,'$category_id','$name_product','$description_1','$description_2','$description_3','$description_4','$description_5', '$description_6', '$quantity', '$img', '$price', '$price_sale', '$isdelete')";
        $stmt=$this->conn->prepare($sql);
        return $stmt->execute();
    }

    function findProductByID($id){
        $sql="select * from products where id=$id";
        return $this->conn->query($sql)->fetch();
    }
    function updateProduct($id, $category_id,$name_product, $description_1, $description_2, $description_3, $description_4, $description_5, $description_6 , $quantity, $img , $price, $price_sale){
        if(empty($img)){
            $sql="update products set category_id='$category_id',name_product='$name_product', description_1='$description_1',description_2='$description_2',description_3='$description_3', description_4='$description_4',
            description_5='$description_5',description_6='$description_6',quantity='$quantity', price='$price',price_sale='$price_sale' where id=$id";
            
        }
        else{
            $sql="update products set category_id='$category_id',name_product='$name_product', description_1='$description_1',description_2='$description_2',description_3='$description_3', description_4='$description_4',
            description_5='$description_5',description_6='$description_6',quantity='$quantity',image='$img',price='$price',price_sale='$price_sale' where id=$id";

        }
        $stmt=$this->conn->prepare($sql);
        return $stmt->execute();
    }

    public function deleteProduct($id) {
        $sql = "UPDATE products SET isdelete = 1 WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    
}
?>