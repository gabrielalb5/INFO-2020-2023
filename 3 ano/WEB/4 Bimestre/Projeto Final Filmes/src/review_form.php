<?php
require("../database/filme_bd.php");
include("../include/cabecalho_user.php");
$dados = $_SESSION["dados_logado"];
$id_f = $_GET["id_f"];
?>
<div>
 <h4>Novo review</h4>
    <form action="review_cad.php" method="post">
        <input type="hidden" name="id_f" value="<?=$id_f?>">
        <input type="hidden" name="id_u" value="<?=$dados["id_u"]?>">
        <div class="form-group">
            <input type="text" name="comentario" id="comentario" placeholder="Faça um comentário" required/>
        </div><br>
        <input class="btn btn-info" type="submit" value="Enviar">
    </form>
</div>
<?php
include("../include/rodape.php");
?>