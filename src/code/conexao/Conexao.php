<?php

namespace Code\Conexao;

class Conexao
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $conn;

    public function __construct()
    {

    }

    private function connect()
    {
        $this->conn = new \mysqli($this->servername, $this->username, $this->password);

    }

    private function getConnection()
    {
        $this->connect();
        return $this->conn;

    }

    public function executeQuery($sql)
    {
        $result = $this->getConnection()->query($sql);
        $this->close();

        return $result;

    }


    private function close()
    {

        $this->conn->close();
    }


}