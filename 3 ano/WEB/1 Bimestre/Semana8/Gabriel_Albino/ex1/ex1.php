<?php session_start(); ?>
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
        $n = $_POST["n"];
        if(!isset($_SESSION["numeros"])){
            $_SESSION["numeros"] = $n;
            $numeros = $_SESSION["numeros"];
        }else{
            $numeros = $_SESSION["numeros"] + $n;
        }
        $_SESSION["numeros"] = $numeros;
        echo $numeros;
    ?>
    <br/><a href="index.php">Digitar outro número</a>
    <br><a href="fim_sessao.php">Encerrar sessão</a>
</body>
</html>