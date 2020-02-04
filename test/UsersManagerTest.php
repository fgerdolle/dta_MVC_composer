<?php
namespace dta_MVC_composer\test;

require_once '../inc/autoload.php';

use dta_MVC_composer\Dao\UserDao as UserDao;
use dta_MVC_composer\Domain\User as User;
use dta_MVC_composer\Service\UserService as UserService;

$config = include '../inc/constants.php';
$UserDao = new UserDao($config);
$UserService = new UserService();
$user1 = new User(4, '', '', 'dragonfoliooifguyeuuezfuihfohohohvohohoriuiuiuvubountoijtioiohfiduvifnvuihviufhfhboifdijohoohovhfviufvnofoijbhonfovifjvufnbosnofjifvnpfoojfjboifnobifdjbodfbnfdibfdbdbdbdbdbdnfdbdnddd');
$result = $UserService->isValid($user1);
var_dump($result);





/*
$config = include '../inc/constants.php';
$UserDao = new UserDao($config);
$user1 = new User(3, 'Vincent', 'Paquin', 'PootPoot');
$result = $UserDao->updateUser($user1);

if ($result) {
    echo 'Id a été modifié';
}
else {
    echo 'Erreur lors de la modification';
}




$config = include '../inc/constants.php';
$UserDao = new UserDao($config);

$result = $UserDao->deleteUser(11);

if ($result) {
    echo 'Id a été supprimé';
}
else {
    echo 'Erreur lors de la suppression';
}
*/





/*
$config = include '../inc/constants.php';

$UserDao = new UserDao($config);

$user1 = new User(null, 'Alberto', 'Contador', 'MDP');
        
        $id = $UserDao->insertUser($user1);

        echo 'User créé avec ID :' .$id;


 * UsersManager test case.

class UsersManagerTest  {

    private $usersManager;

    protected function setUp() {
        
        parent::setUp();
        
        $this->usersManager = new UsersManager();
    }

    protected function tearDown() {
        
        $this->usersManager = null;
        
        parent::tearDown();
    }
    /*
    public function testGetUsers() {
        
        $users = $this->usersManager->getUsers();
        
        $this->assertEquals(4, count($users));
    }
    
    public function testGetUser() {
        
        $user = $this->usersManager->getUser(1);
        
        $this->assertEquals(1, $user->id);
        
        $this->assertEquals('Bobby', $user->firstname);
        
        $this->assertEquals('Firmino', $user->lastname);
        
        $this->assertEquals('LFC', $user->password);
    }

}
    */


