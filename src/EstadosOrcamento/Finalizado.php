<?php

namespace src\DesignPattern\EstadosOrcamento;

use src\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float {
        throw new \DomainException('Um orçamento finalizado não pode receber desconto');
    }
}