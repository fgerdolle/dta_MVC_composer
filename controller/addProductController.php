<?php
require_once '../vendor/autoload.php';

use dta_MVC_composer\Dao\ProductDao as ProductDao;
use dta_MVC_composer\Domain\Product as Product;
use dta_MVC_composer\Service\ProductService as ProductService;

$config = include '../inc/constants.php';

$productService = new ProductService(); 

$errors = [];

$productName = "";
$productCity = "";
$productPrice = "";
$productSell ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productName = $_POST["productName"];

    $productCity = $_POST["productCity"];

    $productPrice = $_POST["productPrice"];

    $productSell = $_POST["productSell"];


    $product= new Product(null,$productName,$productCity,$productPrice,$productSell);

    $errors = $productService->isValid($product);
    
    

    if (empty($errors)) {
        $ProductDao = new ProductDao($config);
        $ProductDao->insertProduct($product);
        $ProductDao->close();

        header('Location: ProductController.php');
    }
    
    
}

   
require_once '../view/productFormulaire.php';