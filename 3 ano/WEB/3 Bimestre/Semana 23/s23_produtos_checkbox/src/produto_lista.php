<?php
  require("../database/produto_bd.php");
  include("../include/cabecalho.php");
  include("../util/mensagens.php");
  include("../util/formatacoes.php");  

  exibirMsg();

  $lista_produtos = listarProdutos(); 
?>

<table class="table table-striped mt-2">
  <thead class="table-success">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descrição</th>
      <th scope="col">Valor</th>
      <th scope="col">Cadastro</th>      
      <th scope="col">Categoria</th>
      <th scope="col">Lançamento</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody> 
  
  <?php
    foreach ($lista_produtos as $produto) :
  ?>
    <tr>
      <td scope="row"><?= $produto["id_produto"] ?></td>
      <td><?= $produto["descricao"] ?></td>
      <td><?= $produto["valor"] ?></td>
      <td><?= formata_data_pagina($produto["data_cadastro"]) ?></td>      
      <td><?= $produto["descricao_categoria"] ?></td>
      <?php
        $lancamento = $produto["lancamento"] ? "checked='checked'" : "";
      ?>
      <td class="text-center">
        <input type="checkbox" class="form-check-input" name="cb_lancamento" <?=$lancamento?> disabled>    
      </td>       
      <td>
        <a class="btn btn-primary" href="produto_formulario_alteracao.php?id_produto=<?=$produto["id_produto"]?>">Alterar</a>
      </td>       
      <td>
        <form action="produto_remove.php" method="post">
          <input type="hidden" name="id_produto" value="<?=$produto["id_produto"]?>">
          <button type="submit" class="btn btn-danger" value="del">Remover</button>
        </form>
      </td>      
    </tr>  
  <?php
    endforeach
  ?>
  
  </tbody>
</table>