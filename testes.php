<?php

use src\DesignPattern\CalculadoraDeDescontos;
use src\DesignPattern\Orcamento;
use src\DesignPattern\Impostos\Iss;
use src\DesignPattern\Impostos\Icms;
use src\DesignPattern\Impostos\Imposto;
use src\DesignPattern\CalculadoraDeImpostos;

require "vendor/autoload.php";

// $calculadora = new CalculadoraDeImpostos();

// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Iss());


$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

echo $calculadora->calculaDescontos($orcamento);
