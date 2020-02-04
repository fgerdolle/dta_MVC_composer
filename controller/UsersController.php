<?php
require_once '../vendor/autoload.php';

use dta_MVC_composer\Dao\NetteDataBase;

$config = include '../inc/constants.php';
$userDao = new NetteDataBase($config);
$users  = $userDao->findAllUsers();
$userDao->close();

   
require_once '../view/UsersView.php';