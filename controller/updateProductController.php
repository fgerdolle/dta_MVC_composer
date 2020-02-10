<?php
require_once '../vendor/autoload.php';
use dta_MVC_composer\Dao\ProductDao as ProductDao;
use dta_MVC_composer\Service\ProductService as ProductService;
use dta_MVC_composer\Domain\Product as Product;



$config = include '../inc/constants.php';

$productDao = new ProductDao($config);

$productService = new ProductService();

$errors = [];

$product = null;
$id = "";
$productName = "";
$productCity = "";
$productPrice = "";
$productSell = "";

if (!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $product = $productDao->findProductById($id);
    
    $productDao->close();
    
    $productName = $product->productName;
    $productCity = $product->productCity;
    $productPrice = $product ->productPrice;
    $productSell = $product ->productSell;

}
else if (!empty($_POST)) {
    
    $id = $_POST["id"];
    $productName = $_POST["productName"];
    $productCity = $_POST["productCity"];
    $productPrice = $_POST["productPrice"];
    $productSell = $_POST["productSell"];

    $product = new Product($id, $productName, $productCity, $productPrice, $productSell);
    
    $errors = $productService->isValid($product);
    
    if (empty($errors)) {
        
        $productDao->updateProduct($product);
        
        $productDao->close();
        
        header("Location: ProductController.php");
    }
}

require_once '../view/updateProductView.php';