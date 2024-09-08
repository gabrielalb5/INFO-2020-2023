<?php
require("../database/produto_bd.php");

$lista_produtos = listarProdutos();
?>

<table border="1">
  <tr>
    <th>#</th>
    <th>Descrição</th>
    <th>Valor</th>
  </tr>
  
  <?php
    foreach ($lista_produtos as $produto) :
  ?>
  <tr>
    <td><?= $produto["id_produto"] ?></td>
    <td><?= $produto["descricao"] ?></td>
    <td><?= $produto["valor"] ?></td>     
  </tr>  
  <?php
    endforeach
  ?>
</table>

<p><a href="../public/index.php">Voltar</a></p>