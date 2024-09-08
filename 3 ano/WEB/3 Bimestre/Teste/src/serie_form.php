<?php require("../database/categoria_bd.php");
include("../include/cabecalho.php"); 
$lista_categorias = ListarCategorias();?>
<center>
    <div>
        <h3 class="m-4">Cadastrar Série</h3>
        <form action="serie_cadastro.php" method="post">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="p-2 rounded-pill" required/>
            </div></br>
            <div class="form-group">
                <label>Temporadas:</label>
                <input type="number" name="temporada" class="p-2 rounded-pill" required/>
            </div></br>
            <div class="form-group">
                <label>Categoria:</label>
                <select name="id_c" class="p-1 rounded-pill" required>
                    <option value="">Escolha...</option>
                    <?php foreach($lista_categorias as $categoria):?>
                    <option value='<?=$categoria["id_c"]?>'><?= $categoria["Descricao"]?></option>
                    <?php endforeach; ?>
                </select>
            </div></br>
            <div class="form-group">
                <label>Data de Lançamento:</label></br></br>
                <input type="date" name="lancamento" class="p-2 rounded-pill" required/>
            </div></br>
            <div class="form-group">
                <input type="checkbox" name="cb_finalizada" class="p-2 rounded-pill"/>
                <label>Finalizada</label>
            </div></br>
            <input class="btn btn-outline-dark" type="submit" value="Cadastrar"/>
        </form>
    </div>
</center>
<?php include("../include/rodape.php"); ?>