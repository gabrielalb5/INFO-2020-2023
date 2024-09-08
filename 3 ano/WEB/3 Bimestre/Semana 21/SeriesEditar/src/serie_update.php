<?php   
    include("../include/cabecalho.php");
    require("../database/serie_bd.php");
    $id_s = $_POST["id_s"];
    $id_c = $_POST["id_c"];
    $nome = $_POST["nome"];
    $temporadas = $_POST["temporadas"];
    $lancamento = $_POST["lancamento"];
    updateSerie($id_s,$id_c,$nome,$lancamento,$temporadas);
    echo "<center><p class='mt-5'>A série {$nome} foi alterada!</p></center>";
?>
    <center>
    <a href="../public/index.php" class="btn btn-outline-dark">Home</a>
    </center>
<?php
include("../include/rodape.php");
?>