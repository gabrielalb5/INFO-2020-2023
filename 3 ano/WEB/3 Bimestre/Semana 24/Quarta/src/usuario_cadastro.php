<?php
    include("../include/cabecalho.php");
    require("../database/usuario_bd.php");
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    cadastrarUsuario($nome,$email,$senha);
    include("../include/rodape.php")
?>