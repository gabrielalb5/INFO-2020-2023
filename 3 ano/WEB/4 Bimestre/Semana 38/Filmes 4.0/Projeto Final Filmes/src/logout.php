<?php
session_start();
unset($_SESSION["logado"]);
header("Location:../public/index.php");
die();
?>