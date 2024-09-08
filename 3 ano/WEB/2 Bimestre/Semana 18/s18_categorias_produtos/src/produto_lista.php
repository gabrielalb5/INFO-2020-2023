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
      <th>Categoria</th>
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
      <td><?= $produto["descricao_categoria"] ?></td>
      <td>
        <form action="produto_remove.php" method="post">
          <input type="hidden" name="id_produto" value="<?=$produto["id_produto"]?>">
          <button type="submit" value="del">Remover</button>
        </form>
      </td>      
    </tr>  
  <?php
    endforeach
  ?>
  
  </tbody>
</table>
<p><a href="../public/index.php">Voltar</a></p>