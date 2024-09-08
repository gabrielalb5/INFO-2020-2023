<?php
require("../database/categoria_bd.php");
include("../include/cabecalho.php");
$lista_categorias = ListarCategorias();
?>
<center>
<div class="mt-5">
 <h3 class="mb-5">Cadastrar Série</h3>
    <form action="serie_insere.php" method="post">
        <div class="form-group">
            <input type="text" placeholder="Nome" class="p-2 rounded-pill" name="nome" required><br><br>
        </div>
        <div class="form-group">
            <input type="number" placeholder="Temporadas" class="p-2 rounded-pill" name="temporadas" required min="0"><br><br>
        </div>
        <div class="form-group">
            <input type="number" placeholder="Ano de lançamento" class="p-2 rounded-pill" name="lancamento" required min="0"><br><br>
        </div>
        <div class="form-group">
            <label>Categoria</label>
                <select name="id_c" class="p-1 rounded-pill" required>
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