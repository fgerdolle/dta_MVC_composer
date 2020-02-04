<?php
require_once '../vendor/autoload.php';

use dta_MVC_composer\Dao\UserDao;

$config = include '../inc/constants.php';
$userDao = new UserDao($config);
$users  = $userDao->findAllUsers();
$userDao->close();

   
require_once '../view/UsersView.php';