<?php
require_once 'Funciones.php';

class CalculadoraIMC {
    private $peso;
    private $altura;

    public function __construct(int $peso, int $altura) {
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcular(): float {
        return calcularIMC($this->peso, $this->altura);
    }

    public function obtenerEstado(): string {
        $imc = $this->calcular();
        return obtenerEstado($imc);
    }
}
?>
