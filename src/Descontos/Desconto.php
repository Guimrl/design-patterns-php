<?php

namespace src\DesignPattern\Descontos;

use src\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto) {
        $this->proximoDesconto = $proximoDesconto;
    }

    public function calcula(Orcamento $orcamento) {
        $calculo = $this->calculaDesconto($orcamento);
        if($calculo === 0) {
            $this->proximoDesconto->calcula($orcamento);
        }
    }

    abstract public function calculaDesconto(Orcamento $orcamento): float;

}