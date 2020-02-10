<?php
namespace dta_MVC_composer\Service;

use dta_MVC_composer\Domain\Product as Product;

class ProductService {

    public function __construct(){

    }
    public function isValid($product){

        $result = [];

        if ($product ->productName == ''){
            $result['product.productName'] = "productName is required";
        }
        if ($product ->productCity == ''){
            $result['product.productCity'] = "productCity is required";
        }
        if ($product ->productPrice == ''){
            $result['product.productPrice'] = "productPrice is required";
        }
        if ($product ->productSell == ''){
            $result['product.productSell'] = "productSell is required";
        }
        return $result;
    }

}