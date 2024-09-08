<?php
require("../database/filme_bd.php");
require("../util/mensagens.php");
include("../include/cabecalho_admin.php");
exibirmsg();
$lista_categorias = listarCategorias();
?>
<div>
 <h4>Novo Filme</h4>
    <form action="filme_cad.php" method="post">
        <div class="form-group">
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" id="titulo" placeholder="Digite o nome do filme" required/>
        </div><br>
        <div class="form-group">
            <label for="lancamento">Lançamento: </label>
            <input type="number" name="lancamento" id="lancamento" placeholder="Digite apenas o ano" min="1800" required/>
        </div><br>
        <div class="form-group">
            <label>Categoria: </label>
                <select name="id_c" required>
                <option value="">Escolha...</option>
                <?php foreach ($lista_categorias as $categoria) : ?>
                    <option value='<?=$categoria["id_c"]?>'>
                    <?=$categoria["Descricao"]?>
                    </option>
                <?php endforeach ?>
                </select>
        </div><br>
        <div class="form-group">
            <label for="imagem">Imagem: </label>
            <input type="text" name="imagem" id="imagem" placeholder="Link de uma imagem"required/>
        </div><br>
        <div>
            <label for="trailer">Trailer: </label>
            <input type="text" name="trailer" id="trailer" placeholder="Link de um vídeo" required/>
        </div><br>
        <div class="form-group">
                    <input type="checkbox" class="form-check-input" name="cb_disponivel">
                    <label class="form-check-label">Disponível para usuários?</label><br><br>
        </div>
        <input class="btn btn-success" type="submit" value="Cadastrar"></br></br>
    </form>
</div>
<?php
include("../include/rodape.php");
?>