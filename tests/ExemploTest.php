<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Exemplo;

class ExemploTest extends TestCase
{
    public function testSoma()
    {
        $exemplo = new Exemplo();
        $this->assertEquals(5, $exemplo->soma(2, 3));
    }
}
