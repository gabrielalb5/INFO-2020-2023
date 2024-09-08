<?php   
    include("../include/cabecalho.php");
    require("../database/serie_bd.php");
    $id_c = $_POST["id_c"];
    $nome = $_POST["nome"];
    $temporadas = $_POST["temporadas"];
    $lancamento = $_POST["lancamento"];
    inserirSerie($id_c,$nome,$lancamento,$temporadas);
    echo "<center><p class='mt-5'>A série {$nome} foi adicionada!</p></center>";
?>
    <center>
    <a href="../public/index.php" class="btn btn-outline-dark">Voltar</a>
    </center>
<?php
include("../include/rodape.php");
?>