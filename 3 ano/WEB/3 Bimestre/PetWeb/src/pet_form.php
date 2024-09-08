<?php
require("../database/especie_bd.php");
include("../include/cabecalho.php");
$lista_especies = listarespecies();
?>
<center>
<div class="mt-5">
 <h3 class="mb-3">Cadastrar Pet</h3>
    <form action="pet_cadastro.php" method="post">
        <div class="form-group">
            <label>Espécie:</label>
                <select name="id_e" required>
                <option value="">Escolha...</option>
                <?php foreach ($lista_especies as $especie) : ?>
                    <option value='<?=$especie["id_e"]?>'>
                    <?=$especie["Tipo"]?>
                    </option>
                <?php endforeach ?>
                </select><br><br>
        </div>
        <div class="form-group">
            <label>Raça:</label>
            <input type="text" name="raca" required><br><br>
        </div>
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" required><br><br>
        </div>
        <div class="form-group">
            <label>Nascimento:</label>
            <input type="date" name="nascimento" required><br><br>
        </div>
        <div class="form-group">
            <label>Comentário:</label>
            <input type="text" name="comentario" required><br><br>
        </div>
        <div class="form-group">
                    <input type="checkbox" class="form-check-input" name="cb_adotado">
                    <label class="form-check-label">Adotado</label><br><br>
        </div>
            <input class="btn btn-outline-dark" type="submit" value="Cadastrar"></br></br>
        </form>
</div>
</center>
<?php
include("../include/rodape.php");
?>