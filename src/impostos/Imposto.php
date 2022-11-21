<?php

namespace src\DesignPattern\Impostos;

use src\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}