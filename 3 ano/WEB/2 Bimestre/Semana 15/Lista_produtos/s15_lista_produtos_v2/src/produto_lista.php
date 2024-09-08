<?php
require("../database/produto_bd.php");

$lista_produtos = listarProdutos();
?>

<table border="1">
  <thead>
    <tr>
      <th>#</th>
      <th>Descrição</th>
      <th>Valor</th>
    </tr>
  </thead>
  <tbody> 
  
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
  </tbody>
</table>