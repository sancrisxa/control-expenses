<?php

namespace Code\Connection;

class Connection
{

    private $connection;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "control_expenses";

        $this->connection = new \mysqli($servername, $username, $password, $dbname);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        } 
       
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function executeQuery($sql)
    {

        $result = $this->connection->query($sql);


        return $result;
    }

}