<?php
require_once 'classes/Cliente.php';
require_once 'classes/Vendedor.php';
require_once 'classes/Carro.php';

$cliente = new Cliente("Nicolas");
$vendedor = new Vendedor("Godoy");
$carro = new Carro("Celta", "Chevrolet");

echo "=== Informações ===\n";
echo"<br>";
$cliente->exibirNome();
echo"<br>";
$vendedor->exibirNome();
echo"<br>";
$carro->exibirDetalhes();
echo"<br>";

echo "\n=== Compra ===\n";
echo"<br>";
$cliente->comprarCarro($carro, $vendedor);
?>