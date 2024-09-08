<?php 
    require("../database/regiao_bd.php");
    require("../database/pais_bd.php");
    include("../include/cabecalho.php"); 
    $lista_regioes = ListarRegioes();
    $id_p = $_GET["id_p"];
    $pais = buscarPais($id_p);
?>
<center>
    <div>
        <h3 class="m-4">Editar País</h3>
    </div>
    <form action="pais_update.php" method="post">
        <input type="hidden" name="id_p" value="<?=$id_p?>"/>
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" class="p-2 rounded-pill" value="<?=$pais["Nome"]?>" required/>
        </div><br>
        <div class="form-group">
            <?php foreach($lista_regioes as $regiao)?>
            <label>Região:</label>
            <select name="id_r" class="p-1 rounded-pill">
                <option value="">Escolha...</option>
                <?php foreach($lista_regioes as $regiao): 
                    $selecionado = $pais["id_r"] == $regiao["id_r"];
                    $atributoSelected = $selecionado ? "selected='selected'":"";?>
                    <option value='<?= $regiao["id_r"]?>' <?=$atributoSelected?>><?=$regiao["Descricao"]?></option>
                <?php endforeach; ?>
            </select>
        </div><br>
        <div class="form-group">
            <label>Capital:</label>
            <input type="text" name="capital" class="p-2 rounded-pill" value="<?=$pais["Capital"]?>" required/>
        </div><br>
        <div class="form-group">
            <label>Grupo da Copa:</label>
            <input type="text" name="grupo" class="p-2 rounded-pill" value="<?=$pais["Grupo"]?>" required/>
        </div><br>
        <input type="submit" value="Alterar" class="btn btn-outline-dark"/>
    </form>
</center>
<?php include("../include/rodape.php"); ?>