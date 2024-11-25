<?php
require_once '../src/Funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    if ($peso && $altura) {
        $imc = calcularIMC((int)$peso, (int)$altura);
        $estado = obtenerEstado($imc);
    } else {
        $error = "Por favor, introduce valores válidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del IMC</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultado del IMC</h1>
        <?php if (isset($imc) && isset($estado)): ?>
            <div class="alert alert-info text-center">
                <p>Tu IMC es: <?= number_format($imc, 2) ?></p>
                <p>Estado: <?= $estado ?></p>
            </div>
        <?php else: ?>
            <div class="alert alert-danger text-center">
                <p><?= $error ?></p>
            </div>
        <?php endif; ?>
        <div class="text-center">
            <a href="index.html" class="btn btn-primary">Volver</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
