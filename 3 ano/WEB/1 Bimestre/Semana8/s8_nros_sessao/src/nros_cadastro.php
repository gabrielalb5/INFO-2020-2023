<?php
  session_start();

  include("nros_logica.php");

  if (isset($_POST["cadastro"])) {
    $nro = $_POST["nro"];
    inserirNumero($nro);
  } else {
    removerSessao();
  }

  echo "<p><a href='../index.php'>Voltar</a></p>";
?> 