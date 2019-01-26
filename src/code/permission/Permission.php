<?php

namespace Code\Permission;

class Permission
{

    private $permissionId;
    private $permissionRule;
    private $permissionName;
    private $permissionDescription;
    private $permissionInitials;

    public function __construct
    (
        int $permissionId, 
        string $permissionRule,
        string $permissionName,
        string $permissionDescription,
        string $permissionInitials
    )
    {
        $this->permissionId = $permissionId; 
        $this->permissionRule = $permissionRule;
        $this->permissionName = $permissionName;
        $this->permissionDescription = $permissionDescription;
        $this->permissionInitials = $permissionInitials;

    }

    public function getPermissionId() : int
    {
        return $this->permissionId;
    }

    public function getPermissionRule() : string
    {
        return $this->permissionRule;
    }

    public function getPermissionName() : string
    {
        return $this->permissionName;
    }

    public function getPermissionDescription() : string
    {
        return $this->permissionDescription;
    }

    public function getPermissionInitials() : string
    {
        return $this->permissionInitials;
    }
 
}