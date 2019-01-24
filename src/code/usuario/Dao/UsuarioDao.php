<?php

class UsuarioDao
{
    private $conexao;

    public function __construct(Conexao $conexao)
    {
        $this->conexao = $conexao;
    }
    public function selectUsuario()
    {
        $selectSql = '';
        $result = $conexao->executeQuery($selectSql);
        return $result;
    }
   
}