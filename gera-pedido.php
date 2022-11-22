<?php

require_once "vendor/autoload.php";

use src\DesignPattern\{Orcamento, Pedido};

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new \src\DesignPattern\GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedido->execute();