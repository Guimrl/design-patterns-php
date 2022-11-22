<?php

namespace src\DesignPattern\AcoesAoGerarPedido;

use src\DesignPattern\Pedido;


interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}