<?php
require("../database/categoria_bd.php");
include("../include/cabecalho.php");
$lista_categorias = ListarCategorias();
?>
<center>
<div class="mt-5">
 <h3 class="mb-5">Inserir Série</h3>
    <form action="serie_insere.php" method="post">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" required><br><br>
        </div>
        <div class="form-group">
            <label>Temporadas:</label>
            <input type="number" name="temporadas" required min="0"><br><br>
        </div>
        <div class="form-group">
            <label>Ano de lançamento:</label>
            <input type="number" name="lancamento" required min="0"><br><br>
        </div>
        <div class="form-group">
            <label>Categoria:</label>
                <select name="id_c" required>
                <option value="">Escolha...</option>
                <?php foreach ($lista_categorias as $categoria) : ?>
                    <option value='<?=$categoria["id_c"]?>'>
                    <?=$categoria["Descricao"]?>
                    </option>
                <?php endforeach ?>
                </select><br><br>
        </div>
            <input class="btn btn-outline-dark" type="submit" value="Cadastrar"></br></br>
        </form>
</div>
</center>
<?php
include("../include/rodape.php");
?>