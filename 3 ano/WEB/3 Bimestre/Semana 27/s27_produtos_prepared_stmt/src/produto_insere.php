<?php
require("../database/produto_bd.php");

$descricao = $_POST["descricao_produto"];
$valor = $_POST["valor_produto"];
$data_cadastro = $_POST["data_cadastro"];
$categoria = $_POST["categoria_produto"];
//Se o checkbox não for selecionado, ele não será enviado!
if (array_key_exists("cb_lancamento", $_POST)) {
  $lancamento = 1;
} else {
  $lancamento = 0;
}

inserirProduto($descricao, $valor, $data_cadastro, $categoria, $lancamento);

header("Location: produto_lista.php");
?>