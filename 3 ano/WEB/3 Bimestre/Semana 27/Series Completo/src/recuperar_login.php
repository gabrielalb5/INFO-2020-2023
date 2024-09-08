<?php
session_start();
require("../database/admin_bd.php");
$email = $_POST["email"];
$senha_md5 = $_POST["senha"];
$admin = buscarAdmin($email,$senha_md5);
sessaoLogin($admin);
?>