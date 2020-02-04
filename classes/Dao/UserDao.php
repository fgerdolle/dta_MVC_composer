<?php
namespace dta_MVC_composer\Dao;
use dta_MVC_composer\Domain\User;

class UserDao extends NetteDataBase {
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function findAllUsers() {
        
        $result = [];
        
        $reponse = $this->bdd->query("SELECT id, firstName, lastName, password FROM users order by id");
        
        while ($donnees = $reponse->fetch()) {
            
            $id = $donnees["id"];
            $firstName = $donnees["firstName"];
            $lastName = $donnees["lastName"];
            $password = $donnees["password"];
            
            $user = new User($id, $firstName, $lastName, $password);
            
            $result[] = $user;
        }
        
        $reponse->closeCursor();
        
        return $result;
    }
    
    public function findUserById($id) {
        
        $result = NULL;
        
        $query = $this->bdd->prepare("SELECT id, firstName, lastName , password FROM users where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $id = $donnees["id"];
                $firstName = $donnees["firstName"];
                $lastName = $donnees["lastName"];
                $password = $donnees["password"];
                
                $result = new User($id, $firstName, $lastName, $password);
            }
        }
        
        $query->closeCursor();
        
        return $result;
    }
    
    public function insertUser($user) {
        
        $result;
        
        $query = $this->bdd->prepare("INSERT INTO users (firstName, lastName, password) VALUES (:firstName, :lastName, :password)");
        
        $query->bindParam(":firstName", $user->firstName);
        $query->bindParam(":lastName", $user->lastName);
        $query->bindParam(":password", $user->password);
        $query->execute();   
        
        $id = $this->bdd->lastInsertId();
        
        $user->id = $id;
        
        return $id;
    }
    
    public function deleteUser($id) {
        
        $query = $this->bdd->prepare("DELETE FROM users WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        return $query->execute();
    }
    
    public function updateUser($user) {
        
        $result;
        
        $query = $this->bdd->prepare("UPDATE users SET firstName = :firstName, lastName = :lastName, password = :password WHERE id = :id");
        
        $query->bindParam(":firstName", $user->firstName);
        
        $query->bindParam(":lastName", $user->lastName);

        $query->bindParam(":password", $user->password);
        
        $query->bindParam(":id", $user->id);
        
        return $query->execute();

         
    }
}