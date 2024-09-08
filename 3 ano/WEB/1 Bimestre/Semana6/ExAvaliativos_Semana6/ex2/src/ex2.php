<?php
    session_start();
    $destino= $_POST["destino"];
    $tipo = $_POST["tipo"];

    switch($tipo){
        case 1: $tipo = "Cultural";
            break;
        case 2: $tipo = "Ecológico";
            break;
        case 3: $tipo = "Esportivo";
            break;
        case 4: $tipo = "Lazer";
            break;
        case 5: $tipo = "Negócios e Eventos";
            break;
        case 6: $tipo = "Religioso";
            break;
    }

    include("funcoes.php");
    cadastrarDestino($destino,$tipo);
    header("Location:../index.php");
?>