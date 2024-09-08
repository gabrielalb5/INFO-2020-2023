<?php
require("../database/produto_bd.php");

$id_produto = $_POST["id_produto"];
removerProduto($id_produto);
?>

<p>Produto removido!</p>
<p><a href="produto_lista.php">Voltar</a></p>