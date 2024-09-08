<?php
    require("../database/funcao_bd.php");
    include("../include/cabecalho.php");
    $lista_funcoes = ListarFuncoes();
?>
<center>
    <div class="mt-5">
    <h3 class="mb-2">Cadastrar</h3>
        <form action="cadastro.php" method="post">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" required/>
            </div>
            <div class="form-group">
                <label>Empresa:</label>
                <input type="text" name="empresa"/>
            </div>
            <div class="form-group">
                <label>Função:</label>
                <select name="funcao" required>
                    <option value="">Escolha...</option>
                    <?php foreach($lista_funcoes as $funcao): ?>
                        <option value='<?=$funcao['id_funcao']?>'><?=$funcao["descricao"]?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Diária:</label>
                <input type="number" name="diaria" step="0.01" required/>
            </div>
            <input class="btn btn-outline-dark" type="submit" value="Cadastrar">
        </form>
    </div>
</center>
<?php include("../include/rodape.php"); ?>