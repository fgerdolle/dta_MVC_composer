<?php
require_once '../vendor/autoload.php';
use dta_MVC_composer\Dao\ProductDao as ProductDao;
use dta_MVC_composer\Service\ProductService as ProductService;
use dta_MVC_composer\Domain\Product as Product;

$config = include '../inc/constants.php';
$id = "";
if (!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $productDao = new ProductDao($config);
    
    $produc = $productDao->deleteProduct($id);
    
    $productDao->close();
}
require '../view/deleteProductView.php';