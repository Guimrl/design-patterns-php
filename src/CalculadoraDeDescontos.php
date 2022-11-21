<?php

namespace src\DesignPattern;

use src\DesignPattern\Descontos\Desconto;
use src\DesignPattern\Descontos\DescontoMaisde5Itens;
use src\DesignPattern\Descontos\DescontoMaisde500Reais;
use src\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float {

        $cadeiaDeDescontos = new DescontoMaisde5Itens(
            new DescontoMaisde500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}