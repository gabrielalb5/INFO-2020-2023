<?php
    include("../include/cabecalho.php");
    require("../database/mesario_bd.php");

    $nome = $_POST["nome"];
    $fone = $_POST["fone"];
    $nro_inscricao = $_POST["nro_inscricao"];
    $zona = $_POST["zona"];
    $secao = $_POST["secao"];
    CadastrarMesario($nome,$fone,$nro_inscricao,$zona,$secao);

    echo '<center><p class="mt-5">Mesário '.$nome.' cadastrado com sucesso!s</p></center>'
?>
<center>
    <a href="../public/index.php" class="btn btn-outline-dark">Voltar</a> 
</center>
<?php include("../include/rodape.php"); ?>