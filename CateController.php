<?php
class cateController{
    public $cateModel;
    function __construct()
    {
        $this->cateModel = new cateModel();
    }
    function cateProduct(){
        $cateProduct=$this->cateModel->getAllcate();
        require_once 'views/insertproduct.php';
    }
}

?>