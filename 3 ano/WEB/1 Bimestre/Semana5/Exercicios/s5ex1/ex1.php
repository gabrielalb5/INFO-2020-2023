<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <title>Exercício 1</title>
</head>
<body>
    <?php
        include("funcoes.php");

        $dia = $_POST["dia"];
        $atv = $_POST["atv"];

        switch($dia){
            case 1: $dia = "Domingo";
                break;
            case 2: $dia = "Segunda";
                break;
            case 3: $dia = "Terça";
                break;
            case 4: $dia = "Quarta";
                break;
            case 5: $dia = "Quinta";
                break;
            case 6: $dia = "Sexta";
                break;
            case 7: $dia = "Sábado";
                break;
        }
        inserirAtividade($dia, $atv);
        header("Location:index.php");
    ?>
</body>
</html>