<?php
require_once '../vendor/autoload.php';
use dta_MVC_composer\Dao\UserDao as UserDao;
use dta_MVC_composer\Service\UserService as UserService;
use dta_MVC_composer\Domain\User as User;



$config = include '../inc/constants.php';

$userDao = new UserDao($config);

$userService = new UserService();

$errors = [];

$user = null;
$id = "";
$firstName = "";
$lastName = "";
$password = "";

if (!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $user = $userDao->findUserById($id);
    
    $userDao->close();
    
    $firstName = $user->firstName;
    $lastName = $user->lastName;
    $password = $user ->password;
}
else if (!empty($_POST)) {
    
    $id = $_POST["id"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $password = $_POST["password"];
    
    $user = new User($id, $firstName, $lastName, $password);
    
    $errors = $userService->isValid($user);
    
    if (empty($errors)) {
        
        $userDao->updateUser($user);
        
        $userDao->close();
        
        header("Location: UsersController.php");
    }
}

require_once '../view/updateUserView.php';