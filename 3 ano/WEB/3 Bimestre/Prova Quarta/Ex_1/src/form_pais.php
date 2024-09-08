<?php 
    require("../database/regiao_bd.php");
    include("../include/cabecalho.php"); 
    $lista_regioes = ListarRegioes();
?>
<center>
    <div>
        <h3 class="m-4">Cadastrar País</h3>
    </div>
    <form action="pais_cadastro.php" method="post">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" class="p-2 rounded-pill" required/>
        </div><br>
        <div class="form-group">
            <label>Região:</label>
            <select name="id_r" class="p-1 rounded-pill">
                <option value="">Escolha...</option>
                <?php foreach($lista_regioes as $regiao): ?>
                    <option value='<?= $regiao["id_r"]?>'><?=$regiao["Descricao"]?></option>
                <?php endforeach; ?>
            </select>
        </div><br>
        <div class="form-group">
            <label>Capital:</label>
            <input type="text" name="capital" class="p-2 rounded-pill" required/>
        </div><br>
        <div class="form-group">
            <label>Grupo da Copa:</label>
            <input type="text" name="grupo" class="p-2 rounded-pill" required/>
        </div><br>
        <input type="submit" value="Cadastrar" class="btn btn-outline-dark"/>
    </form>
</center>
<?php include("../include/rodape.php"); ?>