<?php
    require("../database/tipo_bd.php");
    include("../include/cabecalho.php");
    $lista_tipos = ListarTipos();    
?>
<center>
    <div>
        <h3 class="mt-5">Cadastrar Evento</h3>
        <form action="evento_insere.php" method="post">
            <div class="form-group">
                <label>Tipo de evento:</label>
                <select name="id_t" required>
                    <option value="">Escolha...</option>
                    <?php foreach($lista_tipos as $tipo): ?>
                        <option value='<?= $tipo["id_t"]?>'>
                        <?=$tipo["Nome"]?>
                        </option>
                    <?php endforeach ?>
                </select><br><br>
            </div>
            <div class="form-group">
                <label>Descrição:</labe>
                <input type="text" name="descricao" required><br><br>
            </div>
            <div class="form-group">
                <label>Organizador:</labe>
                <input type="text" name="organizador" required><br><br>
            </div>
            <div class="form-group">
                <label>Participante:</labe>
                <input type="text" name="participante" required><br><br>
            </div>
            <input class="btn btn-outline-dark" type="submit" value="Cadastrar">
        </form>
    </div>
</center>
<?php include("../include/rodape.php"); ?>