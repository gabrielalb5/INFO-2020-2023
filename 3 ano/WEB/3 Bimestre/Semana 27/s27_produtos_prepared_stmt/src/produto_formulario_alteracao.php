<?php
require("../database/produto_bd.php");
require("../database/categoria_bd.php");
include("../include/cabecalho.php");

$id_produto = $_GET["id_produto"];
$produto = buscarProduto($id_produto);
$lista_categorias = listarCategorias();
$lancamento = $produto["lancamento"] ? "checked='checked'" : "";
?>
  <h5 class="text-center">Alterar produtos</h5>
  <form action="../src/produto_altera.php" method="post">
    <input type="hidden" name="id_produto" value="<?=$id_produto?>">
    <div class="form-group">
      <label for="id_descricao">Descrição:</label> 
      <input type="text" class="form-control" id="id_descricao" name="descricao_produto" value="<?=$produto["descricao"]?>">
    </div>
    <div class="form-group"> 
      <label for="id_valor">Valor:</label> 
      <input type="number" class="form-control" id="id_valor" name="valor_produto" step="0.1" value="<?=$produto["valor"]?>">
    </div>    
    <div class="form-group"> 
      <label for="id_data">Data de cadastro:</label> 
      <input type="date" class="form-control" id="id_data" name="data_cadastro" value="<?=$produto["data_cadastro"]?>">
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
    <div class="form-group form-check"> 
      <input type="checkbox" class="form-check-input" id="id_lancamento" name="cb_lancamento" <?=$lancamento?>>
      <label class="form-check-label" for="id_lancamento">Lançamento</label> 
    </div>                  
    <input type="submit" class="btn btn-primary" value="Alterar">
  </form>  
<?php
  include("../include/rodape.php");
?>