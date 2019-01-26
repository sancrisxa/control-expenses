<?php

use PHPUnit\Framework\TestCase;

use Code\Permission\Permission;

class PermissionTest extends TestCase
{
    public function testGetPermissionId()
    {

        $permission = new Permission
        (    
            1, 
            'adm',
            'adm',
            'adm',
            'adm'
        );

        $this->assertEquals(1, $permission->getPermissionId());
    }

    public function testGetPermissionRule()
    {

        $permission = new Permission
        (    
            1, 
            'adm',
            'adm',
            'adm',
            'adm'
        );

        $this->assertEquals('adm', $permission->getPermissionRule());
    }

    public function testGetPermissionName()
    {

        $permission = new Permission
        (    
            1, 
            'adm',
            'adm',
            'adm',
            'adm'
        );

        $this->assertEquals('adm', $permission->getPermissionName());
    }

    public function testGetPermissionDescription()
    {

        $permission = new Permission
        (    
            1, 
            'adm',
            'adm',
            'adm',
            'adm'
        );

        $this->assertEquals('adm', $permission->getPermissionDescription());
    }

    public function testGetPermissionInitials()
    {

        $permission = new Permission
        (    
            1, 
            'adm',
            'adm',
            'adm',
            'adm'
        );

        $this->assertEquals('adm', $permission->getPermissionInitials());
    }
}