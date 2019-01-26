<?php
namespace Code\Profile\Dao;

use Code\Connection\Connection;


class ProfileDao
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function selectprofiles()
    {
        $selectSql = 'SELECT * FROM profiles;';
        $result = $this->connection->executeQuery($selectSql);
        return $result;
    }
   
}