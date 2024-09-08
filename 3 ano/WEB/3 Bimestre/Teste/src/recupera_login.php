<?php
session_start();
require("../database/admin_bd.php");
$email = $_POST["email"];
$senha = $_POST["senha"];
$admin = buscarAdmin($email,$senha);
sessaoLogin($admin);
?>