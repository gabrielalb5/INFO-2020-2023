<?php require("../database/categoria_bd.php");
require("../database/serie_bd.php");
include("../include/cabecalho.php"); 
$lista_categorias = ListarCategorias();
$id_s = $_GET["id_s"];
$serie = buscarSerie($id_s);
$finalizada = $serie["Finalizada"] ? "checked='checked'":"";
?>
<center>
    <div>
        <h3 class="m-4">Editar Série</h3>
        <form action="serie_update.php" method="post">
            <input type="hidden" name="id_s" value="<?=$id_s?>">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="p-2 rounded-pill" value="<?=$serie["Nome"]?>" required/>
            </div></br>
            <div class="form-group">
                <label>Temporadas:</label>
                <input type="number" name="temporada" class="p-2 rounded-pill" value="<?=$serie["Temporada"]?>" required/>
            </div></br>
            <div class="form-group">
                <label>Categoria:</label>
                <select name="id_c" class="p-1 rounded-pill" required>
                    <option value="">Escolha...</option>
                    <?php foreach($lista_categorias as $categoria):
                        $selecionado = $serie["id_c"] == $categoria["id_c"];
                        $atributoSelected = $selecionado ? "selected='selected'":"";
                        ?>
                    <option value="<?=$categoria["id_c"]?>" <?=$atributoSelected?>><?= $categoria["Descricao"]?></option>
                    <?php endforeach; ?>
                </select>
            </div></br>
            <div class="form-group">
                <label>Data de Lançamento:</label></br></br>
                <input type="date" name="lancamento" class="p-2 rounded-pill" value="<?=$serie["Lancamento"]?>" required/>
            </div></br>
            <div class="form-group">
                <input type="checkbox" name="cb_finalizada" <?=$finalizada?> class="p-2 rounded-pill"/>
                <label>Finalizada</label>
            </div></br>
            <input class="btn btn-outline-dark" type="submit" value="Alterar"/>
        </form>
    </div>
</center>
<?php include("../include/rodape.php"); ?>