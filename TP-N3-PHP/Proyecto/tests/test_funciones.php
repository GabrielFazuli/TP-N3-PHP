<?php

require_once '../src/Funciones.php';

$peso = 70;
$altura = 175;
$imc = calcularIMC($peso, $altura);
$estado = obtenerEstado($imc);

echo "IMC calculado: $imc\n";
echo "Estado: $estado\n";

?>
