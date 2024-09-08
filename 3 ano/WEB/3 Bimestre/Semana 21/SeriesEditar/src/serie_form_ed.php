<?php
require("../database/categoria_bd.php");
require("../database/serie_bd.php");
include("../include/cabecalho.php");
$lista_categorias = ListarCategorias();
$id_s = $_GET["id_s"];
$serie = buscarSerie($id_s);
?>
<center>
<div class="mt-5">
 <h3 class="mb-5">Editar Série</h3>
    <form action="serie_update.php" method="post">
        <input type="hidden" name="id_s" value="<?=$id_s?>">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?=$serie["Nome"]?>" required><br><br>
        </div>
        <div class="form-group">
            <label>Temporadas:</label>
            <input type="number" name="temporadas" value="<?=$serie["Temporadas"]?>" required min="0"><br><br>
        </div>
        <div class="form-group">
            <label>Ano de lançamento:</label>
            <input type="number" name="lancamento" value="<?=$serie["Lancamento"]?>"required min="0"><br><br>
        </div>
        <div class="form-group">
            <label>Categoria:</label>
                <select name="id_c" required>
                <option value="">Escolha...</option>
                <?php foreach ($lista_categorias as $categoria) : 
                    $selecionado = $serie["id_c"] == $categoria["id_c"];
                    $atributoSelected = $selecionado ? "selected='selected'" : "";
                    ?>
                    <option value="<?=$categoria["id_c"]?>" <?=$atributoSelected?>>
                    <?=$categoria["Descricao"]?>
                    </option>
                <?php endforeach ?>
                </select><br><br>
        </div>
            <button class="btn btn-outline-dark" type="submit" value="upd">Alterar</button></br></br>
        </form>
</div>
</center>
<?php
include("../include/rodape.php");
?>