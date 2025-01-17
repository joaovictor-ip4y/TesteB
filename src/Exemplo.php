<?php

use PHPUnit\Framework\TestCase;
use App\Exemplo;

class ExemploTest extends TestCase
{
    public function testSoma()
    {
        $exemplo = new Exemplo();
        $resultado = $exemplo->soma(1, 2);
        $this->assertEquals(3, $resultado);
    }
}
