<?php

use Dao\UserDao;
use Domain\User;
include '../inc/autoload.php';


 function testInsertUser() {
        
        $user = new User(null, "Alberto", "Contador", "MDP");
        
        $id = $this->userDao->insertUser($user);

        echo 'User créé avec ID :' .$id;
        
        
    }