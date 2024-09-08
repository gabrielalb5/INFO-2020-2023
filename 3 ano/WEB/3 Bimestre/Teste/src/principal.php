<?php
session_start();
if(!isset($_SESSION["logado"])){
    header("Location:../public/index.php");
}
include("../include/cabecalho.php");
require("../database/admin_bd.php");
?>
<center>
    <h4 class="mt-5">Bem-vindo!</h4>
    <?php
    if(isset($_SESSION["logado"])){?>
    <p class="mt-3 text-success">Logado como: <?=$_SESSION["logado"]?></p>
    <?php } ?>
    <a href="logout.php" class="mt-3 btn btn-outline-dark">Sair</a>
</center>
<?php include("../include/rodape.php"); ?>