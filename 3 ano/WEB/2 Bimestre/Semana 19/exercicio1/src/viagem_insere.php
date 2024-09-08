<?php
    include("../include/cabecalho.php");
    require("../database/viagem_bd.php");
    $origem = $_POST["origem"];
    $destino = $_POST["destino"];
    $periodo = $_POST["periodo"];
    $valor = $_POST["valor"];
    $quantidade = $_POST["quantidade"];
    $id_a = $_POST["id_a"];
    $cafe = $_POST["cafe"];
    $traslado = $_POST["traslado"];

    CadastrarViagem($origem,$destino,$periodo,$valor,$quantidade,$id_a,$cafe,$traslado);
    echo "<center><p class='mt-5'> Sua viagem para {$destino} foi cadastrada!</center>"
?>
    <center>
        <a href="../public/index.php" class="btn btn-outline-dark">Voltar</a>
    </center
<?php include("../include/rodape.php");