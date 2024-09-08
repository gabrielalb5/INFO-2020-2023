<?php
require("../database/categoria_bd.php");
include("../include/cabecalho.php");

$lista_categorias = listarCategorias();
?>
  <h4>Inserir produtos:</h4>
  <form action="../src/produto_insere.php" method="post">
    <div class="form-group">
      <label for="id_descricao">Descrição:</label> 
      <input type="text" class="form-control" id="id_descricao" name="descricao_produto">
    </div>
    <div class="form-group"> 
      <label for="id_valor">Valor:</label> 
      <input type="number" class="form-control" id="id_valor" name="valor_produto">
    </div>
    <div class="form-group">
      <label for="id_categoria">Categoria:</label>
      <select class="form-control" id="id_categoria" name="categoria_produto">
        <?php foreach ($lista_categorias as $categoria) : ?>
          <option value='<?=$categoria["id_categoria"]?>'>
            <?=$categoria["descricao"]?>
          </option>
        <?php endforeach ?>
      </select>
    </div>             
    <button type="submit" class="btn btn-primary" value="ins">Inserir</button>
  </form>  
<?php
  include("../include/rodape.php");
?>