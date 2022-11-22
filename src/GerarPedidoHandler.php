<?php

namespace src\DesignPattern;

use src\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use src\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use src\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use src\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
    private array $acoesAposGerarPedido = [];

    public function __construct(/* PedidoRepository, MailService */)
    {
    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido){
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens;
        $orcamento->valor = $gerarPedido->getValorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente;
        $pedido->orcamento = $orcamento;

        foreach($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}