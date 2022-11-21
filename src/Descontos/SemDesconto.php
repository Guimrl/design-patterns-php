<?php

namespace src\DesignPattern\Descontos;

use src\DesignPattern\Orcamento;
use src\DesignPattern\Descontos\Desconto;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }
    public function calculaDesconto(Orcamento $orcamento):float {
        return 0;
    }
}