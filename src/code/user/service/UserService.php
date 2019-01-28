<?php
namespace Code\User\Service;
use Code\User\Dao\UserDao;

class UserService
{

    private $userDao;

    public function __construct(UserDao $userDao)
    {
        $this->userDao = $userDao;
    }

    public function verifyPassword($email, $password)
    {
         $user = $this->userDao->getUserByEmail($email);

         if($user->num_rows > 0){

            while($user = $user->fetch_assoc()) {
                
                if($user["UserPassword"] == $password) {

                    return true;

                } else {

                    return false;
                }

            }
        } else {

            return false;
        }

    }

}