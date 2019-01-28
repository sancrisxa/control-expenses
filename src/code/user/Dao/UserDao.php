<?php
namespace Code\User\Dao;
use Code\Connection\Connection;

class UserDao
{
    private $conexao;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }
    public function selectUsers()
    {
        $selectSql = 'SELECT * FROM users;';
        $result = $this->connection->executeQuery($selectSql);
        return $result;
    }

    public function getUserByEmail($email)
    {
        $selectSql = "SELECT * FROM `users` WHERE UserEmail = '{$email}'";

        var_dump($selectSql);
        $result = $this->connection->executeQuery($selectSql);

      

        return $result;
    }


   
}

