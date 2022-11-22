<?php

namespace src\DesignPattern\AcoesAoGerarPedido;

use src\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void {
        echo 'Enviando e-mail de pedido gerado';
    }
}