<?php

namespace src\DesignPattern\Descontos;

use src\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto) {
        $this->proximoDesconto = $proximoDesconto;
    }
abstract public function calculaDesconto(Orcamento $orcamento): float;
}