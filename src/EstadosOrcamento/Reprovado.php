<?php

namespace src\DesignPattern\EstadosOrcamento;

use src\DesignPattern\Orcamento;

class Reprovado extends EstadosOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float {
        throw new \DomainException('Um orçamento reprovado não pode receber desconto');
    }

    public function finaliza(Orcamento $orcamento) {
        $orcamento->estadoAtual = new Finalizado();
    }
}