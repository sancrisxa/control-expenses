<?php
namespace Code\Permission\Dao;

use Code\Connection\Connection;


class PermissionDao
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function selectPermissions()
    {
        $selectSql = 'SELECT * FROM permissions;';
        $result = $this->connection->executeQuery($selectSql);
        return $result;
    }
   
}