<?php

namespace App;

class Exemplo
{
    public function soma(int $a, int $b): int
    {
        return $a + $b;
    }

    // Novo método não testado
    public function subtrai(int $a, int $b): int
    {
        return $a - $b;
    }
}
