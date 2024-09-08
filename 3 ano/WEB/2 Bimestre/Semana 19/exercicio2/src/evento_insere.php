<?php
    include("../include/cabecalho.php");
    require("../database/evento_bd.php");
    $id_t = $_POST["id_t"];
    $descricao = $_POST["descricao"];
    $organizador = $_POST["organizador"];
    $participante = $_POST["participante"];

    CadastrarEvento($id_t,$descricao,$organizador,$participante);
    echo '<center><p class="mt-5"> O evento "'.$descricao.'" foi cadastrado!</center>'
?>
    <center>
        <a href="../public/index.php" class="btn btn-outline-dark">Voltar</a>
    </center
<?php include("../include/rodape.php");