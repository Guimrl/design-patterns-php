<?php

namespace src\DesignPattern;

use src\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{

    public function calcula(Orcamento $orcamento, Imposto $imposto):float {

        return $imposto->calculaImposto($orcamento);
    }
  
}