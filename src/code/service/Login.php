<?php

namespace Code\Service;
use Code\User\Service\UserService;


class Login
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;

    }


    public function login($email, $password)
    {
        if($this->userService->verifyPassword($email, $password)) {

            return true;
        } else {

            return false;
        }

    }

}