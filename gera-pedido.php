<?php

require_once "vendor/autoload.php";

use src\DesignPattern\{GerarPedido, GerarPedidoHandler, Orcamento, Pedido};
use src\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use src\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido);
$gerarPedidoHandler->execute($gerarPedido);