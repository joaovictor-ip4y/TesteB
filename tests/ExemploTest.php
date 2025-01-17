<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Exemplo;

class ExemploTest extends TestCase
{
    public function testSoma(): void
    {
        $exemplo = new Exemplo();
        $this->assertEquals(4, $exemplo->soma(2, 2));
    }
}
