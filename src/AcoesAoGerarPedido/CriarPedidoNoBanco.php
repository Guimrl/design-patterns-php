<?php

namespace src\DesignPattern\AcoesAoGerarPedido;

use src\DesignPattern\Pedido;

class CriarPedidoNoBanco implements \SplObserver
{
    public function update(\SplSubject $pedido): void {
        
        echo 'Salvando pedido no banco de dados';
    }
}