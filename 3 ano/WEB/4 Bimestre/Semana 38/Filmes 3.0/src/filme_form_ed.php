<?php
require("../database/filme_bd.php");
include("../include/cabecalho_admin.php");
$lista_categorias = listarCategorias();
$id_f = $_GET["id_f"];
$filme = buscarFilme($id_f);
$disponivel = $filme["Disponivel"] ? "checked='checked'":"";
?>
<div>
 <h4>Editar dados</h4>
    <form action="filme_update.php" method="post">
        <input type="hidden" name="id_f" value="<?=$id_f?>">
        <div class="form-group">
            <label for="titulo">Título:</label><br>
            <input type="text" name="titulo" id="titulo" placeholder="Digite o nome do filme" value="<?=$filme["Titulo"]?>" required/>
        </div>
        <div class="form-group">
            <label for="lancamento">Ano de lançamento:</label><br>
            <input type="number" name="lancamento" id="lancamento" placeholder="Digite apenas o ano" min="1800" value="<?=$filme["Lancamento"]?>" required/>
        </div>
        <div class="form-group"><br>
            <label>Categoria:</label>
                <select name="id_c" required>
                <option value="">Escolha...</option>
                <?php foreach ($lista_categorias as $categoria) : 
                    $selecionado = $filme["id_c"] == $categoria["id_c"];
                    $atributoSelected = $selecionado ? "selected='selected'": "";
                    ?>
                    <option value='<?=$categoria["id_c"]?>' <?=$atributoSelected?>>
                    <?=$categoria["Descricao"]?>
                    </option>
                <?php endforeach ?>
                </select><br><br>
        </div>
        <div class="form-group">
            <label for="imagem">Imagem:</label><br>
            <input type="text" name="imagem" id="imagem" placeholder="Link de uma imagem" value="<?=$filme["Imagem"]?>" required/>
        </div>
        <div class="form-group">
            <label for="trailer">Trailer:</label><br>
            <input type="text" name="trailer" id="trailer" placeholder="Link de um vídeo" value="<?=$filme["Trailer"]?>" required/>
        </div>
        <div class="form-group"><br>
                    <input type="checkbox" class="form-check-input" name="cb_disponivel" <?=$disponivel?>>
                    <label class="form-check-label">Disponível para usuários?</label><br><br>
        </div>
        <input class="btn btn-outline-light" type="submit" data-confirm='Tem certeza que deseja editar os dados do filme?' value="Editar"></br></br>
    </form>
</div>
<?php
include("../include/rodape.php");
?>