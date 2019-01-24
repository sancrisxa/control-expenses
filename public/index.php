<?php

require_once ('../vendor/autoload.php');

use Code\Usuario\Usuario;
use Code\Conexao\Conexao;


$usuario = new Usuario();

var_dump($usuario);


$conexao = new Conexao();

$conexao->connect();
var_dump($conexao->getConnection());
$conexao->close();


