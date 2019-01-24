<?php

namespace Code\Usuario;

class Usuario {

    private $userLogin;
    private $userEmail;
    private $userPassword;
    private $userName;
    private $userLastName;

    public function __constructor() 
    {

    }


    public function getLogin()
    {
        return $this->userLogin;
    }

}