<?php
session_start();
if(!isset($_SESSION["logado"])){
    header("Location:../public/index.php");
  }
include("../include/cabecalho.php");
require("../database/usuario_bd.php");
?>
    <center>
    <h4 class="text-white">Página Principal</h4>
    <?php 
    if (isset($_SESSION["logado"])) { ?>
    <p class="mt-3 text-white">Olá, <?= $_SESSION["logado"] ?>!</p>
    <?php } ?>
    <a href="logout.php" class="mt-3 btn btn-outline-light">Sair</a>
    </center>
<?php include("../include/rodape.php"); ?>