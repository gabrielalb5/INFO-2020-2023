<?php
require("../database/categoria_bd.php");
require("../database/serie_bd.php");
include("../include/cabecalho.php");
$lista_categorias= ListarCategorias();
$id_s = $_GET["id_s"];
$serie= buscarSerie($id_s);
$finalizada = $serie["Finalizada"] ? "checked='checked'":"";
?>
<center>
<div class="mt-4">
 <h3 class="mb-4">Editar Série</h3>
    <form action="serie_update.php" method="post">
        <input type="hidden" name="id_s" value="<?=$id_s?>">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" class="p-2 rounded-pill" value="<?=$serie["Nome"]?>" required><br><br>
        </div>
        <div class="form-group">
            <label>Temporadas:</label>
            <input type="text" name="temporadas" class="p-2 rounded-pill" value="<?=$serie["Temporadas"]?>" required><br><br>
        </div>
        <div class="form-group">
            <label>Categoria:</label>
                <select name="id_c" class="p-1 rounded-pill" required>
                <option value="">Escolha...</option>
                <?php foreach ($lista_categorias as $categoria) : 
                    $selcecionado = $serie["id_c"] == $categoria["id_c"];
                    $atributoSelected = $selcecionado ? "selected='selected'": "";
                    ?>
                    <option value="<?=$categoria["id_c"]?>" <?=$atributoSelected?>>
                    <?=$categoria["Descricao"]?>
                    </option>
                <?php endforeach ?>
                </select><br><br>
        </div>
        <div class="form-group">
            <label>Data de Lançamento:</label><br><br>
            <input type="date" name="lancamento" class="p-2 rounded-pill" value="<?=$serie["Lancamento"]?>" required><br><br>
        </div>
        <div class="form-group">
                    <input type="checkbox" class="form-check-input" name="cb_finalizada" <?=$finalizada?>>
                    <label class="form-check-label">Finalizada</label><br><br>
        </div>
            <button class="btn btn-outline-dark" type="submit" value="upd">Alterar</button></br></br>
        </form>
</div>
</center>
<?php
include("../include/rodape.php");
?>