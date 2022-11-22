<?php

namespace src\DesignPattern\AcoesAoGerarPedido;

use src\DesignPattern\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void {
        echo 'Criando log de geração de pedido';
    }
}