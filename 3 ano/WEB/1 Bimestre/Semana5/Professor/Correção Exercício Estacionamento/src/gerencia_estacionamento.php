<?php
    include("logica_estacionamento.php");

    $carro = $_POST["carro"];
    $placa = $_POST["placa"];
    $entrada = $_POST["entrada"];
    $saida = $_POST["saida"];

    $valor = calcularValorEstacionamento($entrada, $saida);
    echo nl2br("Carro: {$carro}\nPlaca: {$placa}\nEntrada: {$entrada}\nSaída: {$saida}\n\nValor Pago:{$valor} ");
?>