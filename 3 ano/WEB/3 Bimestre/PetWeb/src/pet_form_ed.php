<?php
require("../database/especie_bd.php");
require("../database/pet_bd.php");
include("../include/cabecalho.php");
$lista_especies = listarespecies();
$id_p = $_GET["id_p"];
$pet = buscarpet($id_p);
$adotado = $pet["Adotado"] ? "checked='checked'":"";
?>
<center>
<div class="mt-5">
 <h3 class="mb-3">Editar Pet</h3>
    <form action="pet_update.php" method="post">
        <input type="hidden" name="id_p" value="<?=$id_p?>">
        <div class="form-group">
            <label>Especie:</label>
                <select name="id_e" required>
                <option value="">Escolha...</option>
                <?php foreach ($lista_especies as $especie) : 
                    $selecionado = $pet["id_e"] == $especie["id_e"];
                    $atributoSelected = $selecionado ? "selected='selected'" : "";
                    ?>
                    <option value="<?=$especie["id_e"]?>" <?=$atributoSelected?>>
                    <?=$especie["Tipo"]?>
                    </option>
                <?php endforeach ?>
                </select><br><br>
        </div>
        <div class="form-group">
            <label>Raça:</label>
            <input type="text" name="raca" value="<?=$pet["Raca"]?>" required><br><br>
        </div>
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?=$pet["Nome"]?>" required><br><br>
        </div>
        <div class="form-group">
            <label>Nascimento:</label>
            <input type="date" name="nascimento" value="<?=$pet["Nascimento"]?>"required><br><br>
        </div>
        <div class="form-group">
            <label>Comentário:</label>
            <input type="text" name="comentario" value="<?=$pet["Comentario"]?>" required><br><br>
        </div>
        <div class="form-group">
                    <input type="checkbox" class="form-check-input" name="cb_adotado" <?=$adotado?>>
                    <label class="form-check-label">Adotado</label><br><br>
        </div>
            <button class="btn btn-outline-dark" type="submit" value="upd">Alterar</button></br></br>
        </form>
</div>
</center>
<?php
include("../include/rodape.php");
?>