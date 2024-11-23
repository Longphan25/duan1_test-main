<?php
require_once 'models/productModel.php';
class productController
{
    public $productModel;
    function __construct()
    {
        $this->productModel = new productModel();
    }

    function listProduct()
    {
        $allProduct = $this->productModel->getAllProduct();
        require_once 'views/product.php';
    }

    function insertProduct()
    {
        $cateProduct =$this->productModel->getAllcate();
        // var_dump($cateProduct);
        require_once 'views/insertproduct.php';
        if (isset($_POST['submit'])) {
            $category_id = $_POST['category_id'];
            $name_product = $_POST['name_product'];
            $description_1 = $_POST['description_1'];
            $description_2 = $_POST['description_2'];
            $description_3 = $_POST['description_3'];
            $description_4 = $_POST['description_4'];
            $description_5 = $_POST['description_5'];
            $description_6 = $_POST['description_6'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $price_sale = $_POST['price_sale'];

            $img = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmp, '../view/img/' . $img);
            if ($this->productModel->insertProduct($category_id,$name_product, $description_1, $description_2, $description_3, $description_4, $description_5, $description_6 , $quantity, $img , $price, $price_sale)) {
                header("Location: ?act=listproduct");
            } else {
                echo "lỗi";
            }
        }
    }


    public function updateProduct($id)
    {
        $cateProduct =$this->productModel->getAllcate();
        $oneProduct = $this->productModel->findProductByID($id);
        require_once 'views/updateproduct.php';

        if (isset($_POST['submit_update'])) {
            $id = $_POST['id'];
            $category_id = $_POST['category_id'];
            $name_product = $_POST['name_product'];
            $description_1 = $_POST['description_1'];
            $description_2 = $_POST['description_2'];
            $description_3 = $_POST['description_3'];
            $description_4 = $_POST['description_4'];
            $description_5 = $_POST['description_5'];
            $description_6 = $_POST['description_6'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $price_sale = $_POST['price_sale'];


            if (empty($_FILES['image']['name'])) {
                $img = "";
            } else {
                $img = $_FILES['image']['name'];
                $tmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($tmp, '../view/img/' . $img);
            }
            if ($this->productModel->updateProduct($id, $category_id,$name_product, $description_1, $description_2, $description_3, $description_4, $description_5, $description_6 , $quantity, $img , $price, $price_sale)) {
                header("Location: ?act=listproduct");
            } else {
                echo "Lỗi";
            }
        }
    }

    public function deleteProduct($id)
    {
        $oneProduct = $this->productModel->findProductByID($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_delete'])) {
            if ($this->productModel->deleteProduct($id)) {
                header("Location: ?act=listproduct");
                exit();
            } else {
                echo "Lỗi khi xóa sản phẩm";
            }
        }
        require_once 'views/deleteproduct.php';
    }
    

}
