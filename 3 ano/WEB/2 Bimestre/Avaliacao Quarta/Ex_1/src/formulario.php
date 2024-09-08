<?php
    require("../database/mesario_bd.php");
    include("../include/cabecalho.php");
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
                <label>Telefone:</label>
                <input type="text" name="fone"/>
            </div>
            <div class="form-group">
                <label>Número de Inscrição:</label>
                <input type="text" name="nro_inscricao" required/>
            </div>
            <div class="form-group">
                <label>Zona:</label>
                <input type="number" name="zona" required/>
            </div>
            <div class="form-group">
                <label>Seção:</label>
                <input type="number" name="secao" required/>
            </div>
            <input class="btn btn-outline-dark" type="submit" value="Cadastrar">
        </form>
    </div>
</center>
<?php include("../include/rodape.php"); ?>