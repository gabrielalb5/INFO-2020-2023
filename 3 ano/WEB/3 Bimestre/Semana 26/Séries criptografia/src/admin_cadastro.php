<?php
    include("../include/cabecalho_semlogin.php");
    require("../database/admin_bd.php");
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    cadastrarAdmin($nome,$email,$senha);
    include("../include/rodape.php")
?>