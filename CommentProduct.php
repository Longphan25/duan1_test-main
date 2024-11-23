<?php
class commentController{
    public $commentModel;
    function __construct(){
        $this->commentModel=new commentModel();
    }

    function commentProduct(){
        $commentProduct=$this->commentModel->getAllcomment();
        require_once 'views/commentProduct.php';
    }

    public function deletecomment($id) {
        if ($this->commentModel->deletecomment($id)) {
            header("Location: ?act=listcomment");
            exit();
        } else {
            echo "Lỗi khi xóa sản phẩm";
        }
    }
}
?>