<?php
namespace dta_MVC_composer\Domain;
class Product {
    public $id;
    
    public $productName;
    
    public $productCity;

    public $productPrice;

    public $productSell;
    
    public function __construct($id, $productName, $productCity, $productPrice, $productSell) {
        
        $this->id = $id;
        
        $this->productName = $productName;
        
        $this->productCity = $productCity;

        $this->productPrice = $productPrice;

        $this->productSell = $productSell;

    }
}