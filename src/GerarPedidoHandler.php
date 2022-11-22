<?php

namespace src\DesignPattern;

class GerarPedidoHandler
{
    public function __construct(/* PedidoRepository, MailService */)
    {
    }
    public function execute(GerarPedido $gerarPedido){
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens;
        $orcamento->valor = $gerarPedido->getValorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente;
        $pedido->orcamento = $orcamento;

        //pedidosRepository
        echo "Cria pedido no banco de dados ". PHP_EOL;
        //mailservice
        echo "Envia e-mail para cliente ". PHP_EOL;
    }
}