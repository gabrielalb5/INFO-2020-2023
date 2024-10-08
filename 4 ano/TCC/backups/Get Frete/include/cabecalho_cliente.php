<?php require("../database/funcoes.php");
require("../util/mensagens.php");
deslogado();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino & Lívia Galli">
    <title>Get Frete</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.png">
</head>
<body>
  <header>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="../public/index.php"><img src="../assets/img/logowhite.png" alt="GET FRETE" class="logo"></a>
    <a href="#" class="toggle-button"><span class="material-symbols-outlined">menu</span></a>
    <div class="navbar-nav navbar-links">
      <a class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#notificacoes"><span class="material-symbols-outlined">notifications</span></a>
      <a class="nav-item nav-link" href="../cliente/inicio.php">Início</a>
      <a class="nav-item nav-link" href="../cliente/perfil.php">Perfil</a>
      <a class="nav-item nav-link" href="../src/logout.php"><span class="material-symbols-outlined">logout</span> Sair</a>
    </div>
    </nav>
    <div class="espacamento"></div>
    <?php exibir_msg(); ?>
  </header>
  <main>
  <div class="modal fade" id="notificacoes" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Notificações</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>