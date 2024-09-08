<?php
    require("../database/acomodacao_bd.php");
    include("../include/cabecalho.php");
    $lista_acomodacoes = ListarAcomodacoes();    
?>
<center>
    <div>
        <h3 class="mt-5">Cadastrar Viagem</h3>
        <form action="viagem_insere.php" method="post">
            <div class="form-group">
                <label>Origem:</labe>
                <input type="text" name="origem" required><br><br>
            </div>
            <div class="form-group">
                <label>Destino:</labe>
                <input type="text" name="destino" required><br><br>
            </div>
            <div class="form-group">
                <label>Período:</labe>
                <input type="text" name="periodo" required><br><br>
            </div>
            <div class="form-group">
                <label>Valor:</labe>
                <input type="number" name="valor" step=".01" min="0" required><br><br>
            </div>
            <div class="form-group">
                <label>Quantidade de pessoas:</labe>
                <input type="number" name="quantidade" min="0" required><br><br>
            </div>
            <div class="form-group">
                <label>Acomodação:</label>
                <select name="id_a" required>
                    <option value="">Escolha...</option>
                    <?php foreach($lista_acomodacoes as $acomodacao): ?>
                        <option value='<?= $acomodacao["id_a"]?>'>
                        <?=$acomodacao["Tipo"]?>
                        </option>
                    <?php endforeach ?>
                </select><br><br>
            </div>
            <div class="form-group">
                <label>Café incluso?</label>
                <input type="radio" id="sim" name="cafe" value="1">
                <label for="sim">Sim</label>
                <input type="radio" id="nao" name="cafe" value="0">
                <label for="nao">Não</label>
            </div>
            <div class="form-group">
                <label>Traslado incluso?</label>
                <input type="radio" id="s" name="traslado" value="1">
                <label for="s">Sim</label>
                <input type="radio" id="n" name="traslado" value="0">
                <label for="n">Não</label>
            </div><br>
            <input class="btn btn-outline-dark" type="submit" value="Cadastrar">
        </form>
    </div>
</center>
<?php include("../include/rodape.php"); ?>