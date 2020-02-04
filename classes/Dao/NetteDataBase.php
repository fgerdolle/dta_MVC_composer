<?php

use Nette\Database\Connection;
use PHPUnit\Framework\TestCase;


Class NetteDataBase extends TestCase{

    public $database;

    public function setUp(): void {

        include_once __DIR__.'../../../inc/constants.php';

        $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";

        $this->database = new Connection($dsn, 
                                            DB_USERNAME, 
                                            DB_PASSWORD);
    }
    public function testFindAllUsers() {

        $result = $this->database->query('SELECT * FROM users');

        $this->assertEquals(7, $result->getRowCount());
    }

    public function testFindUserById() {

        $result = $this->database->fetch('SELECT * FROM users WHERE id = ?', 1);

        $this->assertEquals('Franck', $result->firstName);
    }
}

