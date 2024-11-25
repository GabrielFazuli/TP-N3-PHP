<?php

function calcularIMC(int $peso, int $altura): float {
    $alturaMetros = $altura / 100; // Convertir altura a metros
    return $peso / ($alturaMetros * $alturaMetros);
}

function obtenerEstado(float $imc): string {
    if ($imc < 18.5) {
        return "Delgadez";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        return "Normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        return "Sobrepeso";
    } else {
        return "Obesidad";
    }
}

?>
