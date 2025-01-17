<?php

use App\Exemplo;
use PHPUnit\Framework\TestCase;

class ExemploTest extends TestCase
{
    private Exemplo $exemplo;

    protected function setUp(): void
    {
        $this->exemplo = new Exemplo();
    }

    public function testSoma()
    {
        $resultado = $this->exemplo->soma(2, 3);
        $this->assertEquals(5, $resultado);
    }
}
