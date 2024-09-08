<?php
    include("../include/cabecalho.php");
    require("../database/participante_bd.php");
    $nome = $_POST["nome"];
    $empresa = $_POST["empresa"];
    $funcao = $_POST["funcao"];
    $diaria = $_POST["diaria"];
    CadastrarParticipante($nome,$empresa,$funcao,$diaria);
    echo '<center><p class="mt-5">Participante '.$nome.' cadastrado com sucesso!</p></center>'
?>
<center>
    <a href="../public/index.php" class="btn btn-outline-dark">Voltar</a> 
</center>
<?php include("../include/rodape.php"); ?>