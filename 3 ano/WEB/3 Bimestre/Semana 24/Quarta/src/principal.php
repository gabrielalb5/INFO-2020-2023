<?php
include("../include/cabecalho.php");
require("../database/usuario_bd.php");
?>
    <center>
    <?php 
    if (isset($_COOKIE["logado"])) { ?>
    <h3 class="mt-5">Olá, <?= $_COOKIE["logado"] ?>!</p>
    <?php } else {
    header("Location:../public/index.php");
    }
    ?>
    <a href="login.php" class="mt-3 btn btn-dark">Voltar</a>
    </center>
<?php include("../include/rodape.php"); ?>