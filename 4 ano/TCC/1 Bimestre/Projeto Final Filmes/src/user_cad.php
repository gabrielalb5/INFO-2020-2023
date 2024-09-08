<?php
    require("../database/user_bd.php");
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    cadastrarUser($nome,$email,$senha);
    include("../include/rodape.php");
?>