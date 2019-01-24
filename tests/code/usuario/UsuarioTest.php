<?php

use PHPUnit\Framework\TestCase;

use Code\Usuario\Usuario;

class UsuarioTest extends TestCase
{
    public function testSomaDoisNumeros()
    {

        $usuario = new Usuario();

        $this->assertEquals(2,$usuario->somaDoisNumeros());
    }
}