<?php
require("../database/especie_bd.php");
require("../util/mensagens.php");
include("../include/cabecalho.php");
exibirmsg();
?>
<center>
<div class="mt-5">
 <h3 class="mb-3">Cadastrar Espécie</h3>
    <form action="especie_cadastro.php" method="post">
        <div class="form-group">
            <label>Tipo:</label>
            <input type="text" name="tipo" required><br><br>
        </div>
        <input class="btn btn-outline-dark" type="submit" value="Cadastrar"></br></br>
    </form>
    <img src="../img/jabuti.gif" alt="jabuti" height=180>
</div>
</center>
<?php
include("../include/rodape.php");
?>