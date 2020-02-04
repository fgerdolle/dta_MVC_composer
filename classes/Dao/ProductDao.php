<?php
namespace dta_MVC_composer\Dao;
use dta_MVC_composer\Domain\Product as Product;

class ProductDao extends DaoBase {
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function findAllProducts() {
        
        $result = [];
        
        $reponse = $this->bdd->query("SELECT id, productName, productCity, productPrice, productSell FROM products order by id");
        
        while ($donnees = $reponse->fetch()) {
            
            $id = $donnees["id"];
            $productName = $donnees["productName"];
            $productCity = $donnees["productCity"];
            $productPrice = $donnees["productPrice"];
            $productSell = $donnees["productSell"];

            
            $product = new Product($id, $productName, $productCity, $productPrice,$productSell );
            
            $result[] = $product;
        }
        
        $reponse->closeCursor();
        
        return $result;
    }
    
    public function findProductById($id) {
        
        $result = NULL;
        
        $query = $this->bdd->prepare("SELECT id, productName, productCity, productPrice, productSell FROM products where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $id = $donnees["id"];
                $productName = $donnees["productName"];
                $productCity = $donnees["productCity"];
                $productPrice = $donnees["productPrice"];
                $productSell = $donnees["productSell"];
                
                $result = new Product($id, $productName, $productCity, $productPrice,$productSell );
            }
        }
        
        $query->closeCursor();
        
        return $result;
    }
    
    public function insertProduct($product) {
        
        $result;
        
        $query = $this->bdd->prepare("INSERT INTO products (productName, productCity, productPrice, productSell) VALUES (:productName, :productCity, :productPrice, :productSell)");
        
        $query->bindParam(":productName", $product->productName);
        $query->bindParam(":productCity", $product->productCity);
        $query->bindParam(":productPrice", $product->productPrice);
        $query->bindParam(":productSell", $product->productSell);

        $query->execute();   
        
        $id = $this->bdd->lastInsertId();
        
        $product->id = $id;
        
        return $id;
    }
    
    public function deleteProduct($id) {
        
        $query = $this->bdd->prepare("DELETE FROM products WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        return $query->execute();
    }
    
    public function updateProduct($product) {
        
        $result;
        
        $query = $this->bdd->prepare("UPDATE products SET productName = :productName, productCity = :productCity, productPrice = :productPrice, productSell = :productSell WHERE id = :id");
        
        $query->bindParam(":productName", $product->productName);
        
        $query->bindParam(":productCity", $product->productCity);

        $query->bindParam(":productPrice", $product->productPrice);

        $query->bindParam(":productSell", $product->productSell);
        
        $query->bindParam(":id", $product->id);
        
        return $query->execute();

         
    }
}