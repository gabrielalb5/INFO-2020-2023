<?php
session_start();
unset($_SESSION["logado"]);
header("Location: principal.php");
die();
?>