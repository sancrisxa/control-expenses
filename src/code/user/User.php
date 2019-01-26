<?php

namespace Code\User;

class User 
{

    private $userId;
    private $userLogin;
    private $userEmail;
    private $userPassword;
    private $userName;
    private $userLastName;
    private $profileId;

    public function __constructor
    (
        int $userId,
        string $userLogin,
        string $userEmail,
        string $userPassword,
        string $userName,
        string $userLastName,
        int $profileId
    ) 
    {
        $this->userId = $userId;
        $this->userLogin = $userLogin;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
        $this->userName = $userName;
        $this->userLastName = $userLastName;
        $this->profileId = $profileId;

    }


    public function getLogin()
    {
        return $this->userLogin;
    }

}