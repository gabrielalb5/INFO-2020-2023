<?php
    require("../database/funcoes.php")
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    buscarUsuario($email,$senha);
?>