<?php
require_once '../vendor/autoload.php';

use dta_MVC_composer\Dao\UserDao as UserDao;
use dta_MVC_composer\Domain\User as User;
use dta_MVC_composer\Service\UserService as UserService;

$config = include '../inc/constants.php';

$userService = new UserService();

$errors = [];

$firstName = "";
$lastName = "";
$password ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];

    $lastName = $_POST["lastName"];

    $password = $_POST["password"];

    $user= new User(null,$firstName,$lastName,$password);

    $errors = $userService->isValid($user);
    
    

    if (empty($errors)) {
        $UserDao = new UserDao($config);
        $UserDao->insertUser($user);
        $UserDao->close();

        header('Location: UsersController.php');
    }
    
    
}

   
require_once '../view/formulaire.php';