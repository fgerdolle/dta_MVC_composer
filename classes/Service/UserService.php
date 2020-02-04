<?php
namespace dta_MVC_composer\Service;

use dta_MVC_composer\Domain\User;

class UserService {

    public function __construct(){

    }
    public function isValid($user){

        $result = [];

        if ($user ->firstName == ''){
            $result['user.firstName'] = "FirstName is required";
        }
        if ($user ->lastName == ''){
            $result['user.lastName'] = "LastName is required";
        }
        if (strlen($user ->password ) > 45){
            $result['user.password'] = "Password is 45 CHAR maximum";
        }
        if ($user ->password == ''){
            $result['user.password'] = "Password is required";
        }
        return $result;
    }

}