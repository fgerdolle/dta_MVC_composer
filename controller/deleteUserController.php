<?php
require_once '../vendor/autoload.php';
use dta_MVC_composer\Dao\UserDao as UserDao;
use dta_MVC_composer\Service\UserService as UserService;
use dta_MVC_composer\Domain\User as User;

$config = include '../inc/constants.php';
$id = "";
if (!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $userDao = new UserDao($config);
    
    $user = $userDao->deleteUser($id);
    
    $userDao->close();
}
require '../view/deleteUserView.php';