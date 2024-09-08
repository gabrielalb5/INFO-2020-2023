<?php
    session_start();
    $dia_semana = $_POST["dia_semana"];
    $atividade = $_POST["atividade"];

    if (isset($_SESSION["lista_atividades"])) {
        $atividades = $_SESSION["lista_atividades"];
    } else {
        $atividades = ["domingo" => "Sem atividades",
                        "segunda" => "Sem atividades",
                        "terca" => "Sem atividades"];
    }

    $atividades[$dia_semana] = $atividade;

    $_SESSION["lista_atividades"] = $atividades;

    var_dump($atividades);
    //echo "Dia: {$dia_semana} - Atividade: {$atividade}";
?>