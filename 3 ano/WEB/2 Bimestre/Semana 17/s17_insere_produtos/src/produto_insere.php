<?php
require("../database/produto_bd.php");

$descricao = $_POST["descricao_produto"];
$valor = $_POST["valor_produto"];

inserirProduto($descricao, $valor);
?>

<p><a href="../public/index.php">Voltar</a></p>