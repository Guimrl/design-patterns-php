<?php

namespace src\DesignPattern\Impostos;

use src\DesignPattern\Orcamento;

class ikcv implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if($orcamento->valor > 300 && $orcamento->quantidadeItens > 3) {
            return $orcamento->valor * 0.04;
        }

        return $orcamento->valor * 0.025;
    }
}