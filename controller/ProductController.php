<?php
require_once '../vendor/autoload.php';

use dta_MVC_composer\Dao\ProductDao as ProductDao;

$config = include '../inc/constants.php';
$productDao = new ProductDao($config);
$products  = $productDao->findAllProducts();
$productDao->close();

   
require_once '../view/productsView.php';