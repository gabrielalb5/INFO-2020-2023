<?php
require("../database/produto_bd.php");
require("../database/categoria_bd.php");
include("../include/cabecalho.php");

$id_produto = $_GET["id_produto"];
$produto = buscarProduto($id_produto);
$lista_categorias = listarCategorias();
?>
  <h4>Alterar produtos:</h4>
  <form action="../src/produto_altera.php" method="post">
    <input type="hidden" name="id_produto" value="<?=$id_produto?>">
    <div class="form-group">
      <label for="id_descricao">Descrição:</label> 
      <input type="text" class="form-control" id="id_descricao" name="descricao_produto" value="<?=$produto["descricao"]?>">
    </div>
    <div class="form-group"> 
      <label for="id_valor">Valor:</label> 
      <input type="number" class="form-control" id="id_valor" name="valor_produto" value="<?=$produto["valor"]?>">
    </div>    
    <div class="form-group">
      <label for="id_categoria">Categoria:</label>
      <select class="form-control" id="id_categoria" name="categoria_produto">
        <?php foreach ($lista_categorias as $categoria) : 
          $estaSelecionado = $produto["id_categoria"] == $categoria["id_categoria"];
          $atributoSelected = $estaSelecionado ? "selected='selected'" : ""; 
        ?>
          <option value="<?=$categoria["id_categoria"]?>" <?=$atributoSelected?>>
            <?=$categoria["descricao"]?>
          </option>
        <?php endforeach ?>
      </select>
    </div>               
    <input type="submit" class="btn btn-primary" value="Alterar">
  </form>  
<?php
  include("../include/rodape.php");
?>