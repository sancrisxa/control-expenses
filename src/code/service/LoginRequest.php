<?php

require_once('../../../vendor/autoload.php');

use Code\Connection\Connection;
use Code\User\Dao\UserDao;
use Code\User\Service\UserService;
use Code\Service\Login;

$connection = new Connection();
$userDao = new UserDao($connection);
$userService = new UserService($userDao);
$login = new Login($userService);

var_dump($_POST);

$email = $_POST["login"];

$password = $_POST["password"];

if($login->login($email, $password)) {

    echo 'logou';

}else {

    echo 'não logou';
}