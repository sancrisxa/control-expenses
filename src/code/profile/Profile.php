<?php

namespace Code\Profile;

class Profile
{

    private $profileId;
     private $profileInitials;
    private $profileName;
    private $profileDescription;
   

    public function __construct
    (
        int $profileId, 
        string $profileInitials,
        string $profileName,
        string $profileDescription
        
    )
    {
        $this->profileId = $profileId; 
        $this->profileInitials = $profileInitials;
        $this->profileName = $profileName;
        $this->profileDescription = $profileDescription;
   

    }

    public function getProfileId() : int
    {
        return $this->profileId;
    }

    public function getProfileInitials() : string
    {
        return $this->profileInitials;
    }

    public function getProfileName() : string
    {
        return $this->profileName;
    }

    public function getProfileDescription() : string
    {
        return $this->profileDescription;
    }


 
}