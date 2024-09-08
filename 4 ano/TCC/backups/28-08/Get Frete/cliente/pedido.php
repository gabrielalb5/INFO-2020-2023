<?php 
    require("../database/funcoes.php");
    $email = $_SESSION["logado"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];
    $origem = $_POST["origem"];
    $destino = $_POST["destino"];
    $data_entrega = $_POST["data_entrega"];
    $horario = $_POST["horario"];
    $status = "Novo";
    criarPedido($email,$descricao,$categoria,$origem,$destino,$data_entrega,$horario,$status);
    header("Location:inicio.php");
?>