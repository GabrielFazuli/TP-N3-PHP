<?php

require_once '../src/CalculadoraIMC.php';

$peso = 70;
$altura = 175;

$calculadora = new CalculadoraIMC($peso, $altura);
$imc = $calculadora->calcular();
$estado = $calculadora->obtenerEstado();

echo "IMC calculado: $imc\n";
echo "Estado: $estado\n";

?>
