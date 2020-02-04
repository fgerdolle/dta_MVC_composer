<?php
namespace FirstMvc\Model;

class Manager {

    protected function dbConnect() {
        
        return new \PDO('mysql:host=localhost;dbname=firstmvc;charset=utf8', 'root', 'rgirodon');
    }
}

