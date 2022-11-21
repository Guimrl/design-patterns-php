<?php

namespace src\DesignPattern\Impostos;

use src\DesignPattern\Orcamento;

class Iss implements Imposto
{

    public function calculaImposto(Orcamento $orcamento):float {
        return $orcamento->valor * 0.06;
    }

}