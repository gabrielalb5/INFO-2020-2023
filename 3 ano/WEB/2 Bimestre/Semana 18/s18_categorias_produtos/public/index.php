<?php
include("../database/categoria_bd.php");
$lista_categorias = listarCategorias();
?>
<!DOCTYPE html>
<html lang="pt=BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserção de produtos com Categoria</title>
</head>
<body>
  <h3>Exibir produtos:</h3>
  <form action="../src/produto_lista.php">
    <button type="submit" value="listar">Listar Produtos</button>
  </form>
  <h3>Inserir produtos:</h3>
  <form action="../src/produto_insere.php" method="post">
    <label for="id_descricao"> 
      Descrição: 
      <input type="text" id="id_descricao" name="descricao_produto">
    </label> 
    <label for="id_valor"> 
      Valor: 
      <input type="number" id="id_valor" name="valor_produto" min="0.1" step="0.1">
    </label>
    <label for="id_categoria">Categoria:</label>
    <select id="id_categoria" name="categoria_produto">
      <option value="">Escolha...</option>
      <?php foreach ($lista_categorias as $categoria) : ?>
        <option value='<?=$categoria["id_categoria"]?>'>
          <?=$categoria["descricao"]?>
        </option>
      <?php endforeach ?>
    </select>
    <button type="submit" value="inserir">Inserir</button>    
  </form>  
</body>
</html>