<?php   
    include("../include/cabecalho.php");
    require("../database/serie_bd.php");
    $id_c = $_POST["id_c"];
    $nome = $_POST["nome"];
    $temporadas = $_POST["temporadas"];
    $lancamento = $_POST["lancamento"];
    if(array_key_exists("cb_finalizada",$_POST)){
        $finalizada = 1;
    }else{
        $finalizada = 0;
    }
    inserirSerie($id_c,$nome,$temporadas,$lancamento,$finalizada);
    echo "<center><p class='mt-5'>A série {$nome} foi adicionada!</p></center>";
?>
    <center>
    <a href="principal.php" class="btn btn-outline-dark">Voltar</a>
    </center>
<?php
include("../include/rodape.php");
?>