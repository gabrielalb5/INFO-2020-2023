<?php
    require("../database/admin_bd.php");
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    cadastrarAdministrador($nome,$email,$senha);
    header("Location:../public/index.php");
?>