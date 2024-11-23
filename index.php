<?php
session_start();
ob_start();
require_once './commons/function.php';
require_once './controller/HomeController.php';
require_once './model/homeModel.php';


$act = $_GET['act'] ?? '/';
match ($act) {
   '/' => (new homeController())->home(),


};
