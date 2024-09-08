<?php
require("../database/categoria_bd.php");
include("../include/cabecalho.php");

$lista_categorias = listarCategorias();
?>
  <h5 class="text-center">Inserir produtos</h5>
  <form action="../src/produto_insere.php" method="post">
    <div class="form-group">
      <label for="id_descricao">Descrição:</label> 
      <input type="text" class="form-control" id="id_descricao" name="descricao_produto">
    </div>
    <div class="form-group"> 
      <label for="id_valor">Valor:</label> 
      <input type="number" class="form-control" id="id_valor" name="valor_produto" step="0.1">
    </div>
    <div class="row">
      <div class="form-group col"> 
        <label for="id_data">Data de cadastro:</label> 
        <input type="date" class="form-control" id="id_data" name="data_cadastro">
      </div>     
      <div class="form-group col">
        <label for="id_categoria">Categoria:</label>
        <select class="form-control" id="id_categoria" name="categoria_produto">
          <?php foreach ($lista_categorias as $categoria) : ?>
            <option value='<?=$categoria["id_categoria"]?>'>
              <?=$categoria["descricao"]?>
            </option>
          <?php endforeach ?>
        </select>
      </div>
    </div>  
    <div class="form-group form-check"> 
      <input type="checkbox" class="form-check-input" id="id_lancamento" name="cb_lancamento">
      <label class="form-check-label" for="id_lancamento">Lançamento</label> 
    </div>                 
    <button type="submit" class="btn btn-primary" value="ins">Inserir</button>
  </form>  
<?php
  include("../include/rodape.php");
?>